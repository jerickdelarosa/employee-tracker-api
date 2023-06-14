<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('roles')->insert([
            ['code' => 'groups', 'name' => 'Groups Management'],
            ['code' => 'user-types', 'name' => 'User Types Management'],
            ['code' => 'users', 'name' => 'User Management']
        ]);
    }
}
