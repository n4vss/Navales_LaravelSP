<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Student List
Route::get('/students', function(){
    $users = [    
        ['id' => 1,'name' => 'test1', 'email' => 'test1@jemayl.com', 'course' => 'BSCS-1', 'year' => '1st Year'],
        ['id' => 2,'name' => 'test2', 'email' => 'test2@jemayl.com', 'course' => 'BSCS-2', 'year' => '2nd Year'],
        ['id' => 3,'name' => 'test3', 'email' => 'test3@jemayl.com', 'course' => 'BSCS-3', 'year' => '3rd Year'],
        ['id' => 4,'name' => 'test4', 'email' => 'test4@jemayl.com', 'course' => 'BSCS-4', 'year' => '4th Year'],
    ];
    return view('students.index', ['users' => $users]);
})->name('students.index'); 

// Add Student Page (Create)
Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

// View Student Page (Show)
// We use a wildcard {id} to simulate dynamic routing
Route::get('/students/{id}', function ($id) {
    return view('students.show');
})->name('students.show');

// Edit Student Page
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit');
})->name('students.edit');