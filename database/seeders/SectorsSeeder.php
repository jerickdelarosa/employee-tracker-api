<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([
            ['active' => true, 'sector_code' => 'MAIN', 'name' => 'Main Office Branch', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'BUL', 'name' => 'Bulacan Branch', 'branch_id' => 2],
            ['active' => true, 'sector_code' => 'OC', 'name' => 'Office of the Chairman', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'OGM', 'name' => 'Office of the General Manager', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'GPDMS', 'name' => 'Gaming, Product Developlement & Marketing Sector', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'BOS', 'name' => 'Branch Operations Sector', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'CS', 'name' => 'Charity Sector', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'MSS', 'name' => 'Management Services Sector', 'branch_id' => 1],
            ['active' => true, 'sector_code' => 'AS', 'name' => 'Administrative Sector', 'branch_id' => 1]
        ]);
    }
}
