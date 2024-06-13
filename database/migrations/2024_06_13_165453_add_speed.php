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
        // add plans speed
        Schema::table('plans', function (Blueprint $table) {
            $table->integer('speed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // remove plans speed
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('speed');
        });
    }
};
