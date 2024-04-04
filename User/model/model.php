<?php
session_start();

require_once 'db_connect.php';

function addUser($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into usertbl (Name, Email, Phone, Password, Gender, Dob, Image)
    VALUES (:name, :email, :phone, :password, :gender, :dob, :image)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
            ':image' => $data['image']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function getUserByEmail($email)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM usertbl WHERE Email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}
function getAdminByEmail($email)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM admintbl WHERE Email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}
function movieDetails()
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM movietbl ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}
function updateUser($email, $data) {
    $conn = db_conn();
    $selectQuery = "UPDATE `usertbl` SET `Name` = :name, `Email` = :email, `Phone` = :phone, `Gender` = :gender, `Dob` = :dob, `Image` = :image WHERE `Email` = :email";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':dob', $data['dob']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->execute();
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllUsers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `usertbl` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($email) {
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `usertbl` WHERE Email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
