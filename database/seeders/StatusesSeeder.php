<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('employee_statuses')->truncate();

        DB::table('employee_statuses')->insert([
            ['code' => 'PRSNT', 'name' => 'Present'],
            ['code' => 'ABSNT', 'name' => 'Absent'],
            ['code' => 'OUT', 'name' => 'Log Out'],
            ['code' => 'SL', 'name' => 'Sick Leave'],
            ['code' => 'VL', 'name' => 'Vacantion Leave'],
            ['code' => 'AWAY', 'name' => 'Outside Department'],
            ['code' => 'SMNR', 'name' => 'In Seminar'],
            ['code' => 'TRNG', 'name' => 'In Training'],
            ['code' => 'MTNG', 'name' => 'In Meeting'],
            ['code' => 'PO', 'name' => 'Pass Out'],
            ['code' => 'OB', 'name' => 'Official Business'],
            ['code' => 'RO', 'name' => 'Roll Out'],
            ['code' => 'LS', 'name' => 'Live Streaming']
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
