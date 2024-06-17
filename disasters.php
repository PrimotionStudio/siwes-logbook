<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "required/validate.php";
const PAGE_TITLE = "Disasters";
include_once "included/head.php";
require_once "included/alert.php";

$select_disasters = "SELECT * FROM disasters ORDER BY id DESC";
$query_disasters = mysqli_query($con, $select_disasters);
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Reported Disasters</h4>
            </div>
            <div class="card-body">
              <div class="">
                <table class="table table-hover">
                  <thead class="text-primary">
                    <th>
                      Disaster Type
                    </th>
                    <th>
                      Severity
                    </th>
                    <th>
                      Location
                    </th>
                    <th>
                      Event Date/Time
                    </th>
                    <th class="text-right">
                      Action
                    </th>
                  </thead>
                  <tbody>
                    <?php
                    while ($get_disaster = mysqli_fetch_assoc($query_disasters)) :
                    ?>
                      <tr>
                        <td>
                          <?= $get_disaster["disaster"] ?>
                        </td>
                        <td>
                          <?= $get_disaster["severity"] ?>
                        </td>
                        <td>
                          <?= $get_disaster["location"] ?>
                        </td>
                        <td>
                          <?= date('d, M Y - h:iA', strtotime($get_disaster["event_datetime"])) ?>
                        </td>
                        <td class="text-right">
                          <a href="disaster-details?id=<?= $get_disaster["id"] ?>" title="more">
                            <i class="nc-icon nc-minimal-right"></i>
                          </a>
                        </td>
                      </tr>
                    <?php
                    endwhile;
                    ?>
                  </tbody>
                </table>
              </div>
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
<?php
include_once "included/scripts.php";
?>