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
            $table->string('order');
            $table->string('text');
            $table->unsignedInteger('forms_questions_id');
            $table->string('behavior')->nullable();
            $table->string('restriction')->nullable();
            $table->string('form_id');
            $table->timestamps();
            $table->foreign('forms_questions_id')
                ->references('id')
                ->on('forms_questions')
                ->onDelete('cascade');
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
