<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->integer('formId');
            $table->string('text');
            $table->string('question_ref');
            $table->string('parent_question');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms_questions');
    }
};
