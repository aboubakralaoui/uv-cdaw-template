<?php 

$ids = ['tt0944947','tt2306299','tt3749900','tt3281796','tt2707408','tt0903747','tt3322314'];

       
       
for($i=0;$i<7;$i++){

    $api_url2 =  "https://imdb-api.com/en/API/Title/k_7u1ltndd/".$ids[$i];
    $json_data2 = file_get_contents($api_url2);
    $response_data2 = json_decode($json_data2);
    print_r($response_data2->title);
}