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
        Schema::create('participantdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Date Of Birth');
            $table->string('product');
            $table->string('quantity');
            $table->string('position');
             $table->string('rate');
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
        Schema::dropIfExists('participantdetails');
    }
};
