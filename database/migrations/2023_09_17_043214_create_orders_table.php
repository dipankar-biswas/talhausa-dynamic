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
            $table->integer("customer_id")->nullable();
            $table->integer("product_id")->nullable();
            $table->string("name")->nullable();
            $table->string("slug")->nullable();
            $table->integer("qty")->nullable();
            $table->string("price")->nullable();
            $table->string("image")->nullable();
            $table->string("design")->nullable();
            $table->string("color")->nullable();
            $table->string("color_code")->nullable();
            $table->string("size")->nullable();
            $table->string("tax")->nullable();
            $table->float("shipping")->nullable();
            $table->integer("status")->default(0);
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
