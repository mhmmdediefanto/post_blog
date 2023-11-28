<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $featured = Post::latest()->paginate(10);
        $featured->loadCount('comments');

        return view('public.index', [
            'sliders' => Post::take(3)->get(),
            'slideEnd' => Post::latest()->take(4)->get(),
            'featured' => $featured,
            'tradingnews' => Post::take(3)->latest()->get(),
            'categories' => Category::all(),
        ]);
    }
}
