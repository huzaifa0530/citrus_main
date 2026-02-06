<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('whatsapp_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_profile_id');
            $table->string('mobile_no')->nullable();
            $table->text('message');
            $table->string('status')->nullable(); // approved, pending, etc
            $table->timestamps();

            $table->foreign('model_profile_id')
                  ->references('id')
                  ->on('models')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('whatsapp_messages');
    }
};

