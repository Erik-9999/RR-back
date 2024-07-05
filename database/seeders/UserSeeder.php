<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        $user = User::create([
            'first_name' => 'nathan',
            'last_name' => 'GrosBG',
            'pseudo' => 'JESUISLEPLUSBOMOUAAA',
            'email' => 'nathan@gmail.com',
            'password' => Hash::make('nathan123'),
            'date_of_birth' => Carbon::tomorrow(),
        ]);

        $user->assignRole('super-admin');

        $user = User::create([
            'first_name' => 'seb',
            'last_name' => 'GrosBG',
            'pseudo' => 'rferf',
            'email' => 'seb@gmail.com',
            'password' => Hash::make('seb123456'),
            'date_of_birth' => Carbon::tomorrow(),
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'first_name' => 'erik',
            'last_name' => 'dark',
            'pseudo' => 'darkErik',
            'email' => 'erik@gmail.com',
            'password' => Hash::make('erik123456'),
            'date_of_birth' => Carbon::tomorrow(),
        ]);

        $user->assignRole('super-admin');
    }
}
