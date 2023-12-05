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
            'role_id' => 1,
            'name' => 'Ali',
            'surname' => 'Valiyev',
            'email' => 'Ali@gmail.com',
            'password' => Hash::make('parol'),
            'position' => 'CEO',
            'phone' => '+998993767698',
            'address' => 'Tashkent',
            'company' => 'PHDL.uz',
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Vali',
            'surname' => 'Valiyev',
            'email' => 'Vali@gmail.com',
            'password' => Hash::make('parol'),
            'position' => 'CEO',
            'phone' => '+998993767698',
            'address' => 'Tashkent',
            'company' => 'PHDL.uz',
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Guli',
            'surname' => 'Valiyev',
            'email' => 'Guli@gmail.com',
            'password' => Hash::make('parol'),
            'position' => 'CEO',
            'phone' => '+998993767698',
            'address' => 'Tashkent',
            'company' => 'PHDL.uz',
        ]);
    }
}
