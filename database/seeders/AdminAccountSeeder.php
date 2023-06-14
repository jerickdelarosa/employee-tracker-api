<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'System',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'user_type_id' => 1,
                'designation' => 'Administrator'
            ]
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
