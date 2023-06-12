<?php

namespace Database\Seeders;

use App\Models\Massage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MassageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Massage::insert([
            ['name' => 'Nuru'],
            ['name' => 'Swedish'],
            ['name' => 'Deep Tissue'],
            ['name' => 'Aromatherapy'],
            ['name' => 'Shiatsu'],
        ]);
    }
}
