<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "Ghifari",
            "presence_id" => "1",
            "username" => "ghifarirmdn",
            "password" => "123",
            "status" => "WFH",
            "role" => "students",
            "username" => "ghifarirmdn",
        ]);
    }
}
