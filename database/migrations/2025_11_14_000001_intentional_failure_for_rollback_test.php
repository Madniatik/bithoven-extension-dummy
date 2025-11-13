<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This migration intentionally fails to test rollback functionality
     */
    public function up(): void
    {
        // First create a valid table
        Schema::create('dummy_test_rollback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Then throw an exception to trigger rollback
        throw new \Exception('Intentional migration failure for rollback testing');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dummy_test_rollback');
    }
};
