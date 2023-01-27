<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Choice;

class Question extends Model
{
    use HasFactory;
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function getQuestion()
    {
        return $this->attributes['question'];
    }
    public function getQuizId()
    {
        return $this->attributes['quiz_id'];
    }
    public function setQuestion($question)
    {
        $this->attributes['question'] = $question;
    }
    public function setQuizId($quizId)
    {
        $this->attributes['quiz_id'] = $quizId;
    }
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
    public function correctChoice()
    {
        return $this->hasOne(Choice::class)->where('correct_choice','=',true);
    }
    public function getChoices()
    {
        return $this->choices;
    }
    public function getCorrectChoice()
    {
        return $this->correctChoice;
    }
    public function setChoices($choices)
    {
        $this->choices = $choices;
    }
    public function setCorrectChoice($correctChoice)
    {
        $this->correctChoice = $correctChoice;
    }
}
