<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| ROUTES  — the front door of a Laravel app
|--------------------------------------------------------------------------
| Every request (URL + HTTP verb) is matched against this list.
| The first route that matches decides who handles it:
|   - a closure (small function written right here), or
|   - a controller method   [SomeController::class, 'method']
|
| See every route:   php artisan route:list
*/

// Lesson 1: the home page. A closure that returns a view (resources/views/home.blade.php).
Route::get('/', function () {
    return view('home');
});

// Sub-part A: MVC / Routes
Route::get('/hello/{name}', function ($name) {
    return 'Hello ' . ucfirst($name);
});

Route::get('/about', [AboutController::class, 'index']);

// Sub-part B: Resource Controller
Route::resource('students', StudentController::class);

// Sub-part C: Explicit Route Binding
Route::get('/roll/{roll}', function (Student $roll) {
    return view('students.show', ['student' => $roll]);
});

// Sub-part E: JSON API Endpoint
Route::get('/api/students', function () {
    return response()->json(Student::all());
});