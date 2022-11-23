<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('provide_id');
            $table->string('productName');
            $table->string('color');
            $table->integer('quantity');
            $table->integer('priceImport');
            $table->date('DateImport');
            $table->date('expirationDate');
            $table->timestamps();

            $table->foreign('provide_id')->references('id')
                ->on('provides')
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
        Schema::dropIfExists('mobiles');
    }
};
