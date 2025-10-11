<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('content', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        if ($request->has('tag')) {
            $query->where('tags', 'like', '%' . $request->tag . '%');
        }

        $blogs = $query->latest()->paginate(6);
        $featuredBlogs = Blog::latest()->take(4)->get();
        $recentBlogs = Blog::latest()->take(3)->get();
        // $categories = Blog::distinct()->pluck('category')->filter();
        // $tags = Blog::pluck('tags')->flatMap(fn($t) => explode(',', $t))->unique()->take(10);

        return view('blog.index', compact('blogs', 'featuredBlogs', 'recentBlogs'));
    }


    public function home()
    {
       
        $blogs = Blog::latest()->take(3)->get();
        return view('welcome', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
         $recentBlogs = Blog::latest()->take(3)->get();

        return view('blog.show', compact('blog', 'recentBlogs'));
    }

}
