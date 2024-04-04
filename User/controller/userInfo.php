<?php 

require_once ('../model/model.php');

function fetchAllUsers(){
	return showAllUsers();

}
function fetchUser($email){
	return showUser($email);

}
function showUserByEmail($email){
	return getUserByEmail($email);

}