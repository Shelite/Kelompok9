<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate(10);
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task->load('submissions.user')
        ]);
    }

    public function submit(Request $request, Task $task)
    {
        $request->validate([
            'submission' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);

        try {
            // Simpan file baru
            $path = $request->file('submission')->store('submissions', 'public');
            
            // Buat submission baru
            $task->submissions()->create([
                'file_path' => $path,
                'user_id' => auth()->id()
            ]);

            // Update status task
            $task->update(['status' => 'completed']);

            return redirect()->back()->with('success', 'Tugas berhasil diunggah');
        } catch (\Exception $e) {
            Log::error('Error submitting task', [
                'error' => $e->getMessage(),
                'task_id' => $task->id
            ]);
            return redirect()->back()->with('error', 'Gagal mengunggah tugas: ' . $e->getMessage());
        }
    }

    public function deleteSubmission(Task $task)
    {
        try {
            $submission = $task->submissions()->where('user_id', auth()->id())->latest()->first();
            
            if ($submission) {
                Storage::disk('public')->delete($submission->file_path);
                $submission->delete();
                
                // Update task status jika tidak ada submission lain
                if (!$task->submissions()->where('user_id', auth()->id())->exists()) {
                    $task->update(['status' => 'pending']);
                }

                return redirect()->back()->with('success', 'Jawaban berhasil dihapus');
            }
            
            return redirect()->back()->with('error', 'Tidak ada jawaban untuk dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus jawaban: ' . $e->getMessage());
        }
    }
} 