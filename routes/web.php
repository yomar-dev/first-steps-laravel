<?php

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
	$links = [
		"https://yomar-dev.github.io/blog/" => "Blog",
        "https://developer.mozilla.org/es/profiles/yomar-dev/" => "MDN",
        "https://gitlab.com/yomar_dev" => "GitLab",
        "https://twitter.com/yomar3092" => "Twitter",
        "https://github.com/yomar-dev" => "GitHub"
	];

    return view('welcome', [
    	"links" => $links
    ]);
});


Route::get('/acerca', function () {
    return view('about');
});
