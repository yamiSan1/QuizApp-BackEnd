<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function getChoice()
    {
        return $this->attributes['choice'];
    }
    public function getCorrectChoice()
    {
        return $this->attributes['correct_choice'];
    }
    public function getQuestionId()
    {
        return $this->attributes['question_id'];
    }
    public function getQuizId()
    {
        return $this->attributes['quiz_id'];
    }
    public function setChoice($choice)
    {
        $this->attributes['choice'] = $choice;
    }
    public function setCorrectChoice($correctChoice)
    {
        $this->attributes['correct_choice'] = $correctChoice;
    }
    public function setQuestionId($questionId)
    {
        $this->attributes['question_id'] = $questionId;
    }
    public function setQuizId($quizId)
    {
        $this->attributes['quiz_id'] = $quizId;
    }
    public function Question()
    {
        $this->belongsTo(Question::class);
    }
    public function Quiz()
    {
        $this->belongsTo(Quiz::class);
    }
    public function setQuestion($question)
    {
        $this->Question = $question;
    }
    public function setQuiz($quiz)
    {
        $this->Quiz = $quiz;
    }
    public function getQuestion()
    {
        return $this->Question;
    }
    public function getQuiz()
    {
        return $this->Quiz;
    }
}
