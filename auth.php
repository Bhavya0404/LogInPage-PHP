<?php 

    $con = mysqli_connect("localhost", "root", "", "project");

    if(mysqli_connect_errno($con)) {
        echo "Failed to connect" . mysqli_connect_error();
    } 


    mysqli_query($con, "create table if not exists data(
        username varchar(50) primary key,
        password varchar(50) not null
    )");


    mysqli_query($con, "insert into data
    values('bhavya', '123')
    ");

    if(isset($_POST)){
        $username = $_POST["username"];
        $pass = $_POST["password"];

        $result = mysqli_query($con, "select username,password from data
        where username = '$username' and password = '$pass'
        ");

        setcookie("username", $username, time() + (86400 * 30));

        if(mysqli_fetch_array($result)){

            header("Location: welcome.php");

        } else {
            header("Location: login.php");
        }

    } 


?>