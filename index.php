<?php

require 'function.php';

if (isset($_POST['todo_submit'])){
    createTodo($_POST);
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
            <div class="container">
                <div class="col-md-4"></div>
                <div class="col-lg-4 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>My Todo List</h3>
                        </div>
                        <div class="card-body">
                            <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Task</label>
                                <input type="text" class="form-control" name="todo" placeholder="Enter what you need to do"><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Pending By</label>
                                <input type="date" name="todo_time" class="form-control"><br>
                            </div>
                            <button type="submit" name="todo_submit" class="btn btn-primary">Add &#x2B;</button>
                            </form>
                        </div>
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