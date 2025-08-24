<?php
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;
use App\Http\Controllers\Ajax\AjaxController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\Systems\RoleController;
use App\Http\Controllers\Admin\Systems\UserController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\PostController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('menus/{menu}/setup', [MenuController::class, 'setup'])->name('menus.setup');
    Route::post('menus/{menu}/setup', [MenuController::class, 'setupStore'])->name('menus.setup-store');
    Route::resources([
        'generals' => GeneralController::class,
        'slides' => SlideController::class,
        'categories' => CategoryController::class,
        'teachers' => TeacherController::class,
        'activities' => ActivityController::class,
        'units' => UnitController::class,
        'posts' => PostController::class,
        'courses' => CourseController::class,
        'menus' => MenuController::class,
    ]);
    Route::prefix('systems')->group(function () {
        Route::resources([
            'users' => UserController::class,
            'roles' => RoleController::class,
        ]);
    });
    Route::post('enable-column', [AjaxController::class, 'enableColumn'])->name('enable-column');

    Route::get('change-password', [UserController::class, 'changePassword'])->name('change-password');
    Route::post('change-password', [UserController::class, 'changePasswordPost'])->name('change-password-post');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    Lfm::routes();
});

require __DIR__ . '/auth.php';
