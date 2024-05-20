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
        Schema::create('roles', function (Blueprint $table) {
            $table->bigInteger("signed")->unsigned();
            $table->enum("role", [
                "wine_cellar",
                "seller",
                "restaurant",
            ]);

            $table->primary(["signed", "role"]);

            $table->foreign("signed")->references("id")->on("sellers");   
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
