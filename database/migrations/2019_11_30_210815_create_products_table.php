<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->mediumText('content')->nullable();
            $table->string('url');
            $table->text('title');
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('proposal')->nullable()->comment('Уникальное предложение');
            $table->string('image');
            $table->string('image_position')->default('50% 50%')->comment('расположение изображения в хедере');
            $table->boolean('is_available')->default(false);
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
        Schema::dropIfExists('products');
    }
}
