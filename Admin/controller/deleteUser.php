<?php 
session_start();
require_once '../model/model.php';

if (deleteUser($_GET['id'])) {
echo "User Deleted";
}

 ?>