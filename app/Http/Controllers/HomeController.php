<?php

namespace App\Http\Controllers;

use App\Models\{Book, Member};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('home.index', [
    		"books" => Book::count(),
    		"members" => Member::count()
    	]);
    }
}
