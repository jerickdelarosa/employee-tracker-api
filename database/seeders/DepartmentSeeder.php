<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['active' => true, 'department_code' => 'ABD', 'name' => 'Accounting & Budget Department', 'sector_id' => 6],
            ['active' => true, 'department_code' => 'ITSD', 'name' => 'Information Technology & Services Department', 'sector_id' => 6],
            ['active' => true, 'department_code' => 'HRD', 'name' => 'Human Resources Department', 'sector_id' => 7],
            ['active' => true, 'department_code' => 'GSD', 'name' => 'General Services Department', 'sector_id' => 7],
            ['active' => true, 'department_code' => 'ASMD', 'name' => 'Assets & Supply Management Department', 'sector_id' => 7],
            ['active' => true, 'department_code' => 'TD', 'name' => 'Treasury Department', 'sector_id' => 7],
            ['active' => true, 'department_code' => 'CAD', 'name' => 'Charity Assistance Department', 'sector_id' => 5],
            ['active' => true, 'department_code' => 'MSD', 'name' => 'Medical Services Department', 'sector_id' => 5]
        ]);
    }
}
