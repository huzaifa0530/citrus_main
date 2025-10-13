<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('models', function (Blueprint $table) {
            $table->enum('status', ['pending', 'new-request', 'on-hold', 'approved', 'rejected'])
                  ->default('pending')
                  ->after('signed_date');
        });
    }

    public function down(): void
    {
        Schema::table('models', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
