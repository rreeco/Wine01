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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('sub_title');
            $table->text('content');
            $table->text('body');
            $table->unsignedBigInteger('seller_id');
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
