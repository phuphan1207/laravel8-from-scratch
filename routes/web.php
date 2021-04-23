<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('posts');
});


Route::get('posts/{post}', function ($slug) {
	//Find a post by its slug and pass it to a view called "post"
	
	// $path = __DIR__ . "/../resources/posts/{$slug}.html";

	// if (! file_exists($path)) {
	// 	abort(404);
	// }
	// $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
	// return view('mypost', ['post' => $post]);
})->where('posts', '[A-z_\~]+');