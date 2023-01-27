<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);
        $data = [];
        $i = 0;
        $data['title'] = $quiz->getName();
        $data['description'] = $quiz->getDescription();
        foreach ($quiz->getQuestions() as $question) {
            $data['content'][$i]['question'] = $question->getQuestion();
            $data['content'][$i]['choices'] = [];
            foreach ($question->getChoices() as $choice) {
                array_push($data['content'][$i]['choices'], $choice->getChoice());
            }
            $data['content'][$i]['correctChoice'] = $question->getCorrectChoice()->getChoice();
            $i++;
        }
        return response()->json($data);
    }
    public function trendPerCategory($id)
    {
        $cat = Category::findOrFail($id);
        $data = $cat->getTrend();
        return response()->json($data);
    }
    public function trend()
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

}
