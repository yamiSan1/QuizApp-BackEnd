<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return new CategoryCollection($categories);;
    }
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);;
    }
}
