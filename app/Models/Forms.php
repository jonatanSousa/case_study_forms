<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $table = "forms";
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function FormsQuestions() {
        return $this->hasMany(FormsQuestions::class)->orderBy('order');;
    }

    public function FormsQuestionsAnswers(){
        return $this->hasManyThrough(
            FormsQuestionsAnswers::class,
            FormsQuestions::class
        )->orderBy('order');
    }
}
