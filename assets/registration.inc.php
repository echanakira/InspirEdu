<?php
$e = "elijah";
if(isset($_POST['submit'])){
  include_once 'dbh-inc.php';
  $name = $_POST['uid'];
  $email = $_POST['email'];
  $careworker = $_POST['careworker'];
  $school = $_POST['school'];
  $hospital = $_POST['hospital'];
  $grade = $_POST['grade'];
  if(empty($name) || empty($hospital)){
    header("Location: ../registration.php?signup=empty"); //notifies dev the error
    exit();
  }else{
    //If  the expression does not match
    if(!preg_match("/^[a-zA-Z]*( [a-zA-Z]*)?$/", $name) ||
    !preg_match("/^([A-Za-z]+@[A-Za-z]+\.[a-zA-Z]{2,})?$/", $email) ||
    !preg_match("/^([a-zA-Z]*( [a-zA-Z]*)?)?$/", $careworker) ||
    !preg_match("/^([a-zA-Z]*( [a-zA-Z]*)?)?$/", $school) ||
    !preg_match("/^[a-zA-Z]*( [a-zA-Z]*)?$/", $hospital)||
    !preg_match("/^([0-9]{2,10})?$/", $grade)){
      header("Location: ../registration.php?signup=invalid_characters"); //notifies dev the error
      exit();
    }else{
      //Insert user into DB
    if(!empty($careworker) && !empty($grade)){
      $sql = "INSERT INTO student (name, email, careworker, school_Name, grade) VALUES ('$name','$email', '$careworker', '$school', '$grade');";
      $result = mysqli_query($conn, $sql);
      header("Location: ../index.php?signup=success"); //notifies dev the error
      exit();
    }else{
      $sql = "INSERT INTO careworker (care_name, care_email, hospital) VALUES ('$name','$email','$hospital');";
      $result = mysqli_query($conn, $sql);
      header("Location: ../index.php?signup=success"); //notifies dev the error
      exit();
    }

    }
  }

}else{
  header("Location: ../registration.php");
  exit();
}
?>
