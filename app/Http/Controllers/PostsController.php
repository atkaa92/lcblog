<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function index()
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->get();
        
        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {
        //--- First ---//
        //     $post = new Post;
        //     $post->title = request('title');
        //     $post->body = request('body');
        //     $post->save();

        //--- Second ---//
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        //--- Final ---(without user_id)//
        // Post::create(request(['title','body']));
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        
        return redirect('/');
    }
}
