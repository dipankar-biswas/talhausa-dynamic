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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->integer("state")->nullable();
            $table->integer("city")->nullable();
            $table->text("address")->nullable();
            $table->string("quantity")->nullable();
            $table->integer("payment")->nullable();
            $table->string("paymethod")->nullable();
            $table->string("subtotal")->nullable();
            $table->string("trackingid")->nullable();
            $table->string("tax")->nullable();
            $table->string("total")->nullable();
            $table->integer("orderStatus")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
