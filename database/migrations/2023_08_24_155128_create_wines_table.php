<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\ForeignKeyDefinition;



return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void1        1
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uvaggio');
            $table->integer('annata')->nullable();
            $table->text('descrizione')->nullable();
            $table->enum('categoria', [
                'bollicine', 'rossi', 'bianchi', 'dolci']);
            $table->text('storia')->nullable();
            $table->string('image_path')->nullable();
            $table->decimal('prezzo',5,2);
            $table->decimal('listino',5,2)->nullable();
            $table->unsignedBigInteger('cantina_id');
            $table->timestamps();

            $table->foreign('cantina_id')->references('id')->on('cantinas');

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
