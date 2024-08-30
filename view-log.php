<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "required/validate.php";
require_once "access/lecturer_only.php";
const PAGE_TITLE = "View Log - Digital Logbook System";
include_once "included/head.php";
// Get Student Info
if (isset($_GET["user_id"])) {
  $_user_id = $_GET["user_id"];
  $select_student = "SELECT * FROM students WHERE user_id='$_user_id'";
  $query_student = mysqli_query($con, $select_student);
  if (mysqli_num_rows($query_student) == 0) {
    $_SESSION["alert"] = "Cannot find student";
    // Takes you to *home* so that you can be redirected to the appropriate route
    header("location: home");
    exit;
  }
  $get_student = mysqli_fetch_assoc($query_student);
} else {
  $_SESSION["alert"] = "Cannot find student";
  header("location: home");
  exit;
}

$select_student_user = "SELECT * FROM users WHERE id='$_user_id'";
$query_student_user = mysqli_query($con, $select_student_user);
if (mysqli_num_rows($query_student_user) == 0) {
  $_SESSION["alert"] = "Cannot find log author";
  header("location: student-logs.php?id=" . $get_log["user_id"]);
  exit;
}
$get_student_user = mysqli_fetch_assoc($query_student_user);

$student_id = $get_student["id"];
$company_id = $get_student["company_id"];
// Get Company Info
$select_company = "SELECT * FROM company WHERE id='$company_id'";
$query_company = mysqli_query($con, $select_company);
if (mysqli_num_rows($query_company) == 0) {
  $_SESSION["alert"] = "Cannot find attached company";
  header("location: home"); // Todo: Debug Potential bug: if the company has been deleted or doesnt exist, then take use back to home won't solve anything
  exit;
}
$get_company = mysqli_fetch_assoc($query_company);

// Makes sure that there is an id passed as a query parameter
// and the id in the logs table and it belongs to a particular user_id and company_id
if (isset($_GET["log_id"])) {
  $log_id = $_GET["log_id"];
  $select_log = "SELECT * FROM logs WHERE id='$log_id' && user_id='$_user_id' && company_id='$company_id'";
  $query_log = mysqli_query($con, $select_log);
  if (mysqli_num_rows($query_log) == 0) {
    $_SESSION["alert"] = "Cannot find logs";
    header("location: home");
    exit;
  }
  $get_log = mysqli_fetch_assoc($query_log);
} else {
  $_SESSION["alert"] = "Cannot find logs";
  header("location: home");
  exit;
}
$select_feedback = "SELECT * FROM feedbacks WHERE log_id='$log_id' && company_id='$company_id' && student_id='$student_id'";
$query_feedback = mysqli_query($con, $select_feedback);
?>

<div class="wrapper ">
  <?php
  include_once "included/sidebar.php";
  ?>
  <div class="main-panel">
    <?php
    include_once "included/navbar.php";
    ?>
    <div class="content">
      <div class="row">
        <?php
        if (mysqli_num_rows($query_feedback) == 0) :
        ?>
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
          <?php
        else :
          ?>
            <div class="col-md-8">
            <?php
          endif;
            ?>
            <!-- <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Log Activity for <?= $get_company["name"] ?></h5>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" id="datetime" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control textarea h100" name="description" placeholder="Write a description of the activity to enable the readers better understand" style="max-height: 200px; height: 200px;" required><?= $get_log["activity"] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update</button>
                    </div>
                  </div>
                </form>
              </div>
            </div> -->

            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Logged Activity by <?= $get_student_user["firstname"] . " " . $get_student_user["lastname"] ?> at <?= $get_company["name"] ?></h5>
                <?php
                if ($get_log["attachment"] != "") :
                ?>
                  <p><span class="badge badge-pill badge-light"><a href="<?= $get_log["attachment"] ?>" download>Download Attachment</a></span></p>
                <?php
                endif;
                ?>
              </div>
              <div class="card-body border-bottom border-top">

                <p>
                  <?= $get_log["activity"] ?>
                </p>
              </div>
              <div class="card-footer pt-3 pb-0">
                <p><span><?= date("l d, M Y", strtotime($get_log["datetime"])) ?></span></p>
              </div>
            </div>
            </div>
            <?php
            if (mysqli_num_rows($query_feedback) != 0) :
            ?>
              <div class="col-md-4">
                <div class="row">
                  <?php
                  while ($get_feedback = mysqli_fetch_assoc($query_feedback)) :
                    $supervisor_id = $get_feedback["supervisor_id"];
                    $select_lecturer = "SELECT * FROM supervisors WHERE id='$supervisor_id'";
                    $query_lecturer = mysqli_query($con, $select_lecturer);
                    if (mysqli_num_rows($query_lecturer) == 0) {
                      continue; // At this point, i dont know what else to do
                    }
                    $get_lecturer = mysqli_fetch_assoc($query_lecturer);
                    $supervisor_user_id = $get_lecturer["user_id"];
                    $select_supervisor_user = "SELECT * FROM users WHERE id='$supervisor_user_id'";
                    $query_supervisor_user = mysqli_query($con, $select_supervisor_user);
                    if (mysqli_num_rows($query_supervisor_user) == 0) {
                      continue; // At this point, i dont know what else to do
                    }
                    $get_supervisor_user = mysqli_fetch_assoc($query_supervisor_user);
                  ?>
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h6><?= $get_supervisor_user["firstname"] . " " . $get_supervisor_user["lastname"] ?></h6>
                        </div>
                        <div class="card-body border-top border-bottom">
                          <?= $get_feedback["feedback"] ?>
                        </div>
                        <div class="card-footer">
                          <?= date("l d, M Y", strtotime($get_feedback["datetime"])) ?>
                        </div>
                      </div>
                    </div>
                  <?php
                  endwhile;
                  ?>
                </div>
              </div>
            <?php
            endif;
            ?>
          </div>
      </div>
      <?php
      include_once "included/footer.php";
      ?>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", (e) => {
      document.getElementById("datetime").value = "<?= date("Y-m-d", strtotime($get_log["datetime"])) ?>";
    })
  </script>
  <?php
  include_once "included/scripts.php";
  ?>