<?php 
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];

    // make a connection
    $conn = mysqli_connect('localhost','root','','school_b11') or die(); 
    // query
    $insert = "INSERT INTO student (name,age,class) VALUES ('{$name}',$age,'{$class}')";
    mysqli_query($conn,$insert);
    header("Location: http://localhost/php_intermediate/get-data.php");
?>