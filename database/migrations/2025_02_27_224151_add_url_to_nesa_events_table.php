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
        Schema::table('nesa_events', function (Blueprint $table) {
            $table->string('event_page_url')->nullable()->after('prize_pool');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nesa_events', function (Blueprint $table) {
            $table->dropColumn('event_page_url');
        });
    }
};
