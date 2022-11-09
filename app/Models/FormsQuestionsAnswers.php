<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormsQuestionsAnswers extends Model
{
    protected $fillable = ['text', 'ref', 'forms_questions_id','behavior', 'restriction'];

    public function FormsQuestions() {
        return $this->belongsTo(FormsQuestions::class);
    }
}
