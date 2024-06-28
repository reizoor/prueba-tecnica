<?php

use App\Http\Controllers\ApiTaskController;
use Illuminate\Support\Facades\Route;


// Api Tasks
Route::put('/tasks/complete/{task}', [ApiTaskController::class, 'complete']);
Route::resource('tasks', ApiTaskController::class);

