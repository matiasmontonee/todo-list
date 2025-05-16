<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskWebController;

Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/tasks', [TaskWebController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskWebController::class, 'store'])->name('tasks.store');
Route::post('/tasks/{id}/complete', [TaskWebController::class, 'complete'])->name('tasks.complete');
Route::delete('/tasks/{id}', [TaskWebController::class, 'destroy'])->name('tasks.destroy');
