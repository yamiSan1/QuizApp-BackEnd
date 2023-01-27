<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Category;

class Quiz extends Model
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
    public function getViews()
    {
        return $this->attributes['views'];
    }
    public function getSubmissions()
    {
        return $this->attributes['submissions'];
    }
    public function getAccepted()
    {
        return $this->attributes['accepted'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    public function setSubjectId($subjectId)
    {
        $this->attributes['subject_id'] = $subjectId;
    }
    public function setCategoryId($categoryId)
    {
        $this->attributes['category_id'] = $categoryId;
    }
    public function getSubjectId()
    {
        return $this->attributes['subject_id'];
    }
    public function getCategoryId()
    {
        return $this->attributes['category_id'];
    }
    public function incrementViews()
    {
        $this->attributes['views']++;
    }
    public function incrementSubmissions()
    {
        $this->attributes['submissions']++;
    }
    public function incrementAccepted()
    {
        $this->attributes['accepted']++;
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getQuestions()
    {
        return $this->questions;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function getCategory()
    {
        return $this->category;
    }


}
