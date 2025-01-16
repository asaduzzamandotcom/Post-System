<?php

// Data Collection from Form

$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];


echo "<pre>";

// print_r($author);

//* Data Validation

    // * Title must be required & minimum 3 characters long
    
    if (empty($title)) {
      echo "Title is required.";
    } elseif (strlen($title) < 3) {
      echo "Title must be minimum 3 characters long.";
    }

    //* Detail must be required. minimum 10 characters long & maximum 200 characters long

    if (empty($detail)) {
      echo "Detail is required.";
    } elseif (strlen($detail) < 10) {
      echo "Detail must be minimum 10 characters long.";
    } elseif (strlen($detail) > 200) {
      echo "Detail must be maximum 200 characters long.";
    }
    // *  minimum 3 characters long