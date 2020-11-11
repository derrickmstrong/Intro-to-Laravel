<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Blog object
use App\Blog;

class HomeController extends Controller
{
    public function index()
    {
        // This was previously in a routes/web.php get route
        // Displays the welcome view 
        // return view('welcome');

        // Connects to the blog table and accesses all entries
        $blogs = Blog::all();

        // Must pass in a second param which is an array into the view
        return view('home', [
        'blogs' => $blogs
    ]);
    }
}
