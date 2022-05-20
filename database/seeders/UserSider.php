<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>'shahidbobo',
            "email"=>'shahidbobo@gmail.com',
            "password"=>Hash::make("masjid123"),
            "email_verified_at"=>Carbon::now(),
            "remember_token"=>"12345678",
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()

        ]);
    }
}
