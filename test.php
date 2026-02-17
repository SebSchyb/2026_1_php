<?php

require_once __DIR__."/_.php";


//PHP only knows about assoiative arrays
$letters = [
["id"=>"1", "name"=>"A"],
["id"=>"2", "name"=>"B"],
["id"=>"3", "name"=>"C"]
];

$contentType = $_SERVER['CONTENT_TYPE'] ?? '';


// API JSON
if(str_contains($contentType, "application/json")){
    header('Content-Type: application/json');
    echo json_encode($letters);
    exit;
}


// HTML
foreach( $letters as $letter ){
    ?>
    <div>
    <?php
    _($letter["name"]);
    ?>
    </div>
    <?php
}
    