<?php
session_start();
include_once("coneção.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!$id){
    die("ID é válido");
}
?>