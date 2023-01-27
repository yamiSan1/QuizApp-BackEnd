<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $data = [];
        $data['id'] = $category->getId();
        $data['name'] = $category->getName();
        $data['description'] = $category->getDescription();
        $data['quizzes'] = $category->getQuizzes();
        return response()->json($data);
    }
}
