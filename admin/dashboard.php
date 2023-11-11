<?php
include_once("./layout/header.php");

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row_count = $stmt->rowCount();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//$balances = $row['acct_balance']->rowCount();
?>



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Admin Dashboard</h3>
            </div>
        </div>

<!--        Backdate Transaction Modal-->

        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="py-2 px-3 my-2 ml-1 btn bg-success" onclick="location.href='./wire-trans.php'" >
                            Wire Transfers
                        </div>
                        <div class="py-2 px-3 my-2 mr-1 btn btn-outline-success" onclick="location.href='./domestic-trans.php'" >
                            Domestic Transfers
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        Backdate Transaction Modal-->

        <div class="row layout-top-spacing">
            <!--    START NEW TEMPLATE-->

            <div class="admin-nav w-100">
                <div class="container">
                    <div class="admin-nav-wrapper overflow-x-scroll w-100">
                        <table class="table py-5">
                            <tr class="tr ">
                                <td class="td text-center admin-nav-hover"> <span class="px-3 py-2 text-14 f-600 text-muted d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">account_circle</span> All Users</span> </td>
                                <td onclick="location.href='./reguser.php'" class="td admin-nav-hover text-14 f-600 text-muted"><span class="px-3 py-2 bg-success rounded-1 text-light d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">person_add</span> Create New User</span> </td>
                                <td class="td admin-nav-hover text-14 f-600 text-muted" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="px-3 py-2 bg-success rounded-1 text-light d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">published_with_changes</span> Back date a transaction</span> </td>
                                <td onclick="location.href='./funduser.php'" class="td admin-nav-hover text-14 f-600 text-muted"><span class="px-3 py-2 bg-success rounded-1 text-light d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">more_time</span> Add a transaction</span> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="admin-list-users overflow-x-scroll w-100">
                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <table id="default-ordering" class="table table-hover" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>NAME</th>
                                                <th>ACCOUNT NO</th>
                                                <th>ACCOUNT CURRENCY</th>
                                                <th>ACCOUNT TYPE</th>
                                                <th>ACCOUNT STATUS</th>
                                                <th>ACCOUNT EMAIL</th>
                                                <!--<th>ACCOUNT COUNTRY</th>-->
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sql="SELECT * FROM users order by id ASC";
                                            $stmt = $conn->prepare($sql);
                                            $stmt->execute();
                                            $sn=1;
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                $fullName = $row['firstname']." ". $row['lastname'];
                                                ?>
                                                <tr>
                                                    <td><?= $sn++ ?></td>
                                                    <td><?= $fullName ?></td>
                                                    <td><?= $row['acct_no'] ?></td>
                                                    <td><?= $row['acct_currency'] ?></td>
                                                    <td><?= $row['acct_type'] ?></td>
                                                    <td><?= $row['acct_status'] ?></td>
                                                    <td><?= $row['acct_email'] ?></td>
                                                    <!--<td><?= $row['country'] ?></td>-->
                                                    <td class="text-center"><a href="./view_users.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View</a> </td>


                                                    <!--<td class="text-center"><form class="section about" method="POST">-->
                                                    <!--                        <button class="btn btn-primary" name="status_delete">Delete</button></form>-->
                                                    <!--                    </td>-->



                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                            <!--<tfoot>-->
                                            <!--<tr>-->
                                            <!--    <th>S/N</th>-->
                                            <!--    <th>NAME</th>-->
                                            <!--    <th>ACCOUNT NO</th>-->
                                            <!--    <th>ACCOUNT CURRENCY</th>-->
                                            <!--    <th>ACCOUNT TYPE</th>-->
                                            <!--    <th>ACCOUNT STATUS</th>-->
                                            <!--    <th>ACCOUNT EMAIL</th>-->
                                            <!--    <th>ACCOUNT COUNTRY</th>-->
                                            <!--    <th class="invisible"></th>-->
                                            <!--</tr>-->
                                            <!--</tfoot>-->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--    END NEW TEMPLATE-->

                <?php
                include_once("./layout/footer.php");
                ?>
