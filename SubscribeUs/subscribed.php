<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "subscribers";

    $handler = mysqli_connect($servername, $username, $password, $dbname);


    $name = $_POST['name'];
    $email = $_POST['email'];

    $insert_values = "INSERT INTO sub_details VALUES ('$name', '$email')";
    mysqli_query($handler, $insert_values);
    // if(mysqli_query($handler, $insert_values)){
    //     echo "Data is saved, Thank you for subscribing!"."<br>";
    // }else{
    //     echo "Data is not saved: ".mysqli_error($handler)."<br>";
    // }


    // echo file_get_contents("subscribed.html");
    readfile("subscribed.html");
    // echo 'Name: '.$name.'<br>';
    // echo 'Email: '.$email.'<br>';

    // echo "<a href='../index.html'>Back to Home</a>"."<br>";
    exit();


?>