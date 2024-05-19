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
        Schema::create('wines', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('nome');
            $table->year('annata');     
            $table->string('metodo');
            $table->string('uvaggio');
            $table->text('note')->nullable();
            $table->text('descrizione')->nullable();
            $table->char('cantina', 11);      
            $table->timestamps();

            $table->foreign('cantina')
                ->references('id')
                ->on('wine_cellars');
                //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
};
