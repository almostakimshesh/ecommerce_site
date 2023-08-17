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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('division');
            $table->string('country');
            $table->string('pincode');
            $table->string('mobile');
            $table->string('email');
            $table->float ('shipping_charges');
            $table->string('order_status');
            $table->string('payment_method');
            $table->string('order_gateway');
            $table->float ('grand_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
