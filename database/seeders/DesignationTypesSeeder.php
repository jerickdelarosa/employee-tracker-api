<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designation_types')->insert([
            ['name' => 'Chairman'],
            ['name' => 'General Manager'],
            ['name' => 'Assistant General Manager'],
            ['name' => 'Department Manager'],
            ['name' => 'Divison Chief']
        ]);
    }
}
