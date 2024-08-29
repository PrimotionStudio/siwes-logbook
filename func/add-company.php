<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $insert_lesson = "INSERT INTO company (name) VALUES ('$name')";
    if (mysqli_query($con, $insert_lesson)) {
        $_SESSION["alert"] = "Company Added";
    } else {
        $_SESSION["alert"] = "An error occured, could not add new company";
    }
    header("location: company");
    exit;
}
