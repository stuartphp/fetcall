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
        DB::table('users')->insert([
            'name'=>'Stuart Harrison',
            'email'=>'stuart@itecassist.co.za',
            'password'=>'$2y$10$IJQQuG59n3I8E4UzDFPRoO/jZhV1GquEmP8Vyo5WO32em1h7PyjSS',//password
            'theme'=>1,
            'is_active'=>1,
        ]);
    }
}
