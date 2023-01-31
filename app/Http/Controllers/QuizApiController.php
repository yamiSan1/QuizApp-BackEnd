<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuizResource;
use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizApiController extends Controller
{
    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);
        return new QuizResource($quiz);
    }

}
