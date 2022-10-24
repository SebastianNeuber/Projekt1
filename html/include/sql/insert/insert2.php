<?php
session_start();
require('dbcon.php');

$notenvergabe = $_POST['notenvergabe'];
$dozeName = $_POST['dozeName'];
$question_id = $_POST['questionid'];

$insert = $connection->query(
    "INSERT INTO results(question_id, teacher_id, note_id)
    VALUES 
    ( '$question_id' , '$dozeName' , '$notenvergabe');"
);
$connection = null;

header("LOCATION:http://localhost/Projekt_Sebastian_Neuber/formular3.php");
