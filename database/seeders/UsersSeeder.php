<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')
        ->insert(
            [
                [
                    "username" => "Matheus",
                    "password" => bcrypt("abcd1234"),
                    "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                ],
                [
                    "username" => "Matheus2",
                    "password" => bcrypt("abcd1234"),
                    "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                ],
                [
                    "username" => "Matheus3",
                    "password" => bcrypt("abcd1234"),
                    "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                ],
                [
                    "username" => "Matheus4",
                    "password" => bcrypt("abcd1234"),
                    "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                ],
            ]
        );
    }
}
