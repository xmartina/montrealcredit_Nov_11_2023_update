<?php
$pageName = "Dashboard";
include_once("layouts/header.php");
//include_once("../include/userFunction.php");
if(!$_SESSION['acct_no']) {
    header("location:../login.php");
    die;
}
if(@!$_COOKIE['firstVisit']){
    setcookie("firstVisit", "no", time() + 3600);
    notify_alert('Welcome Back '.$fullName." !",'success','3000','Close');
}

unset($_SESSION['wire_transfer'], $_SESSION['dom_transfer']);

?>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing-dashboard">

        <div class="row layout-top-spacing">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 layout-spacing">
                <div class="widget widget-three">
                    <div class="widget-heading">
                        <h5 class="">Summary</h5>


                        <div class="task-action">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="index.html#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                    <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="widget-content">

                        <div class="order-summary">

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Limit</h6>
                                        <p class="summary-count"><?=$currency.$row['acct_limit'] ?></p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Loan Balance</h6>
                                        <p class="summary-count"><?= $currency.$row['loan_balance']?></p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 100%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Expenses</h6>
                                        <p class="summary-count"><?=$currency."".$limitRemain ?></p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="my-3 w-100 mx-auto d-flex justify-content-center align-items-center">
                        <script src="https://cdn.logwork.com/widget/clock.js"></script>
                        <a href="https://logwork.com/clock-widget/" class="clock-time mx-auto" data-style="default-numeral" data-size="210" data-timezone="Africa/Lagos">Current time</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-4 layout-spacing layout-visible">
                <div class="widget-two">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-content">
                                <span class="w-value">Daily Stats</span>
                                <span class="w-numeric-title"><a class="text-primary" href="./credit-debit_transaction.php">Go to Transaction for details.</a></span>
                            </div>
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="daily-sales"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-three">

                    <div class="widget-heading">
                        <div class="wallet-usr-info">
                            <div class="usr-name">
                                <span> <?php echo $fullName ?></span>
                            </div>
                            <div class="add" id="homeTransModal">
                                <span><a  data-toggle="modal" data-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus text-white"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a></span>
                            </div>
                        </div>
                        <div class="wallet-balance">
                            <p>Balance</p>
                            <h5 class=""><span class="w-currency"><?php echo $currency?></span><?php echo number_format($acct_balance, 2, '.', ','); ?></h5>
                        </div>
                        
                       
                        
                     
                    </div>

                    <div class="widget-amount">

                        <div class="w-a-info funds-received">
                            <span>Pending<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>


                            <p>
                                <!--<a  class="btn btn-success btn-sm col-12" data-toggle="modal" data-target="#exampleModal">Deposit</a>-->
                               
                                 
                                <?php echo $currency?><?php echo number_format($avail_balance, 2, '.', ','); ?>
                                 
                            </p>
                        </div>

                        <div class="w-a-info funds-spent">
                            <span>My Loan <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
                            <p class="text-danger"><?php echo $currency?><?php echo $row['loan_balance'] ?>

                            </p>
                        </div>
                    </div>

                    <div class="widget-content">

                        <div class="bills-stats; text-center">
                            <?php
                            echo $userStatus
                            ?>
                        </div>

                        <div class="invoice-list">

                            <div class="inv-detail">
                                <div class="info-detail-1">
                                    <p>Account Limit</p>
                                    <p><span class="w-currency"><?= $currency ?></span><span class="bill-amount"><?= $limitRemain ?></span></p>
                                </div>
                                
                                
                                 <?php
                                $acct_id = userDetails('id');

                                $sql2="SELECT * FROM transactions LEFT JOIN users ON transactions.user_id =users.id WHERE transactions.user_id =:acct_id order by transactions.trans_id DESC LIMIT 1";
                                $stmt = $conn->prepare($sql2);
                                $stmt->execute([
                                    'acct_id'=>$acct_id
                                ]);
                                $sn=1;
                                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                                    $transStatus = transStatus($result);

                                    if($result['trans_type'] === '1'){
                                        $trans_type = "<span class='text-success'>Credit</span>";
                                    }else if($result['trans_type']=== '2'){
                                        $trans_type = "<span class='text-danger'>Debit</span>
";
                                    }

                                    $senderName = $result['sender_name'];
                                    $description = $result['description'];

                                    ?>
                              
                             
                                <div class="info-detail-3">
                                    <p>Recent Transaction</p>
                                    
                                     <p><span> <?= $currency.$result['amount']    ?></span></p>
                                </div>
                          
                              
                                 <?php
                        }
                        ?>
                        
                         <div class="info-detail-2">
                                    <p>Last Login IP:</p>
                                    <p class=""><span class="bill-amount text-danger"><?= $logs['ipAddress'] ?> </span></p>
                                </div>
                                
                                <div class="info-detail-2">
                                    <p>Last Login Date:</p>
                                    <p class=""><span class="bill-amount text-danger"><?= $logs['datenow'] ?> </span></p>
                                </div>
                          
                          
                            </div>

                            <div class="inv-action">
                                <a href="./domestic-transfer.php" class="btn btn-outline-primary view-details">Domestic Transfer</a>
                                <a href="./wire-transfer.php" class="btn btn-outline-primary pay-now">Wire Transfer</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
            <div class="my-4 col-12">
                <div id="content-custom">
                        <div class="row layout-top-spacing" id="cancel-row">
                <div class="h5 text-muted ml-1">Recent Wire Transactions</div>
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6 overflow-scroll">
                        <table id="default-ordering" class="table table-hover" style="width:100%">

                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Reference ID</th>
                                <th>Bank Name</th>
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Account Type</th>
                                <th>Transfer Type</th>
                                <th>Country</th>
                                <th>Swift Code</th>
                                <th>Routing Code</th>
                                <th>Date</th>
                                <th>Transfer Status</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            $acct_id = userDetails('id');

                            $sql2 ="SELECT * FROM wire_transfer WHERE acct_id =:acct_id ORDER BY wire_id DESC";
                            $wire = $conn->prepare($sql2);
                            $wire->execute([
                                'acct_id'=>$acct_id
                            ]);



                            $sn=1;

                            while ($result = $wire->fetch(PDO::FETCH_ASSOC)){
                                $transStatus = wireStatus($result);
                                ?>
                                <tr>
                                    <td><?= $sn++ ?></td>
                                    <td><?=$currency. $result['amount'] ?></td>
                                    <td><?= $result['refrence_id']?></td>
                                    <td><?= $result['bank_name'] ?></td>
                                    <td><?= $result['acct_name'] ?></td>
                                    <td><?= $result['acct_number'] ?></td>
                                    <td><?= $result['acct_type'] ?></td>
                                    <td><?= $result['trans_type'] ?></td>
                                    <td><?= $result['acct_country'] ?></td>
                                    <td><?= $result['acct_swift'] ?></td>
                                    <td><?= $result['acct_routing'] ?></td>
                                    <td><?= $result['createdAt'] ?></td>
                                    <!--                        <td>--><?php //= $result['created_at'] ?><!--</td>-->
                                    <td>
                                        <?php
                                        if ($result['wire_status']==0){?>
                                            <span class="badge outline-badge-secondary shadow-none col-md-12">In Progress</span>
                                            <?php } elseif ($result['wire_status']==1){ ?>
                                            <span class="badge outline-badge-primary shadow-none col-md-12">Completed</span>
                                        <?php } elseif ($result['wire_status']==2){ ?>
                                            <span class="badge outline-badge-danger shadow-none col-md-12">Hold</span>
                                        <?php } elseif ($result['wire_status']==3){ ?>
                                        <span class="badge outline-badge-danger shadow-none col-md-12">Cancelled</span>
                                        <?php } ?>
                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Reference ID</th>
                                <th>Bank Name</th>
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Account Type</th>
                                <th>Transfer Type</th>
                                <th>Country</th>
                                <th>Swift Code</th>
                                <th>Routing Code</th>
                                <th>Date</th>
                                <th>Transfer Status</th>
                            </tr>
                            </tfoot>
                        </table>


                        <div class="d-print-none">
                            <div class="float-end">
                                <a href="javascript:window.print()"
                                   class="btn btn-success waves-effect waves-light me-1"><i
                                        class="fa fa-print"></i> Print Statement</a>
                                <div onclick="location.href='./domestic-transaction.php';" class="btn btn-outline-info py-2 px-4 text-muted ml-3">View Domestic Transactions</div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
<!--                    Credit / Debit transaction log-->
                    <div class="py-3">
                        <span class="h5 d-lg-block d-xl-block d-none">Credit / Debit Transactions</span>
                        <hr class="w-75 mx-auto my-1 p-0">
                    </div>

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing d-lg-block d-xl-block d-none">
                        <div class="widget-content widget-content-area br-6">
                            <table id="default-ordering" class="table table-hover" style="width:100%">

                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>AMOUNT</th>
                                    <th>TYPE</th>
                                    <th>SENDER / RECEIVER</th>
                                    <th>DESCRIPTION</th>
                                    <th>CREATED AT</th>
                                    <th>TIME CREATED</th>
                                    <th>STATUS</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php

                                $sql="SELECT * FROM transactions LEFT JOIN users ON transactions.user_id =users.id WHERE transactions.user_id =:acct_id order by transactions.trans_id DESC";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute([
                                    'acct_id'=>$acct_id
                                ]);



                                $sn=1;

                                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                                    $transStatus = transStatus($result);

                                    if($result['trans_type'] === '1'){
                                        $trans_type = "<span class='text-success'>Credit</span>";
                                    }else if($result['trans_type']=== '2'){
                                        $trans_type = "<span class='text-danger'>Debit</span>
";
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $sn++ ?></td>
                                        <td><?=$currency. $result['amount'] ?></td>
                                        <td><?= $trans_type ?></td>
                                        <td><?= $result['sender_name'] ?></td>
                                        <td><?=$result['description'] ?></td>
                                        <td><?= $result['created_at'] ?></td>
                                        <td><?= $result['time_created'] ?></td>
                                        <!--<td><?= $transStatus ?></td>-->
                                        <td>Completed</td>

                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>AMOUNT</th>
                                    <th>TYPE</th>
                                    <th>SENDER / RECEIVER</th>
                                    <th>DESCRIPTION</th>
                                    <th>CREATED AT</th>
                                    <th>TIME CREATED</th>
                                    <th>STATUS</th>
                                </tr>
                                </tfoot>
                            </table>

                            <div class="d-print-none">
                                <div class="float-end">
                                    <a href="javascript:window.print()"
                                       class="btn btn-success waves-effect waves-light me-1"><i
                                            class="fa fa-print"></i> Print Statement</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    include_once('layouts/footer.php')
                    ?>
