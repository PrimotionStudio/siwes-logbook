<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "required/validate.php";
require_once "access/admin_only.php";
const PAGE_TITLE = "Company - E-Learning System";
include_once "included/head.php";

$select_company = "SELECT * FROM company ORDER BY id DESC";
$query_company = mysqli_query($con, $select_company);

require_once "func/add-company.php";
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
                    <form action="" method="post" class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Company Name" aria-label="Company Name" aria-describedby="button-addon2" style="padding: 0px 10px;" required>
                        <button class="btn btn-outline-primary" type="submits" id="button-addon2">Add Company</button>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header clearfix">
                            <h4 class="card-title float-left">List of Companies (<?= mysqli_num_rows($query_company) ?>)</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <th>
                                            Company Name
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </thead>
                                    <tbody id="company">
                                        <?php
                                        while ($get_company = mysqli_fetch_assoc($query_company)) :
                                        ?>
                                            <tr>
                                                <td><?= $get_company["name"] ?></td>
                                                <td class="text-right">
                                                    <a href="func/delete-company?company_id=<?= $get_company["id"] ?>" class="btn btn-danger">Delete Company</a>
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