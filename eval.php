<?php
session_start();
require 'dbc.php';

// DELETE EMPLOYEE

if(isset($_POST['delete_employee'])) {

// Decrease AUTO_INC value
// Y/N confirmation dialog

  $employee_id = mysqli_real_escape_string($con, $_POST['delete_employee']); 
  $query = "DELETE FROM employees WHERE id='$employee_id'";
  $query_run = mysqli_query($con, $query);
  if ($query_run) {
    $_SESSION['message'] = "Employee Deleted";
    header("Location: index.php");
    exit(0);
  }
  else {
    $_SESSION['message'] = "Employee Delete Failed";
    header("Location: index.php");
    exit(0);
  }
}

// UPDATE EMPLOYEE

if(isset($_POST['update_employee'])) {
  $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']); 
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $position = mysqli_real_escape_string($con, $_POST['position']);

  $query = "UPDATE employees SET name='$name',email='$email', phone='$phone', position='$position' WHERE id='$employee_id'";
  $query_run = mysqli_query($con, $query);
  if ($query_run) {
    $_SESSION['message'] = "Employee Updated";
    header("Location: index.php");
    exit(0);
  }
  else {
    $_SESSION['message'] = "Employee Update Failed";
    header("Location: index.php");
    exit(0);
  }
}

// SAVE EMPLOYEE

if (isset($_POST['save_employee'])) {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $query = "INSERT INTO employees (name,email,phone,position) VALUES ('$name','$email','$phone','$position')";
  $query_run = mysqli_query($con, $query);
  if ($query_run) {
    $_SESSION['message'] = "Employee Added";
    header("Location: index.php");
    exit(0);
  }
  else {
    $_SESSION['message'] = "Employee Add Failed";
    header("Location: index.php");
    exit(0);
  }
}

?>