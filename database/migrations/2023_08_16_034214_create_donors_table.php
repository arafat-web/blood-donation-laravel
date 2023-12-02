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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->integer('blood_group');
            $table->string('gender');
            $table->string('profession');
            $table->string('date_of_birth');
            $table->integer('city');
            $table->integer('location');
            $table->text('address');
            $table->integer('status')->default(0)->comment('0 = requested, 1 = accepted');
            $table->integer('active_status')->default(0)->comment('0 = Inactive, 1 = active');
            $table->string('profile_views')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
