<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\View;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest();
        if (request('search')) {
            $post->where('title', "like", "%" . request('search') . "%")
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('public.post.index', [
            'posts' => $post->paginate(6),
            'trading' => Post::take(5)->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        if (auth()->check()) {
            $userId = auth()->user()->id;
            $postId = $post->id;

            if (!View::where('user_id', $userId)->where('post_id', $postId)->exists()) {
                View::create([
                    'user_id' => $userId,
                    'post_id' => $postId
                ]);
            }
        }

        $formattedCreatedAt = Carbon::parse($post->created_at)->format('d F Y');
        return view('public.post.details', [
            'trading' => Post::take(5)->latest()->get(),
            'posts' => $post,
            'datePost' => $formattedCreatedAt,
            'comments' => Comment::where('post_id', $post->id)->get()
        ]);
    }

    public function categories()
    {
        return view('public.post.categories', [
            'category' => Category::all()
        ]);
    }

    public function showCategory(Category $category)
    {
        return view('public.category.index', [
            'categories' => $category->post,
            'category' => $category->name
        ]);
    }
}


 // $title = '';
        // if (request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = " in $category->name";
        // }

        // if (request('user')) {
        //     $user = User::firstWhere('username', request('user'));
        //     $title = " by $user->name";
        // }

        // return view('public.post.index', [
        //     'title' => 'All Post' . $title,
        //     'posts' => Post::latest()
        //         ->filter(request(['search', 'category', 'user']))
        //         ->paginate(7)
        //         ->withQueryString()
        // ]);
