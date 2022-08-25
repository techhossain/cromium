<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $allposts = Cache::remember('posts-maher', now()->addMinutes(1), function () {
        //     return DB::table('blogs')->paginate(3);
        // });

        // return view("pages.blog", [
        //     'posts' => $allposts,
        //     'title' => 'Blog Page'
        // ]);

        // dd(Blog::all());

        return view("pages.blog", [
            'posts' => Blog::all(),
            'title' => 'Blog Page'
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // $single_post = cache()->remember('posts.{$slug}', now()->addMinutes(50), function () use ($slug) {
        //     return DB::table('blogs')->where('slug', $slug)->first();
        // });

        // Blog::where('slug', $slug)->get()->first()

        // cache()->forget('posts.{$slug}');

        // $single_post = DB::table('blogs')->where('slug', $slug)->first();
        return view("pages.blog-details", ['post' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getPostByCategory(Category $category)
    {
        // $id = Category::firstWhere('slug', $slug)->id;
        return view('pages.category-posts', [
            // 'data' => Blog::where('category_id', $id)->get(),
            'data' => $category->posts,
            'title' => $category->name,
            'slug'  => $category->slug
        ]);
    }

    public function getPostByUser(User $user)
    {
        return view('pages.user-posts', [
            'title' => $user->name,
            'data' => $user
        ]);
    }
}
