<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->string('education')->nullable();
            $table->string('location')->nullable();
            $table->string('experience')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn(['description', 'education', 'location', 'experience']);
        });
    }
};
