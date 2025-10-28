<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['number'];
    $email = $_POST['e_mail'];
    $program_type = $_POST['edu'];
    $stream = $_POST['stream'];

    
    $sql = "INSERT INTO student (username, Password, gender, phonenumber, email, program_type, stream)
            VALUES ('$username', '$password', '$gender', '$phonenumber', '$email', '$program_type', '$stream')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3 style='color:green; text-align:center; font-weight:bold ;font-family:'Roboto', sans-serif'> Registration Successful!</h3>";
    } else {
        echo "<h3 style='color:red; text-align:center;font-weight:bold ;font-family:'Roboto', sans-serif'>Error: " . $conn->error . "</h3>";
    }

    $conn->close();
} else {
    echo "<h3 style='color:black; text-align:center;>Please submit the form.</h3>";
}
?>
