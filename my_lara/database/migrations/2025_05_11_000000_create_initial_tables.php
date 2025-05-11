<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('telephone_number')->nullable();
            $table->string('password')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->integer('user_settings')->nullable();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_username')->nullable();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('main_category')->nullable();
            $table->string('secondary_category')->nullable();
        });

        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');
            $table->string('item_name')->nullable();
            $table->float('price')->nullable();
            $table->text('description')->nullable();
            $table->string('parameters')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->string('main_category')->nullable();
            $table->integer('style_fabric')->nullable();
            $table->string('colour')->nullable();
            $table->integer('times_bought')->nullable();
            $table->date('release_date')->nullable();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id('image_id');
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('item_id')->on('items');
            $table->string('image_name')->nullable();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id');
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('item_id')->on('items');
            $table->string('size')->nullable();
            $table->integer('quantity')->nullable();
        });

        Schema::create('order_info', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->string('delivery_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('card_info')->nullable();
            $table->string('delivery_method')->nullable();
        });

        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id('shopping_cart_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('item_id')->references('item_id')->on('items');
            $table->string('size')->nullable();
            $table->string('session_id')->nullable();
            $table->integer('quantity')->nullable();
        });

        Schema::create('liked', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('item_id')->references('item_id')->on('items');
            $table->string('size')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('liked');
        Schema::dropIfExists('shopping_cart');
        Schema::dropIfExists('order_info');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('images');
        Schema::dropIfExists('items');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('user');
    }
};
