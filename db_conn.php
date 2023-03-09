<?php

$conn = mysqli_connect("localhost","root", "");
if($conn){
    echo "mjnkkk";
}else{
    echo "Error";
}

$db = mysqli_select_db($conn, "to-do-list");
if($db){
    echo "";
}else{
    echo "Error". mysqli_error($conn);
}

?>