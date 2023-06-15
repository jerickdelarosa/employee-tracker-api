<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            ['active' => true, 'branch_code' => 'MAIN', 'name' => 'Main Office Branch'],
            ['active' => false, 'branch_code' => 'BUL', 'name' => 'Bulacan Branch'],
            ['active' => true, 'branch_code' => 'NCR', 'name' => 'NCR Branch'],
            ['active' => true, 'branch_code' => 'LAG', 'name' => 'Laguna Branch']
        ]);
    }
}
