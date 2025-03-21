<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weeks')
            ->insert(
                [
                    [
                        'name' => 'DOMINGO',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                    [
                        'name' => 'SEGUNDA-FEIRA',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                    [
                        'name' => 'TERÇA-FEIRA',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                    [
                        'name' => 'QUARTA-FEIRA',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                    [
                        'name' => 'QUINTA-FEIRA',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                    [
                        'name' => 'SEXTA-FEIRA',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                    [
                        'name' => 'SÁBADO',
                        'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
                    ],
                ]
        );
    }
}
