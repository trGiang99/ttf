<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listening_id')->references('id')->on('listenings')->onDelete('cascade');
            $table->foreignId('question_type_id')->references('id')->on('question_types');
            $table->enum('answer', ['A', 'B', 'C', 'D']);
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
        Schema::dropIfExists('part2');
    }
}
