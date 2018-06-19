<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDesinfoColumnsToArticsles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('summary_desinfo')->nullable();
            $table->string('desinfo_date')->nullable();
            $table->string('affected_country')->nullable();
            $table->string('desinfo_started')->nullable();
        });
        Schema::create('articleType', function (Blueprint $table) {
            $table->text('name');
            $table->timestamps();

        });
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedInteger('articleType')->nullable();
            $table->foreign('articleType')->references('id')->on('articles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
