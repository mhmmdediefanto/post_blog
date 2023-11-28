<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.dashboard.category.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('public.dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatetdData = $request->validate([
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories'
        ]);

        Category::create($validatetdData);

        return redirect('/dashboard/category')->with('success', 'Category has been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('public.dashboard.category.edit', [
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatetdData = $request->validate([
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories'
        ]);

        Category::where('id', $category->id)
            ->update($validatetdData);

        return redirect('/dashboard/category')->with('success', 'Categories Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        Category::destroy($category->id);

        return redirect('/dashboard/category')->with('success', 'Categories Hass Been Deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
