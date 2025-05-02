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
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // OrderId
        $table->string('customer');
        $table->string('product');
        $table->date('date');
        $table->decimal('total', 10, 2);
        $table->string('status'); // e.g., pending, completed
        $table->string('payment_method'); // e.g., cash, card, PayPal
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
        Schema::dropIfExists('orders');
    }
};
