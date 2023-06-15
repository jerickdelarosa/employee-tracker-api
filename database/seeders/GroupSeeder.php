<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['group_code' => 'groups', 'name' => 'Groups Management'],
            ['group_code' => 'user-types', 'name' => 'User Types Management'],
            ['group_code' => 'users', 'name' => 'User Management']
        ]);
    }
}
