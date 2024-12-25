<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ $task->title }}</h3>
                    <p class="mb-4">{{ $task->description }}</p>
                    
                    <div class="mt-4">
                        <h4 class="font-medium mb-2">Submissions:</h4>
                        @forelse($task->submissions as $submission)
                            <div class="mb-2">
                                <a href="{{ Storage::url($submission->file_path) }}" class="text-blue-600 hover:text-blue-800">
                                    {{ basename($submission->file_path) }}
                                </a>
                                <span class="text-sm text-gray-500">
                                    ({{ $submission->user->name }} - {{ $submission->created_at->format('d M Y H:i') }})
                                </span>
                            </div>
                        @empty
                            <p class="text-gray-500">No submissions yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 