<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       
        
        DB::table('api_setting')->insert([
            'name' => 'bearer_token',
            'value' => 'dd794103aa5e5425bc7e4babbff2c008fc0e6d73',
        ]);
        DB::table('api_setting')->insert([
            'name' => 'base_uri',
            'value' => 'https://api.wonde.com/v1.0/schools',
        ]);
        DB::table('api_setting')->insert([
            'name' => 'school_id',
            'value' => 'A1930499544',
        ]);
    }
}
