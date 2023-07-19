<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Phone::create([
        //    'prefix' => 54,
        //    'phone_number' => 1555555,
        //    'user_id' => 1
        //]);

        Phone::create([
            'prefix' => 33,
            'phone_number' => 333333,
            'user_id' => 1
        ]);
    }
}
