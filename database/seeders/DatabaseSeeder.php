<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $user_types = ['Administrator', 'Standard', 'Customer'];

        foreach($user_types as $type) {
            DB::table('types')->insert([
                'name' => $type,
            ]);
        }
    }
}
