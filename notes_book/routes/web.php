<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\welcomecontroller;
use Illuminate\Support\Facades\Route;


// Route::get('/', [welcomecontroller::class,'welcome'])->name('welcome');
// Route::get('/', [NoteController::class,'index'])->name('note.index');
// Route::get('/', [NoteController::class,'create'])->name('note.create');
// Route::post('', [NoteController::class,'store'])->name('note.store');
// Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show');
// Route::get('/note/{id}edit', [NoteController::class,'edit'])->name('note.edit');
// Route::put('/note/{id}', [NoteController::class,'update'])->name('note.update');
// Route::delete('/note/{id}', [NoteController::class,'destroy'])->name('note.destroy');    

//this code is the same as the above commented code it is a shorthand

Route::resource("note", NoteController::class);