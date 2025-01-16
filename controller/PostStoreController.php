<?php
session_start();
// Data Collection from Form

$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$errors = [];




// print_r($author);

//* Data Validation

    // * Title must be required & minimum 3 characters long
    
    if (empty($title)) {
      $errors['title_error'] = "Title is required.";
    } elseif (strlen($title) < 3) {
      $errors['title_error'] = "Title must be minimum 3 characters long.";
    }

    //* Detail must be required. minimum 10 characters long & maximum 200 characters long

    if (empty($detail)) {
      $errors['detail_error'] = "Detail is required.";
    } elseif (strlen($detail) < 10 || strlen($detail) > 200 ) {
      $errors['detail_error'] = "Detail must be minimum 10 characters long & Maximum 200 characters.";
    }

// * If error Occured
// var_dump(count($errors));
if (count($errors) > 0) {
  $_SESSION['errors'] = $errors;
  header('location: ../index.php');
} else {
  // * If no error occured
  // * Data Insertion into Database

}
