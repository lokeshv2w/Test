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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->string('username')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_photo')->nullable();
            $table->string('user_age')->nullable();
            $table->string("user_city")->nullable();
            $table->string("user_state")->nullable();
            $table->string("user_country")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
