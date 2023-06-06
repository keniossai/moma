<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->unique();
            $table->enum('gender', [User::MALE, User::FEMALE])->nullable();
            $table->string('photo')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->enum('type',[User::ADMIN, User::MASSEUR, User::CLIENT])->default(User::CLIENT);
            $table->enum('location',[User::ABUJA, User::LAGOS, User::PH]);
            $table->boolean('active_status')->default(0);
            $table->string('avatar')->default(config('chatify.user_avatar.default'));
            $table->foreignId('state_id')->nullable()->constrained();
            $table->integer('login_count')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->timestamp('banned_until')->nullable();
            $table->json('meta')->nullable();
            $table->string('messenger_color')->nullable();
            $table->boolean('dark_mode')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
