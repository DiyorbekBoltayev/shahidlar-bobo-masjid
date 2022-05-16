<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Timeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('namozs')->insert([
            'Bamdod' => '03:59',
            'Quyosh' => '05:37',
            'Peshin' => '12:53',
            'Asr' => '17:59',
            'Shom' => '20:15',
            'Xufton' => '21:42',

        ]);
    }
}
