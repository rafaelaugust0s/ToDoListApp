<?php

$task = $_POST['task'];

echo "your task is ${task}";


const SERV_NAME= "localhost";
const DB_USER= "root";
const DB_PASS= "R@faelaugustos";
const DB_NAME= "todolist";

$connection = new mysqli(SERV_NAME,DB_USER,DB_PASS,DB_NAME);

//echo var_dump($connection);
if($connection->connect_error){

    die("Something went wrong!!");


}

echo "connection successful";






