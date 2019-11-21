<?php
    
    $server = "127.0.0.1";
    $username = "root";
    $password = "";

    $handler = mysqli_connect($server, $username, $password);
    if(!$handler){
        echo ("Connection Failed at handler1: ".mysqli_connect_error());
    }else{
        echo ("Connected Successfully!"."<br>");
    }

    // create database
    $create_database = "CREATE DATABASE subscribers";
    if(mysqli_query($handler,$create_database)){
        echo "Database created successfully"."<br>";
    }else{
        echo "Error creating database: ".mysqli_connect_error()."<br>";
    }
    if(mysqli_query($handler, $create_database)){
        echo "Databsae created successfully"."<br>";
    }else{
        echo "Fail to create Database".mysqli_error($handler)."<br>";
    }

    //connect to database
    $handler = mysqli_connect($server, $username, $password,"subscribers");
    if(!$handler){
        echo ("Connection Failed at handler2 (database connection): ".mysqli_connect_error()."<br>");
    }else{
        echo ("Connected Database Successfully!"."<br>");
    }

    //create table
    $table = " CREATE TABLE sub_details ( 
                    Name VARCHAR(40),
                    Email VARCHAR(20) PRIMARY KEY);";

    if(mysqli_query($handler, $table)){
        echo "Table created successfully"."<br>";
    }else{
        echo " unable to create table: ".mysqli_error($handler)."<br>";
    }

    // insert values
    $insert_values = "INSERT INTO sub_details VALUES ('$name', '$email')";
    if(mysqli_query($handler, $insert_values)){
        echo "data is saved"."<br>";
    }else{
        echo "data is not saved: ".mysqli_error($handler)."<br>";
    }

?>