<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store()
    {
        $attributes = $this->validateCategory();
        Category::create($attributes);
        return redirect('/categories')->with('message', 'created');
    }

    public function show(Category $category)
    {
        return view('backend.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $category->update($this->validateCategory());
        return redirect('/categories')->with('message', 'updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories')->with('message', 'deleted');
    }

    protected function validateCategory()
    {
        return request()->validate(
            [
                'name' => ['required', 'min:3']
            ]
        );
    }
}
