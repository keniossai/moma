<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Massage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::client()->inRandomOrder()->first()->id,
            'therapist_id' => User::therapist()->inRandomOrder()->first()->id,
            'phone' => '0' . rand(7, 9) . '0' . fake()->numerify('########'),
            'address' => fake()->address,
            'time' => fake()->dateTimeThisMonth(),
            'status' => Booking::statuses()[rand(0,2)],
            'massage_id' => Massage::inRandomOrder()->first()->id,
        ];
    }
}
