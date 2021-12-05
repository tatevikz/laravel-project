<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$posts = Blog::all(); //fetch all blog posts from DB
		return view('blog.index', [
            'posts' => $posts,
        ]); //returns the view with posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$id = auth()->user()->id;
        $newPost = Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $id
        ]);
		return redirect('blog/' . $newPost->id);
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
		$blog_user_id = $blog->user_id; //blog created user id
		$user_id = auth()->user()->id;
		$blog_username = User::find($blog_user_id)->name;
		return view('blog.show', [
			'post' 		=> $blog,
			'blog_username'	=> $blog_username,
			'user_id'	=> $user_id
		]); //returns the view with the post
	}    
	
	/**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function showOne(Blog $blog)
    {
		return $blog;
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
		return view('blog.edit', [
			'post' => $blog,
		]); //returns the edit view with the post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('blog/' . $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/blog/index');
	}
}
