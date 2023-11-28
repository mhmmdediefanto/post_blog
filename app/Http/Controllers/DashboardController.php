<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id);

        return view('public.dashboard.index', [
            'posts' => $posts->get(),
            'categories' => Category::all()
        ]);
    }
}
