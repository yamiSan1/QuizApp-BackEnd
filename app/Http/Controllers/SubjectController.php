<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();
        $data = [];
        $i = 0;
        foreach($subjects as $subject)
        {
            $data[$i]['id'] = $subject->getId();
            $data[$i]['name'] = $subject->getName();
            $data[$i]['category'] = $subject->getCategory()->getName();
            $i++;
        }
        return response()->json($data);
    }
    public function show($id) {
        $subject= Subject::findOrFail($id);
        $data = [];
        $data['id'] = $subject->getId();
        $data['name'] = $subject->getName();
        $data['description'] = $subject->getDescription();
        $data['quizzes'] = $subject->getQuizzes();
        $data['category']['id'] = $subject->getCategory()->getId();
        $data['category']['name'] = $subject->getCategory()->getName();
        return response()->json($data);
    }
}
