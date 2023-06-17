<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('order_id');
            $table->bigInteger('phone');
            $table->string('email');
            $table->text('message')->nullable();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->boolean('paid')->default(false);
            $table->string('status')->default('pending');
            $table->text('checkout_url');
            $table->text('checkout_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
