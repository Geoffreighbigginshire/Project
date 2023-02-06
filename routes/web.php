<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//This 'Route' is for displaying the 'index' page from 'home' folder
//          URL    View Name          Route Name        //
Route::view('/', 'home.index')->name('home.index');

Route::view('/contact', 'home.contact')->name('home.contact');

$posts = [
    1 => [
        'title'         => 'Introduction to Laravel',
        'content'       => 'Good Morning, And Welcome to The Laravel Research Facilities',
        'is_new'        => true,
        'has_comments'  => true
    ],

    2 => [
        'title'         => 'Introduction to PHP',
        'content'       => 'This is a very short, brief, fast, concise, and economical but comprehensive introduction of PHP: Hypertext Preprocessor or used to called Personal Home Page',
        'is_new'        => false
    ],

    3 => [
         'title'        => 'Introduction to Golang',
         'content'      => '<h1>This is a very short introduction to honestly-I-dont-know-what-it-is Go Language</h1>',
         'is_new'       => false
    ]
];


//display all posts
//Route::get('/posts', function() use ($posts)

//    {
//        return view('posts.index', ['posts' => $posts]);
//    }

//);

//display posts based on id
//Route::get('/posts/{id}', function($id) use ($posts){
//    abort_if(!isset($posts[$id]), 404);
//    return view('posts.show', ['posts' => $posts[$id]]);

//    }
//);

Route::resource('posts', PostController::class)->only('index', 'show', 'create', 'store');
