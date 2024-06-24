<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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


Route::get('/', function() {
    return view(('welcome'));
}); 

Route::get('/vino', function() {
    return view('wine');
}); 



Route::get('/cantina', function() {
    return view('posts');
}); 

Route::get('/post', function() {

    /*$posts = Post::all();
    ddd($posts);*/

    return view('posts',[
        'posts' => Post::all()
    ]);
}); 


Route::get('/product', function() {
    return view('product');
}); 

Route::get('/posts/{post}', function($id) {


    return view ('post',[
        'post' => Post::findorFail($id)
    ]);
})->where('post', '[A-z_\-]+');

        //find a post by slug and pass it to a view

   // $post = Post::find($slug);
/*$path = __DIR__. "/../resources/posts/{$slug}.html";
   

    $post = file_get_contents($path);

     return $post;
    return view('post', ['post' => $post]);
*/




/*
Route::get('posts/{post})',function($id){
    return view('post',[
        'post' => Post::findOrFail($id)
    ]);
});

//Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
/*
Route::resource('/events', App\Http\Controllers\EventController::class)->names('events');
Route::resource('/wines', App\Http\Controllers\WineController::class)->names('wines');
Route::resource('/users', App\Http\Controllers\UserController::class)->names('users');
//Route::resource('/posts', App\Http\Controllers\PostController::class)->names('posts');
//Route::get('/users/follow/{id}', [App\Http\Controllers\UserController::class, 'follow'])->name('users.follow');
//Route::get('/users/unfollow/{id}', [App\Http\Controllers\UserController::class, 'unfollow'])->name('users.unfollow');
Route::get('/search/wines/{qry}', [App\Http\Controllers\WineController::class, 'search'])->name('wines.search');
Route::get('/search/users/{qry}', [App\Http\Controllers\UserController::class, 'search'])->name('users.search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/