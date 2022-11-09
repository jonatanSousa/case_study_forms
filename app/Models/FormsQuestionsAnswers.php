<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormsQuestionsAnswers extends Model
{
    protected $fillable = ['text', 'order', 'form_id', 'forms_questions_id','behavior', 'restriction'];

    public function FormsQuestions() {
        return $this->belongsTo(FormsQuestions::class);
    }
}
