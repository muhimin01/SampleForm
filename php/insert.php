<?php
require_once "config.php";
session_start();

// Gets the data from the form passed through scripts.js
$formName = $_POST['name'];
$formDob = $_POST['dob'];
$formAddress = $_POST['address'];
$formPostcode = $_POST['postcode'];
$formState = $_POST['state'];

// This query inserts the data from the form into the "customer" table
$sql = "INSERT INTO customer (name,dob,address,postcode_id) VALUES ('$formName','$formDob','$formAddress','$formPostcode')";
if($conn->query($sql)===TRUE) {
    echo 'Successfully submitted data to "customer" ';
}
else {
    echo "Error! ";
}

// This query inserts the postcode and state from the form into the "postcode" table
$sql = "INSERT INTO postcode (state,postcode) VALUES ('$formState','$formPostcode')";
if($conn->query($sql)===TRUE) {
    echo 'Successfully submitted to "postcode" ';
}
else {
    echo "Error! ";
}
