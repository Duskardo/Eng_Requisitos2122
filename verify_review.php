<?php
session_start();
require_once("common.php");



$userId=getUserID( $_SESSION['username']);
$review=$_REQUEST["review"];
$quantity=$_REQUEST["quantity"];

insertReview($userId,$review,$quantity);


?>