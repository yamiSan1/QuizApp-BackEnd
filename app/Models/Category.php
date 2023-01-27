<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    public function getSubjects()
    {
        return $this->subjects;
    }
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    public function getQuizzes()
    {
        return $this->quizzes;
    }
    public function setQuizzes($quizzes)
    {
        $this->quizzes = $quizzes;
    }
    public function trend()
    {
        return $this->hasOne(Quiz::class)->ofMany('submissions','MAX');
    }
    public function getTrend()
    {
        return $this->trend;
    }
    public function setTrend($trend)
    {
        $this->trend = $trend;
    }

}
