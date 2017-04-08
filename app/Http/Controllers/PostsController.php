<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

        $posts = [
            'Post 1',
            'Post 2',
            'Post 3',
            'Post 4',
            'Post 5'
        ];

        return view('posts.index', compact('posts'));
    }
}
