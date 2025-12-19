<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('models', function (Blueprint $table) {
            if (Schema::hasColumn('models', 'father_name')) {
                $table->dropColumn('father_name');
            }

            if (Schema::hasColumn('models', 'home_no')) {
                $table->dropColumn('home_no');
            }
        });
    }

    public function down()
    {
        Schema::table('models', function (Blueprint $table) {
            $table->string('father_name')->nullable();
            $table->string('home_no')->nullable();
        });
    }
};
