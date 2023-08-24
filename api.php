<?php
    header("Access-Control-Allow-Origin: *");

    $disks = [
        [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxgP0ZiGMhRIdV4OZS-C4dgtXKz_8fSQCR6Q&usqp=CAU',
            'title' => 'Satisfaction',
            'artist' => 'Rolling Stones',
            'date' => '1965'
        ],

        [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmpA4n6MpLh_PRfxVJ6G6cVu6NTTqBzau24g&usqp=CAU',
            'title' => 'Roadhouse blues',
            'artist' => 'The Doors',
            'date' => '1970'
        ],

        [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8SoRM3bkyn2ibwm1snGy-IA16YHy7rXom0Q&usqp=CAU',
            'title' => 'Smoke on the water',
            'artist' => 'Deep Purple',
            'date' => '1973'
        ],

        
    ];
    
    header('Content-Type: application/json');
    
    echo json_encode($disks);
?>

        