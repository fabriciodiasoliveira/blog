<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
                [
                    'name' => 'Fabrício Dias de Oliveira',
                    'email' => 'devanon.kyosha@gmail.com',
                    'password' => bcrypt('Devanon1'),
                    'tipo' => 'admin',
                ]
        );        
    }
}
