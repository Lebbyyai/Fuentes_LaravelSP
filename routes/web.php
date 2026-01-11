<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::view('/', 'home')->name('home');

// Student List
Route::view('/students', 'students.index')->name('students.index');

// Create Student Page
Route::view('/students/create', 'students.create')->name('students.create');

// Show Student (Simulating showing a specific ID, e.g., /students/1)
Route::view('/students/1', 'students.show')->name('students.show');

// Edit Student (Simulating editing a specific ID, e.g., /students/1/edit)
Route::view('/students/1/edit', 'students.edit')->name('students.edit');