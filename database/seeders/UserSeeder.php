<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'ugwukelvintochukwu@gmail.com',
            'password' => 'password',
            'phone' => '2348036037038',
            'first_name' => 'Tochukwu',
            'last_name' => 'Ugwu',
            'gender' => User::MALE,
            'type' => User::ADMIN,
            'state_id' => 15,
        ]);

        $massuer = User::create([
            'email' => 'testmasseur@moma.com',
            'password' => 'password',
            'phone' => '2348033037054',
            'first_name' => 'Test',
            'last_name' => 'Masseur',
            'gender' => User::FEMALE,
            'type' => User::MASSEUR,
            'location' => User::LAGOS,
            'state_id' => 15,
        ]);

        $massuer = User::create([
            'email' => 'tanya@gmail.com',
            'password' => 'password',
            'phone' => '2348086037054',
            'first_name' => 'Tanya',
            'last_name' => 'Mally',
            'gender' => User::FEMALE,
            'type' => User::MASSEUR,
            'location' => User::ABUJA,
            'state_id' => 15,
        ]);
        $massuer = User::create([
            'email' => 'kelly@gmail.com',
            'password' => 'password',
            'phone' => '2348036037054',
            'first_name' => 'Kelly',
            'last_name' => 'Michael',
            'gender' => User::FEMALE,
            'type' => User::MASSEUR,
            'location' => User::PH,
            'state_id' => 15,
        ]);

        User::create([
            'email' => 'testclient@moma.com',
            'password' => 'password',
            'phone' => '2348036030038',
            'first_name' => 'Test',
            'last_name' => 'Client',
            'gender' => User::MALE,
            'type' => User::CLIENT,
            'state_id' => 15,
        ]);

        $massuer->masseur()->create([
            'state_id' => 15,
            'name' => $massuer->name. ' Massage Parlour'
        ]);

        User::each(function ($user) {
            $user->unique_id = $user->freshId();
            $user->save();
        });
    }
}
