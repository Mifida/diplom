<?php
$dbhost = "localhost";
$dbname = "mybd";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost;dbname=$dbname", "$username", "$password");

function get_singles_all(){
    global $db;
    $singles = $db->query("SELECT * FROM teorya");
    return $singles;
}

function get_singles_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM teorya WHERE id=$id");
    foreach ($singles as $single){
    return $singles;
    }
}
function get_singles_all2(){
    global $db;
    $singles = $db->query("SELECT * FROM files");
    return $singles;
}