<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('summaryDesinfo');
            $table->text('disproof');
            $table->text('language')->nullable();
            $table->integer('views')->default(1);
            $table->integer('likes')->default(0);
            $table->text('originalCountry');
            $table->boolean('isApproved')->default(false);
            $table->boolean('isCommentable')->default(true);
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
        Schema::dropIfExists('desinfos');
    }
}
