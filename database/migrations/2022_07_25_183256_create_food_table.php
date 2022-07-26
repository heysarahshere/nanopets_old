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
        Schema::create('food', function (Blueprint $table) {

            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->string('breedableStat')->nullable();
            $table->integer('breedableStatChance')->nullable();
            $table->integer('magic')->default(0);
            $table->integer('strength')->default(0);
            $table->integer('defense')->default(0);
            $table->integer('health')->default(0);
            $table->bigInteger('cost')->default(1000);
            $table->id();
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
        Schema::dropIfExists('food');
    }
};
