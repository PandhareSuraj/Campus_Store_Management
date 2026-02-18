<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stationery_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('stationery_id')->constrained()->onDelete('cascade');
            $table->integer('requested_quantity');
    
            $table->enum('hod_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('principal_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('trust_status', ['pending', 'approved', 'rejected'])->default('pending');
    
            $table->enum('provider_status', ['pending', 'sent'])->default('pending');
    
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationery_requests');
    }
};
