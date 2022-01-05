<?php


$search = $_GET['search'];


$cars = ["bmw","bugatti","volkswagen","mercedes","toyota","hundai", "seat"];

if(isset($search)){
    if(in_array($search,$cars)){
        echo "Good";
    } else {
        echo "Bad";
    }
} else {
    Echo "No Data";
}