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
                $table->bigInteger("id")->unsigned();
                $table->enum("role", [
                    "admin",
                    "guide",
                    "guest",
                    "expert"
                ]);
    
                $table->primary(["id", "role"]);
    
                $table->foreign("id")->references("id")->on("users");
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
