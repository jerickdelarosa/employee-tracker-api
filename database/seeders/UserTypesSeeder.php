<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('user_types')->truncate();

        DB::table('user_types')->insert([
            ['name' => 'Administrator'],
            ['name' => 'User'],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
