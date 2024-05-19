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
        Schema::create('events', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('nome');
            $table->date('data');
            $table->string('categoria');   //Con selezione ??
            $table->text('descrizione')->nullable();
            $table->string('città');
            $table->string('regione');
            $table->string('via');
            $table->char('ids', 11);  
            $table->char('idc', 11);   
            $table->timestamps();

            $table->foreign('ids')
                ->references('id')
                ->on('suppliers');
                //->onDelete('cascade');

            $table->foreign('idc')
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
        Schema::dropIfExists('events');
    }
};
