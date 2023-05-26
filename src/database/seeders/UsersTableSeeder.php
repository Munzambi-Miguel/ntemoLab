<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '9',
                'name' => 'Jose Ferreira',
                'email' => 'jose.ferreira@kinsari.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TzO0swmCUkJ2d0LpsQ4guO.bSzwfo8K2vQmaNpLxaPzOUgxYtdluG',
                'remember_token' => NULL,
                'created_at' => '2021-04-24 09:23:05.713',
                'updated_at' => '2021-08-03 13:22:04.743',
                'esta_verificado' => NULL,
                'avatar' => 'Rb4sKAxytF97hH3iH6SGWWL1AgzLL3ErPlrYhvo6.png',
            ),
            1 => 
            array (
                'id' => '58',
                'name' => 'Sebastião Paulo',
                'email' => 'sebastiao.paulo@kinsari.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gX3TeJD9ZLLQQ72XkzQZv.O2WN.OAsIVSOSFAi7Bark4uMAjTkxxy',
                'remember_token' => NULL,
                'created_at' => '2021-08-03 10:28:45.840',
                'updated_at' => '2021-08-03 13:23:03.773',
                'esta_verificado' => NULL,
                'avatar' => 'N6jld9Q29cds3Z5ewAQ2J4PBqi8ipFgxRkCt7GHT.png',
            ),
            2 => 
            array (
                'id' => '59',
                'name' => 'Eliseu',
                'email' => 'eliseu.nsakala@bpm-geeks.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VrUv5HiwDKB.gn8Gb0F8eOLPeeA3yyN04a497WZuuUAvZiGvFhC2a',
                'remember_token' => NULL,
                'created_at' => '2021-08-03 14:08:34.910',
                'updated_at' => '2021-08-03 14:08:34.910',
                'esta_verificado' => NULL,
                'avatar' => 'paeGAqEjBf33AXS4GtQkPhKsldE4Mdek0LgiSs2N.png',
            ),
        ));
        
        
    }
}