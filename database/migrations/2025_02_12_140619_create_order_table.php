<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('town');
            $table->string('postcode')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('street_address');
            $table->text('additional_note')->nullable();
            $table->string('status')->default('pending'); // Order status (pending, shipped, completed, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
