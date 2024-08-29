<?php
require_once "../required/session.php";
require_once "../required/sql.php";
require_once "../required/validate.php";
require_once "../access/admin_only.php";
// This is an exclusive POST request
// It is not being imported anywhere
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST["category"];
    if ($category == '1') {
        $select_users = "SELECT * FROM users";
    } else {
        switch ($category) {
            case '2':
                $role = null;
                break;
            case '3':
                $role = 'student';
                break;
            case '4':
                $role = 'supervisor';
                break;
            case '5':
                $role = 'lecturer';
                break;
            case '6':
                $role = 'admin';
                break;
            default:
                $_SESSION["alert"] = "Cannot determine User's Category";
                header('location: ../users.php');
                exit;
        }
        $select_users = "SELECT * FROM users  WHERE role='$role'";
    }
    $query_users = mysqli_query($con, $select_users);
    while ($get_course = mysqli_fetch_assoc($query_users)) :
?>
        <tr>
            <td><?= $get_course["firstname"] ?></td>
            <td><?= $get_course["lastname"] ?></td>
            <td><?= $get_course["email"] ?></td>
            <td><?= $get_course["phone"] ?></td>
            <td>
                <select name="role" class="form-control" onchange="setUserRole(<?= $get_course['id'] ?>,this.value)" id="role">
                    <option value="1" <?php echo ($get_course["role"] == '') ? "selected" : "" ?>>None</option>
                    <option value="2" <?php echo ($get_course["role"] == 'student') ? "selected" : "" ?>>Students</option>
                    <option value="3" <?php echo ($get_course["role"] == 'supervisor') ? "selected" : "" ?>>Supervisor</option>
                    <option value="4" <?php echo ($get_course["role"] == 'lecturer') ? "selected" : "" ?>>Lecturers</option>
                    <option value="5" <?php echo ($get_course["role"] == 'admin') ? "selected" : "" ?>>Admin</option>
                </select>
            </td>
        </tr>
<?php
    endwhile;
    exit;
}
