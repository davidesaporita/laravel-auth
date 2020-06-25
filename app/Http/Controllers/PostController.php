<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Post archive
     */
    public function index() 
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('guest.posts.index', compact('posts'));
    }
}
