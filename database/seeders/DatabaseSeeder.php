<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user_types = ['Administrator', 'Standard'];

        foreach($user_types as $type) {
            DB::table('types')->insert([
                'name' => $type,
            ]);
        }

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@arttech.com',
            'password' => Hash::make('password'),
            'profile_picture' => 'N/A',
            'user_type' => 1
        ]);
    }
}
