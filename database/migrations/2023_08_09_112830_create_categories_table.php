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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->integer("parentid")->nullable();
            $table->integer("level")->nullable();
            $table->string("ordering")->nullable();
            $table->string("banner")->nullable();
            $table->string("icon")->nullable();
            $table->string("metatile")->nullable();
            $table->string("metadescription")->nullable();
            $table->string("slug")->nullable();
            $table->integer("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
