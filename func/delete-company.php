<?php
require_once "../required/session.php";
require_once "../required/sql.php";
require_once "../required/validate.php";
require_once "../access/admin_only.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $company_id = $_GET["company_id"];
    $delete_company = "DELETE FROM company WHERE id='$company_id'";
    $_SESSION["alert"] = (mysqli_query($con, $delete_company)) ? "Company Deleted" : "An error occured, could not delete company";
}
header("location: ../company");
exit;
