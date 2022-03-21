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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->date('posted_date');
            $table->string('project_name')->nullable();
            $table->text('project_desctiption');
            $table->unsignedBigInteger('profession_id');
            $table->string('post_img');
            $table->string('post_link');
            $table->string('post_status')->default("start");
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profession_id')->references('id')->on('professions')->onDelete('cascade');
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
        Schema::dropIfExists('post');
    }
};
