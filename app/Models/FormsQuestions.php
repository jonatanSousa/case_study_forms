<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormsQuestions extends Model
{
    protected $table = 'forms_questions';
    protected $primaryKey = 'id';

    protected $fillable = ['text', 'forms_id', 'ref', 'question_ref', 'parent_question'];

    public function Forms() {
        return $this->belongsTo(Forms::class);
    }
}
