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
        Schema::create('shop_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Shop owner name
            $table->string('shop_name'); // Shop name
            $table->string('domain')->nullable(); // Domain name (optional)
            $table->foreignId('package_id')->constrained('packages'); // Foreign key for packages table
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active'); // Shop status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_owners');
    }
};
