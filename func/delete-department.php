<?php
require_once "../required/session.php";
require_once "../required/sql.php";
require_once "../required/validate.php";
require_once "../access/admin_only.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $department_id = $_GET["department_id"];
    $delete_department = "DELETE FROM departments WHERE id='$department_id'";
    $_SESSION["alert"] = (mysqli_query($con, $delete_department)) ? "Department Deleted" : "An error occured, could not delete department";
}
header("location: ../faculty");
exit;
