<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Home Page</h1>";
});

Route::get('/about', function () {
    return "About Us";
});

Route::get('/user/{id}', function ($id) {
    return "User Profile: #" . $id;
})->where(['id' => '[0-9]+']);

Route::get('/search', function (\Illuminate\Http\Request $request) {
    $query = $request->query('q');
    if ($query) {
        return "Search results for: " . $query;
    }
    return "Please type a search term";
});

Route::get('/grades', function(){
    return "<h1>Student Grades</h1>";
})->Middleware(\App\Http\Middleware\CheckAccess::class);