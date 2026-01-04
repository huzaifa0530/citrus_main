<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id();

            // Personal
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->date('dob')->nullable();
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('gender')->nullable(); // e.g. Male/Female/Shemale

            $table->string('occupation')->nullable();

            // Contacts
            $table->string('mobile_no')->nullable();
            $table->string('home_no')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();

            // Social ids
            $table->string('facebook_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('snapchat_id')->nullable();
            $table->string('tiktok_id')->nullable();
            $table->string('youtube_id')->nullable();

            // Passport
            $table->string('passport_no')->nullable();
            $table->date('passport_expiry')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country_of_passport')->nullable();

            // CNIC / national id
            $table->string('cnic')->nullable();
            $table->date('cnic_expiry')->nullable();

            // Emergency / backup
            $table->string('backup_contact_name')->nullable();
            $table->string('backup_number')->nullable();

            // Languages - store as JSON (checkboxes + other text)
            $table->json('languages')->nullable(); // e.g. ["Urdu","English","Other:Sindhi"]
            $table->text('other_languages')->nullable();

            // Talent / measurements
            $table->text('special_talent')->nullable();
            $table->text('measurements')->nullable();

            // File paths (store as string paths in storage)
            $table->string('close_up_image')->nullable();
            $table->string('full_body_image')->nullable();
            $table->string('half_body_image')->nullable();
            $table->string('side_body_image')->nullable();
            $table->string('signature_image')->nullable();
            $table->string('video')->nullable();

            $table->date('signed_date')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
