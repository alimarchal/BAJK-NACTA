<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNactasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nactas', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('name')->nullable();
            $table->string('aliases')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('program')->nullable();
            $table->string('last_occupation')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('residence_country')->nullable();
            $table->string('nationality')->nullable();
            $table->string('external_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('internal_id')->nullable();
            $table->string('deceased')->nullable();
            $table->string('remarks')->nullable();
            $table->string('data_sources')->nullable();
            $table->string('related_to')->nullable();
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
        Schema::dropIfExists('nactas');
    }
}
