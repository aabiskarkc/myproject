<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('heroes', function (Blueprint $table) {
            $table->enum('status', ['active', 'inactive'])->default('inactive')->after('profile_image');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->enum('status', ['active', 'inactive'])->default('inactive')->after('github_url');
        });
    }

    public function down(): void
    {
        Schema::table('heroes', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
