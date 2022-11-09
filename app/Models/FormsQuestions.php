<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormsQuestions extends Model
{
    protected $table = 'forms_questions';
    protected $primaryKey = 'id';

    protected $fillable = ['text', 'order', 'forms_id'];

    public function Forms() {
        return $this->belongsTo(Forms::class);
    }

    public function FormsQuestionsAnswers() {
        return $this->hasMany(FormsQuestionsAnswers::class)->orderBy('order');;
    }

}
