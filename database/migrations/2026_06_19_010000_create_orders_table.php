<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->string('phone', 30);
            $table->string('division', 50);
            $table->text('address');
            $table->string('product_name');
            $table->unsignedInteger('quantity')->default(1);
            $table->unsignedInteger('unit_price');
            $table->unsignedInteger('shipping_charge')->default(0);
            $table->unsignedInteger('total');
            $table->string('status', 30)->default('pending')->index();
            $table->text('admin_note')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();

            $table->index(['phone', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
