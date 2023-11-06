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
        Schema::create('cretate_users', function (Blueprint $table) {
            $table->id();
            $table->string('uname');
            $table->string('username')->unique();
            $table->string('uemail');
            $table->string('upass');
            $table->string('shopname');
            $table->string('mobile');
            $table->string('unique_url')->nullable();
            $table->string('database_name')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cretate_users');
    }
};
