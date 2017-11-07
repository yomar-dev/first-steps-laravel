<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	$links = [
			"https://yomar-dev.github.io/blog/" => "Blog",
	        "https://developer.mozilla.org/es/profiles/yomar-dev/" => "MDN",
	        "https://gitlab.com/yomar_dev" => "GitLab",
	        "https://twitter.com/yomar3092" => "Twitter",
	        "https://github.com/yomar-dev" => "GitHub"
		];

	    return view('welcome', [
	    	"teacher" => "Yomar Developer",
	    	"links" => $links
	    ]);
    }

    public function about(){
    	return view('about');
    }
}
