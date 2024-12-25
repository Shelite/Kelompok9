<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminAssignmentController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\TaskController as AdminTaskController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\DashboardController;

// Admin Routes
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('auth:admin')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Course Routes
        Route::get('/courses', [AdminController::class, 'courses'])->name('admin.courses.index');
        Route::get('/courses/create', [AdminController::class, 'createCourseForm'])->name('admin.courses.create');
        Route::post('/courses', [AdminController::class, 'createCourse'])->name('admin.courses.store');
        Route::get('/courses/{id}/edit', [AdminController::class, 'editCourseForm'])->name('admin.courses.edit');
        Route::put('/courses/{id}', [AdminController::class, 'editCourse'])->name('admin.courses.update');
        Route::delete('/courses/{id}', [AdminController::class, 'deleteCourse'])->name('admin.courses.destroy');
        
        // Class Routes
        Route::post('/class/create', [AdminController::class, 'createClass'])->name('admin.class.create');
        Route::put('/class/{id}/edit', [AdminController::class, 'editClass'])->name('admin.class.edit');
        Route::delete('/class/{id}', [AdminController::class, 'deleteClass'])->name('admin.class.delete');
        
        // Assignment Routes
        Route::get('/assignments', [AdminAssignmentController::class, 'index'])->name('admin.assignments.index');
        Route::get('/assignments/create', [AdminAssignmentController::class, 'create'])->name('admin.assignments.create');
        Route::post('/assignments', [AdminAssignmentController::class, 'store'])->name('admin.assignments.store');
        Route::get('/assignments/{id}/edit', [AdminAssignmentController::class, 'edit'])->name('admin.assignments.edit');
        Route::put('/assignments/{id}', [AdminAssignmentController::class, 'update'])->name('admin.assignments.update');
        Route::delete('/assignments/{id}', [AdminAssignmentController::class, 'destroy'])->name('admin.assignments.destroy');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Tambahkan route untuk materi
    Route::get('/materi', function () {
        return view('materi.web');
    })->name('materi');

    Route::get('/materi/mobile', function () {
        return view('materi.mobile');
    })->name('materi.mobile');

    Route::get('/materi/data-science', function () {
        return view('materi.data-science');
    })->name('materi.data-science');

    Route::get('/materi/cyber-security', function () {
        return view('materi.cyber-security');
    })->name('materi.cyber-security');

    Route::get('/materi/uiux', function () {
        return view('materi.uiux');
    })->name('materi.uiux');

    Route::get('/materi/cloud', function () {
        return view('materi.cloud');
    })->name('materi.cloud');

    Route::get('/materi/python', function () {
        return view('materi.python');
    })->name('materi.python');

    Route::get('/materi/os', function () {
        return view('materi.os');
    })->name('materi.os');

    Route::get('/materi/ai', function () {
        return view('materi.ai');
    })->name('materi.ai');

    // Tambahkan route search di sini
    Route::get('/search', [CourseController::class, 'search'])->name('courses.search');
    
    // Tambahkan route untuk detail course
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

    // Tasks routes
    Route::controller(TaskController::class)->group(function () {
        Route::get('/tasks', 'index')->name('tasks.index');
        Route::get('/tasks/{task}', 'show')->name('tasks.show');
        Route::post('/tasks/{task}/submit', 'submit')->name('tasks.submit');
        Route::delete('/tasks/{task}/submission', 'deleteSubmission')->name('tasks.delete-submission');
    });

    // Classroom
    Route::get('/classroom/{id}', [ClassroomController::class, 'show'])->name('classroom.show');
    Route::get('/classroom/create', [ClassroomController::class, 'create'])->name('classroom.create');
    Route::post('/classroom', [ClassroomController::class, 'store'])->name('classroom.store');
    Route::post('/classroom/{id}/join', [ClassroomController::class, 'join'])->name('classroom.join');

    // Course Routes
    Route::get('/course/web-development', [CourseController::class, 'webDevelopment'])->name('course.web');
    Route::get('/course/mobile-development', [CourseController::class, 'mobileDevelopment'])->name('course.mobile');
    Route::get('/course/data-science', [CourseController::class, 'dataScience'])->name('course.data');
    Route::get('/course/ui-ux-design', [CourseController::class, 'uiUxDesign'])->name('course.uiux');
    Route::get('/course/machine-learning', [CourseController::class, 'machineLearning'])->name('course.ml');
    Route::get('/course/deep-learning', [CourseController::class, 'deepLearning'])->name('course.deep');

    // Assignment routes
    Route::get('/classroom/{id}/assignments/create', [ClassroomController::class, 'createAssignment'])->name('classroom.assignments.create');
    Route::post('/classroom/{id}/assignments', [ClassroomController::class, 'storeAssignment'])->name('classroom.assignments.store');
    Route::get('/classroom/{id}/assignments/{assignment}/edit', [ClassroomController::class, 'editAssignment'])->name('classroom.assignments.edit');
    Route::put('/classroom/{id}/assignments/{assignment}', [ClassroomController::class, 'updateAssignment'])->name('classroom.assignments.update');
    Route::delete('/classroom/{id}/assignments/{assignment}', [ClassroomController::class, 'deleteAssignment'])->name('classroom.assignments.destroy');
});

Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile/avatar', [ProfileController::class, 'removeAvatar'])->name('profile.remove-avatar');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.update-avatar');

    // Task routes
    Route::resource('tasks', TaskController::class);
    Route::post('/tasks/{task}/upload', [TaskController::class, 'upload'])->name('tasks.upload');
    Route::get('/tasks/{task}/download', [TaskController::class, 'download'])->name('tasks.download');
    Route::delete('/tasks/{task}/file', [TaskController::class, 'deleteFile'])->name('tasks.delete-file');
    Route::post('/tasks/{task}/submit', [TaskController::class, 'submit'])->name('tasks.submit');
    Route::delete('/tasks/{task}/submission', [TaskController::class, 'deleteSubmission'])->name('tasks.delete-submission');

    // Class routes
    Route::resource('classes', ClassController::class);
});

// Public Pages
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/mentors', function () {
    return view('pages.mentors');
})->name('mentors');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Social Authentication Routes
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

// Add this route in the public pages section
Route::get('/materi', function () {
    return view('pages.materi');
})->name('materi');

Route::get('/kursus', function () {
    return view('pages.kursus');
});

Route::get('/materi-mobile', function () {
    return view('pages.materi-mobile');
})->name('materi.mobile');

Route::get('/materi-data-science', function () {
    return view('pages.materi-data-science');
})->name('materi.data-science');

Route::get('/materi-cyber-security', function () {
    return view('pages.materi-cyber-security');
})->name('materi.cyber-security');

Route::get('/materi-uiux', function () {
    return view('pages.materi-uiux');
})->name('materi.uiux');

Route::get('/materi-cloud', function () {
    return view('pages.materi-cloud');
})->name('materi.cloud');

Route::get('/materi-python', function () {
    return view('pages.materi-python');
})->name('materi.python');

Route::get('/materi-os', function () {
    return view('pages.materi-os');
})->name('materi.os');

Route::get('/materi-ai', function () {
    return view('pages.materi-ai');
})->name('materi.ai');

// Admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('tasks', AdminTaskController::class);
        
        // Grade routes
        Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
        Route::delete('/grades/{grade}', [GradeController::class, 'destroy'])->name('grades.destroy');
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    // ... route lainnya ...
    Route::get('/admin/tasks/{task}', [TaskController::class, 'show'])->name('admin.tasks.show');
});

require __DIR__.'/auth.php';
