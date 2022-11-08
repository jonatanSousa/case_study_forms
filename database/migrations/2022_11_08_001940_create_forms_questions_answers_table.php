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
        Schema::create('forms_questions_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('text');
            $table->string('question_ref');
            $table->string('behavior');
            $table->string('restriction');
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
        Schema::dropIfExists('forms_questions_answers');
    }
};
