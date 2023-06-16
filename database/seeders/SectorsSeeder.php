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
            ['active' => true, 'sector_code' => 'OC', 'name' => 'Office of the Chairman'],
            ['active' => true, 'sector_code' => 'OGM', 'name' => 'Office of the General Manager'],
            ['active' => true, 'sector_code' => 'GPDMS', 'name' => 'Gaming, Product Developlement & Marketing Sector'],
            ['active' => true, 'sector_code' => 'BOS', 'name' => 'Branch Operations Sector'],
            ['active' => true, 'sector_code' => 'CS', 'name' => 'Charity Sector'],
            ['active' => true, 'sector_code' => 'MSS', 'name' => 'Management Services Sector'],
            ['active' => true, 'sector_code' => 'AS', 'name' => 'Administrative Sector']
        ]);
    }
}
