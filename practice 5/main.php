<?php

$name = $_GET['name'];

$result = array();


$players = [
    array("name" =>"Messi", "age"=>34, "club"=>"PSG"),
    array("name"=>"Marcelo", "age"=>27, "club"=>"Real Madrid"),
    array("name"=>"Alves", "age"=>30, "club"=>"Barcelona"),
    array("name"=>"Muler", "age"=>29, "club"=>"Bayern Munich"),
    array("name"=>"Bono", "age"=>28, "club"=>"Sevilla"),
    array("name"=>"Neymar", "age"=>33, "club"=>"PSG"),
    array("name"=>"Ibra", "age"=>18, "club"=>"Milan"),
    array("name"=>"Buffon", "age"=>24, "club"=>"Juventus"),
    array("name"=>"Vidal", "age"=>34, "club"=>"Inter"),
    array("name"=>"Kun", "age"=>19, "club"=>"Dortmund"),
    array("name"=>"Boufal", "age"=>32, "club"=>"Angers"),
    array("name"=>"Suarez", "age"=>23, "club"=>"ATM")
];


if(!empty($name)){
    foreach ($players as $n => $player) {
        if($player['name'] == $name){
            echo json_encode($player);
        }
    }

} else {
    echo "Sorry, No information available.";
}