<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Blog
use App\Blog;

class BlogController extends Controller
{
    public function view() {
        return view('create');
    }

    public function viewByID($id) {
        // Throws a 404 error message if $id is not found
        $blog = Blog::findOrFail($id);

        return view('blog', [
            'blog' => $blog
        ]);
    }

    public function create(Request $request) {
        $blog = new Blog();

        $blog->tag = $request->tag; 
        $blog->title = $request->title; 
        $blog->content = $request->content; 
        $blog->save();

        return redirect('/');
    }
}
