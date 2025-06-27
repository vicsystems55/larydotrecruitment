<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('forename')->nullable();
            $table->string('middleName')->nullable();
            $table->string('surname')->nullable();
            $table->string('otherNames')->nullable();
            $table->string('title')->nullable();
            $table->date('dob')->nullable();
            $table->string('birthNationality')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('position')->nullable();
            $table->string('speciality')->nullable();
            $table->string('nokName')->nullable();
            $table->string('nokEmail')->nullable();
            $table->string('nokRelationship')->nullable();
            $table->string('nokMobile')->nullable();
            $table->string('nokAddress')->nullable();
            $table->string('passportNumber')->nullable();
            $table->string('nationality')->nullable();
            $table->date('passportExpiry')->nullable();
            $table->string('visa')->nullable();
            $table->date('visaExpiry')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
