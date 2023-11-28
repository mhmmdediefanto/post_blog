<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::where('user_id', auth()->user()->id);
        return view('public.dashboard.post.index', [
            'posts' => $post->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('public.dashboard.post.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        // jika ada request image
        if ($request->image) {
            // simpan ke patch yg dituju
            $validatedData['image'] = $request->file('image')->store('post-cover-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // limit excerpt ambil valuenya dari body
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 120, '...');
        // simpan data
        Post::create($validatedData);
        // jika berhasil redirect
        return redirect('/dashboard/post')->with('success', 'New Post Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('public.dashboard.post.details', [
            'posts' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('public.dashboard.post.edit', [
            'posts' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:3024',
            'body' => 'required'
        ];



        // jika slug yg baru tidak sama dengan slug yang lama
        if ($request->slug != $post->slug) {
            // maka validasi cek yang baru
            $rules['slug'] = 'required|unique:posts';
        }

        // validasi rulesnya
        $validatedData = $request->validate($rules);

        // jika ada request image
        if ($request->image) {
            // jika ada gambar yang  lama
            if ($request->oldImage) {
                // maka hapus gambar lamanya
                Storage::delete($request->oldImage);
            }
            // simpan ke patch yg dituju
            $validatedData['image'] = $request->file('image')->store('post-cover-image');
        }


        $validatedData['user_id'] = auth()->user()->id;
        // limit excerpt ambil valuenya dari body
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        // simpan data
        Post::where('id', $post->id)
            ->update($validatedData);
        // jika berhasil redirect
        return redirect('/dashboard/post')->with('success', 'Post Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // jika ada gambar yang  lama
        if ($post->image) {
            // maka hapus gambar lamanya
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/post')->with('success', 'Post Has Been Deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
