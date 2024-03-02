<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('tags', 'comments')->orderBy('created_at')->paginate(5);
        $all_tags = Tag::all();
//        dd($all_tags);
        return view('blogs.index', compact('blogs', 'all_tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        if($blog->id === 1)
        {
            $perv = null;
        }
        else
        {
            $perv = Blog::where('id', $blog->id-1)->get()->toArray();
        }
        if($blog->id === Blog::count())
        {
            $next = null;
        }
        else
        {
            $next = Blog::where('id', $blog->id+1)->get()->toArray();
        }
//        dd($perv);
//        dd($next);

//        $next_prev_blogs = Blog::where('id', $blog->id-1)->orWhere('id', $blog->id+1)->get()->toArray();
//        dd($next_prev_blogs);
        $all_tags = Tag::all();
        $tags = $blog->tags;
        return view('blogs.show', compact('blog', 'tags', 'all_tags', 'perv', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
