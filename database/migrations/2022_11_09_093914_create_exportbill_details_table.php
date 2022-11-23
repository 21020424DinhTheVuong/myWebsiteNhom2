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
        Schema::create('exportbill_details', function (Blueprint $table) {
            $table->unsignedBigInteger('Ebill_ID')->primary();
            $table->unsignedBigInteger('Mobile_ID');
            $table->string('color');
            $table->integer('quantity');
            $table->foreign('Ebill_ID')->references('id')
                ->on('exportbills')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('Mobile_ID')->references('id')
                ->on('mobiles')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exportbill_details');
    }
};
