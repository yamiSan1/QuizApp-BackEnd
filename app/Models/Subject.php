<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    public function getCategoryId()
    {
        return $this->attributes['category_id'];
    }
    public function setCategoryId($categoryId)
    {
        $this->attributes['category_id'] = $categoryId;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getQuizzes()
    {
        return $this->quizzes;
    }
    public function setQuizzes($quizzes)
    {
        $this->quizzes = $quizzes;
    }
}
