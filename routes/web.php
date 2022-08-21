<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/home-2', function () {
    return view('pages.home-2');
});

Route::get("/about", function(){
    return view("pages.about");
});

// Route::get("/blog", function(){
//     return view("pages.blog");
// });

Route::get("/blog/{id}/", function(){
    return view("pages.blog-details");
});

Route::get("/service", function(){
    return view("pages.service");
});

Route::get("/service/{id}", function(){
    return view("pages.service-details");
});

Route::get("/portfolio", function(){
    return view("pages.portfolio");
});

Route::get("/portfolio/{id}", function(){
    return view("pages.portfolio-details");
});

Route::get("/contact", function(){
    return view("pages.contact");
});

Route::get("/404", function(){
    return view("404");
});


Route::get("/blog", function(){
    $allposts = DB::table('posts')->get();
    return view("pages.blog", ['posts' => $allposts]);
});