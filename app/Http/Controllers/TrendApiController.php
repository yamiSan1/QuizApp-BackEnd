<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Category;

class TrendApiController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        $max = 0;
        foreach($quizzes as $quiz)
        {
            if ($max < $quiz->getViews()) {
                $max = $quiz->getViews();
            }
        }
        $data = $quizzes->firstWhere('views','=',$max);
        return response()->json($data);
    }
    public function show($id)
    {
        $cat = Category::findOrFail($id);
        $data = $cat->getTrend();
        return response()->json($data);
    }
}
