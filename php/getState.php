<?php
require_once "config.php";
session_start();

if (isset($_POST['postcode'])) {
    // Get postcode
    $formPostcode = $_POST['postcode'];

    // Finds the corresponding state from the postcode
    $sql = "SELECT state FROM postcode WHERE postcode = '$formPostcode'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //echo "State received: ";
        while ($row = $result->fetch_assoc()) {
            $newState = $row['state'];
            echo $newState;
        }
    } else {
        echo "No states found ";
    }
}
