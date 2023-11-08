<?php

namespace App\Routes;

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

class Routes
{
    public static function RoutesWeb(): void
    {
        Route::prefix('cursos')->group(function() {
            // get methods ::
            Route::get('/',       [CourseController::class, 'index'])->name('cursos.index');
            Route::get('/show',   [CourseController::class, 'show'])->name('cursos.show');
            Route::get('/create', [CourseController::class, 'create'])->name('cursos.create');

            // post methods ::
            Route::post('/store',  [CourseController::class, 'store'])->name('cursos.store');
            Route::post('/update', [CourseController::class, 'update'])->name('cursos.update');

            // delete method ::
            Route::delete('/delete', [CourseController::class, 'delete'])->name('cursos.delete');
        });
    }
}
