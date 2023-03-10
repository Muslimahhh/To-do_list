<?php
require 'db_conn.php';
function createTodo($request){
    global $conn;
    $todo = mysqli_real_escape_string($conn, $request['todo']);
    $todo_time = mysqli_real_escape_string($conn, $request['todo_time']);
    
    $query = "INSERT INTO `todos`(`todo`,`todo_time`) VALUES('$todo','$todo_time')";
    $execute_query = mysqli_query($conn,$query);
    if($execute_query){
        header('location:todo.php');
    }
}
function getTodo(){
    global $conn;
    $query = "SELECT * FROM `todos`";
    $execute_query = mysqli_query($conn, $query);
     return $execute_query;
}
function changeStatus($id, $status){
    global $conn;
    if($status === 'unchecked'){
        $query = "UPDATE `todos` SET `status`= 0 WHERE `id` = $id";
        $execute_query = mysqli_query($conn, $query);
        if($execute_query){
            header('location: todo.php');
        }
    }
    if($status === 'done'){
        $query = "UPDATE `todos` SET `status`= 1 WHERE `id` = $id";
        $execute_query = mysqli_query($conn, $query);
        if($execute_query){
            header('location: todo.php');
        }
    }
}
function delete($id){
    global $conn;
    $query = "DELETE FROM `todos` WHERE `id` = '$id'";
    $execute_query = mysqli_query($conn, $query);

    if($execute_query){
        header('location: todo.php');
    }
}
function getSingleTodo($id){
    global $conn;
    $query = "SELECT * FROM `todos` WHERE `id` = '$id'";
    $execute_query = mysqli_query($conn, $query);
    $get_todo = mysqli_fetch_assoc($execute_query);
    return $get_todo;
}
function updateTodo($request){
    global $conn;
    $id = mysqli_real_escape_string($conn,$request['id']);
    $todo = mysqli_real_escape_string($conn,$request['todo']);
    $todo_time = mysqli_real_escape_string($conn,$request['todo_time']);

    $query = "UPDATE `todos` SET `todo` = '$todo', `todo_time` = '$todo_time' WHERE `id` = '$id'";
    $execute_query = mysqli_query($conn, $query);
    if($execute_query){
        header('location: todo.php');
    }
}


?>