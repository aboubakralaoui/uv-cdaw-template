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
       //$api_url = 'https://imdb-api.com/en/API/Search/k_7u1ltndd/superman';
        // Read JSON file
        $json_data = file_get_contents($api_url);
        
        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);
    
       // $api_url2 =  "https://imdb-api.com/en/API/Title/k_7u1ltndd/".$response_data->items
        //Etape 1

    

          $ids = ['tt0944947','tt2306299','tt3749900','tt3281796','tt2707408','tt0903747','tt3322314'];

       
       
        for($i=50;$i<70;$i++){
        
            //$api_url2 =  "https://imdb-api.com/en/API/Title/k_7u1ltndd/".$ids[$i];
            $api_url2 =  "https://imdb-api.com/en/API/Title/k_7u1ltndd/".$response_data->items[$i]->id;
            $json_data2 = file_get_contents($api_url2);
            $response_data2 = json_decode($json_data2);
       
            DB::table('media')->insert([
         
     
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