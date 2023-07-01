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
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('product_code')->unique();
            $table->double('buying_price', 10, 2);
            $table->double('selling_price', 10, 2);
            $table->double('current_price', 10, 2);
            $table->float('discount_percentage', 8, 2);
            $table->text('key_features');
            $table->text('specifications')->nullable();
            $table->text('description')->nullable();
            $table->text('questions')->nullable();
            $table->boolean('is_pc_build')->default(false);
            $table->enum("availability", ["pre_order", "in_stock", "out_of_stock"])->default("in_stock");
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->softDeletes();
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
