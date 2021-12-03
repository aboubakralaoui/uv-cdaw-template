<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */







    public function run()
    {
        $api_url = 'https://imdb-api.com/en/API/Top250Movies/k_7u1ltndd';
        
        // Read JSON file
        $json_data = file_get_contents($api_url);
        
        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);
    
       // $api_url2 =  "https://imdb-api.com/en/API/Title/k_7u1ltndd/".$response_data->items
        //Etape 1
        for($i=5;$i<20;$i++){
               $api_url2 =  "https://imdb-api.com/en/API/Title/k_7u1ltndd/".$response_data->items[$i]->id;
             // Read JSON file
        $json_data2 = file_get_contents($api_url2);
        
        // Decode JSON data into PHP array
        $response_data2 = json_decode($json_data2);
        DB::table('media')->insert([
         
             //'id_media' => $response_data->id ,
             'type' =>  $response_data2->type ,
             'titre' =>$response_data2->title,
             'duree' =>$response_data2->runtimeStr,
             'annee' => $response_data2->year,
             'description' =>$response_data2->plot,
             'image' => $response_data2->image
            ]);
        }
        //Etape 2
        //\App\Models\Category::factory(10)->create();
    }
}