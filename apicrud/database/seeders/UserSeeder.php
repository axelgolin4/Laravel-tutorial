<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::create([
        //   'id' => 1,
        //    'name' => 'Axel',
        //    'email' => 'axelgolin@hotmail.com',
        //    'password' => Hash::make('12345678'),        
        //]);

        User::create([
            'id' => 2,
            'name' => 'Diego',
            'email' => 'Diego@hotmail.com',
            'password' => Hash::make('12345678'),        
        ]);

        User::create([
            'id' => 3,
            'name' => 'Ale',
            'email' => 'Ale@hotmail.com',
            'password' => Hash::make('12345678'),        
        ]);
    }
}
