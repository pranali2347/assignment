<?php

  //session_start();
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="demo1";
    //connect to database
  $db=mysqli_connect($servername,$username,$password,$dbname);

  //check connection 
  if($db->connect_error){
     die("connection failed:".$db);
     
     }
     else{

     echo"connected sucessfully";
     }
     ?>
    
