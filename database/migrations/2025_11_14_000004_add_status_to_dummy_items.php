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
        Schema::table('dummy_items', function (Blueprint $table) {
            // Drop old string status column
            $table->dropColumn('status');
        });
        
        Schema::table('dummy_items', function (Blueprint $table) {
            // Add new enum status column
            $table->enum('status', ['pending', 'in_progress', 'completed', 'cancelled'])
                  ->default('pending')
                  ->after('priority')
                  ->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dummy_items', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        
        Schema::table('dummy_items', function (Blueprint $table) {
            // Restore old string status column
            $table->string('status')->default('active')->after('priority');
        });
    }
};
