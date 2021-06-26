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
            'id_number'=>'7006155050081',
            'gender'=>1,
            'date_of_birth'=>'1970-06-15',
            'delivery_address'=>"844 Haarhoff street\nPretoria\nGauteng\n0084",
            'is_active'=>1,
        ]);
    }
}
