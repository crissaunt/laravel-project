<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Idea;
use App\Http\Controllers\IdeaController;



Route::view('/contact', 'contact');
Route::view('/', 'welcome', [
    'name' => ['one', 'two', 'three']
]);
Route::view('/about', 'about');



// Index show all data
Route::get('/ideas', [IdeaController::class, 'index']);

// Show 1 data
Route::get('/idea/{idea}', [IdeaController::class, 'show']);

//edit a view
Route::get('ideas/{idea}/edit', [IdeaController::class , 'edit']);

// edit a idea via ID
Route::patch('ideas/{idea}', [IdeaController::class, 'update']);


Route::get('/ideas/create',[IdeaController::class, 'create']);

// storing
Route::post('/ideas', [IdeaController::class, 'store']);


// destroy or delete
Route::delete('/idea/{idea}', [IdeaController::class , 'destroy']);

