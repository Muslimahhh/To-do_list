<?php

require 'function.php';

    $get_todo = getTodo();
    
    if(isset($_GET['status']) && $_GET['id']){
        $id = $_GET['id'];
        $status = $_GET['status'];
        if($_GET['status'] === 'unchecked'){
            changeStatus($id, $status);
        }
        if($_GET['status'] === 'done'){
            changeStatus($id, $status);
        }
    }else{
        ?>
        <script>window.href.location ='todo.php';</script>
        <?php
    }
    
    if(isset($_GET['action']) && $_GET['id']){
        $id = $_GET['id'];
        if($_GET['action'] === 'delete'){
            delete($id);
        }
    }else{
        ?>
        <script>window.href.location ='todo.php';</script>
        <?php
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>To Do list</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3>My Todo List</h3>
                        <a href="index.php" class="btn btn-info float-right">Add a new Task</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Tasks</th>
                                    <th scope="col">Deadline By</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($get_todo as $todo){
                            ?>
                            <tr>
                                <th><?= $todo['id']; ?></th>
                                <td><?= $todo['todo']; ?></td>
                                <td><?= $todo['todo_time']; ?></td>
                                <td><?= date('M-d-Y, h:i a', strtotime($todo['created_at'])); ?></td>
                                <td><?= date('M-d-Y, h:i a', strtotime($todo['updated_at'])); ?></td>
                                <td>
                                    <?php 
                                        if($todo['status'] == 1){ ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=unchecked" class="btn btn-outline-success btn-sm">Done</a>
                                       <?php }else{ ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=done" class="btn btn-outline-warning btn-sm">Unchecked</a>
                                       <?php } ?>
                                   
                                    <a href="edit.php?id=<?= $todo['id']; ?>" class="btn btn-outline-info btn-sm">Edit</a>
                                    <a href="todo.php?id=<?= $todo['id']; ?>&action=delete" class="btn btn-outline-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form>
  
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</body>
</html>