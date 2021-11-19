<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Matt Laszkiewicz',
            'email'=>'matt.laszkiewicz@gmail.com',
            'password' => Hash::make('4mummy26'),
            'isAdmin'=>true
        ]);
    }
}
