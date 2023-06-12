<?php

use App\Models\Booking;
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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('therapist_id')->constrained('users');
            $table->foreignId('massage_id')->constrained();
            $table->enum('status', Booking::statuses())->default(Booking::PENDING);
            $table->timestamp('time');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
            $table->authors();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
