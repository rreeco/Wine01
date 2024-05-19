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
            $table->char('id', 11)->primary();       
            $table->string('nome');
            $table->bigInteger('telefono')->nullable();        
            $table->string('via')->nullable();
            $table->string('città')->nullable();
            $table->string('regione')->nullable();
            $table->year('anno_nascita')->nullable();     
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
