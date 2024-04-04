<?php
session_start();

require_once 'db_connect.php';

function addMovie($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into movietbl (Name, Duration, Rating, Cast, Story, Image)
    VALUES (:mname, :mduration, :mrating, :mcast, :mstory, :mimage)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':mname' => $data['name'],
            ':mduration' => $data['duration'],
            ':mrating' => $data['rating'],
            ':mcast' => $data['cast'],
            ':mstory' => $data['story'],
            ':mimage' => $data['mimage']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function addShow($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into showtbl (TName, MName, Show, Ntickets)
    VALUES (:tname, :mname, :show, :ntickets)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':tname' => $data['tname'],
            ':mname' => $data['mname'],
            ':show' => $data['show'],
            ':ntickets' => $data['ntickets'],
            
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
// function movieDetails()
// {
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM movietbl ";
//     try {
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute();
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);
//     $conn = null;
//     return $row;
// }
function updateUser($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE usertbl set Name = ?, Email = ?, Phone = ?,  Gender = ?, Dob = ?, Image = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['phone'], $data['gender'], $data['dob'], $data['image'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function showAllUsers()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `usertbl` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showmoviews()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `movietbl` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `usertbl` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function deleteUser($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `usertbl` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
