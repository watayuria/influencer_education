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
        Schema::table('delivery_times', function (Blueprint $table) {
            $table->foreignId('ms_id');
            $table->datetime('delivery_from');
            $table->datetime('delivery_to');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('delivery_times', function (Blueprint $table) {
            //
        });
    }
};
