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
        for ($i = 1; $i <= 10; $i++) {
         
        DB::table('users')->insert([
            //'id_media' => $response_data->id ,
            'name' => $i.'login',
            'nom' => $i.'nom',
            'prenom' => $i.'prenom',

            //'titre' => $response_data->title,
            'email' =>$i.'email@gmail.com',
            'password' => $i.'password',
            //'description' => $response_data->plot
           ]);
        }
        
    }
}