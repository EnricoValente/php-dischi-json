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

        [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwGAeCAPEsFxYoysCHgdy2RiVgjcy61Hl1qg&usqp=CAU',
            'title' => 'Heart of Gold',
            'artist' => 'Neil Young',
            'date' => '1972'
        ],

        [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-Z35A8zNw4c6a56RhID9fyatLDtDXU9lGRg&usqp=CAU',
            'title' => 'One more car one more rider',
            'artist' => 'Eric Clapton',
            'date' => '2002'
        ],

        [
            'image' => 'https://rockstargallery.net/wp-content/uploads/2020/03/image028.jpg',
            'title' => 'Unchain my heart',
            'artist' => 'Joe Cocker',
            'date' => '1987'
        ],

        
    ];
    
    header('Content-Type: application/json');
    
    echo json_encode($disks);
?>

        