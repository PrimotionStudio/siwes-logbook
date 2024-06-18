<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "required/validate.php";
const PAGE_TITLE = "Log Entry";
include_once "included/head.php";
require_once "included/alert.php";
require_once "access/student_only.php";
$select_attachment = "SELECT * FROM attachment WHERE student_id='$user_id'";
$query_attachment = mysqli_query($con, $select_attachment);
if (mysqli_num_rows($query_attachment) == 0) {
  $_SESSION["alert"] = "Cannot find attachment";
  header("location: home.php");
  exit;
}
$get_attachment = mysqli_fetch_assoc($query_attachment);
$company_id = $get_attachment["company_id"];

$select_company = "SELECT * FROM company WHERE id='$company_id'";
$query_company = mysqli_query($con, $select_company);
if (mysqli_num_rows($query_company) == 0) {
  $_SESSION["alert"] = "Cannot find linked company";
  header("location: home.php");
  exit;
}
$get_company = mysqli_fetch_assoc($query_company);
require_once "func/log-entry.php";
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
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Log Activity for <?= $get_company["name"] ?></h5>
              <sub>* indicates a required field</sub>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Date and Time*</label>
                      <input type="datetime-local" class="form-control" name="datetime" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description*</label>
                      <textarea class="form-control textarea h100" name="description" placeholder="Write a description of the incident to enable the emergency responder better understand the situation" style="max-height: 150px; height: 150px;" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Report</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include_once "included/footer.php";
    ?>
  </div>
</div>
<script>
  document.getElementById('severity').addEventListener('input', function() {
    document.getElementById('value').textContent = this.value;
  });
</script>
<?php
include_once "included/scripts.php";
?>