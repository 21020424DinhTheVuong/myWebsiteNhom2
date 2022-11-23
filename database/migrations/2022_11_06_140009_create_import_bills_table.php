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
        Schema::create('import_bills', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->unsignedBigInteger('Mobile_ID');
//            $table->unsignedBigInteger('epl_ID');
            $table->unsignedBigInteger('provideID');
            $table->string('color');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('provideID')->references('id')
                ->on('provides')
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
        Schema::dropIfExists('import_bills');
    }
};
