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
        Schema::create('wine_cellars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('born')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('vat')->unique();
            $table->string('city');
            $table->string('country');
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('wine_cellars');
    }
};
