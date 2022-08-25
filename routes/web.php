<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/home-2', function () {
    return view('pages.home-2');
});

Route::get("/about", function () {
    return view("pages.about");
});

Route::get("/service", function () {
    return view("pages.service");
});

Route::get("/service/{id}", function () {
    return view("pages.service-details");
});

Route::get("/portfolio", function () {
    return view("pages.portfolio");
});

Route::get("/portfolio/{id}", function () {
    return view("pages.portfolio-details");
});

Route::get("/contact", function () {
    return view("pages.contact");
});

Route::get("/404", function () {
    return view("404");
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get("/blog", [BlogsController::class, 'index'])->name('blog');

Route::get("/blog/{blog:slug}/", [BlogsController::class, 'show'])->name('single-post');

Route::get("/category/{category:slug}/", [BlogsController::class, 'getPostByCategory'])->name('category-post');

Route::get("/user/{user:username}/", [BlogsController::class, 'getPostByUser'])->name('user-post');
