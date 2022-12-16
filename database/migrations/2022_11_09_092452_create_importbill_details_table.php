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
        Schema::create('importbill_details', function (Blueprint $table) {

            $table->unsignedBigInteger('Ibill_ID')->primary();
            $table->unsignedBigInteger('Mobile_ID');
            $table->string('color');
            $table->integer('quantity');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('importbill_details');
    }
};
