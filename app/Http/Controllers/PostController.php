<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function single($slug)
    {
        $post = Post::whereSlug($slug)->first();
        return view('single', compact('post'));
    }
}
