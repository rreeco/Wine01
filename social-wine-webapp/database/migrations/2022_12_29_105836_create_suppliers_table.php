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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->char('id', 11)->primary();   
            $table->string('nome');
            $table->bigInteger('telefono')->nullable();
            $table->string('via')->nullable();
            $table->string('città')->nullable();
            $table->string('regione')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
};
