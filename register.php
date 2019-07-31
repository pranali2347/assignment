<?php

    $name= "";
    $email= "";
    $password= "";
    $repeat_password= "";
    $first_name= "";
    $last_name= "";
    $date_of_birth= "";
    $address= "";
    $phone_number= "";
    $gender= "";
    $state= "";

    $id =0;

    //connect to database


    $db =mysqli_connect('localhost','root','','registration');


    if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    } else {
    echo 'connection ok';
    }
 




   //if save button is clicked
   if(isset($_POST['save']))
   {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $psw = $_POST['psw'];
   $repeat_psw = $_POST['confo_psw'];
   $frist_name = $_POST['frist_name'];
   $last_name= $_POST['last_name'];
   $date_of_birth = $_POST['date_of_birth'];
   $address= $_POST['address'];
   $phone_number = $_POST['phone_number'];
   $gender= $_POST['gender'];
   $state = $_POST['state']; 

   
   $query = "INSERT INTO users  (username, email, password,confo_psw,frist_name,last_name,gender,birthday,country,address,phone_number,word,hobbies,skills,think,) 
   VALUES('$username', '$email', '$password','$confo_psw','$frist_name','$last_name','$gender','$birthday','$address','$phone_number','$state')";
  if ($db->query($query) === TRUE) {
   echo "New record created successfully";
  } else {
   echo "Error: " . $query . "<br>" . $db->error;
  }
  mysqli_query($db,$query);
  header('location: index.php'); //redirect to index page after inserting
 }
 ?>

