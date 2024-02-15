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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('header_text')->nullable();
            $table->string('about')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('phone_secondary')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('email_secondary')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->longText('location_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
