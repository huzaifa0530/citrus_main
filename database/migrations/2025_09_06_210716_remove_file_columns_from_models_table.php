<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('models', function (Blueprint $table) {
            if (Schema::hasColumn('models', 'close_up_image')) {
                $table->dropColumn([
                    'close_up_image',
                    'full_body_image',
                    'half_body_image',
                    'side_body_image',
                    'signature_image',
                    'video'
                ]);
            }
        });
    }

    public function down(): void
    {
        Schema::table('models', function (Blueprint $table) {
            // Recreate columns if you rollback (nullable strings)
            $table->string('close_up_image')->nullable();
            $table->string('full_body_image')->nullable();
            $table->string('half_body_image')->nullable();
            $table->string('side_body_image')->nullable();
            $table->string('signature_image')->nullable();
            $table->string('video')->nullable();
        });
    }
};
