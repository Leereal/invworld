<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table.
        DB::table('plans')->truncate();
        Plan::create(['name'=>'FOREX','interest'=>'20','period'=>'7']);
        Plan::create(['name'=>'BINARY','interest'=>'25','period'=>'7']);
        Plan::create(['name'=>'SYNTHETIC','interest'=>'30','period'=>'7']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
