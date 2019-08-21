<?php


Route::get('/', function () {
    return view('welcome');
});

//localhost:8000/home

Route::get('/home', function (){
    return view('home');
});

// localhost:8000/aboutus

Route::get('/about', function (){
   return view('about');
});
