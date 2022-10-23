<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {

        Schema::create('images', function (Blueprint $table) {

            $table->id();
            $table->morphs('imageable');
            $table->unsignedBigInteger('upload_by');
            $table->text('image');
            $table->timestamps();

            // $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('upload_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
