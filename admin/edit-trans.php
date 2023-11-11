
<?php
include_once("./layout/header.php");
//require_once("./include/adminloginFunction.php");
//include_once("../include/config.php");

$id = $_GET['id'];

$sql="SELECT * FROM wire_transfer LEFT JOIN users ON wire_transfer.acct_id = users.id WHERE wire_transfer.refrence_id='$id'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id1 = $row['id'];
$currency = currency($row);
$email = $row['acct_email'];
//$init_amount = $row['amount'];
//$init_created_at = $row['created_at'];
//$init_time_created = $row['time_created'];

$wire_id  = $row['wire_id'];
$acct_id  = $row['acct_id'];
$refrence_id  = $row['refrence_id'];
$init_amount = $row['amount'];
$bank_name  = $row['bank_name'];
$acct_name_id  = $row['acct_name_id'];
$acct_number  = $row['acct_number'];
$trans_type  = $row['trans_type'];
$acct_type  = $row['acct_type'];
$acct_country  = $row['acct_country'];
$acct_swift  = $row['acct_swift'];
$acct_routing  = $row['acct_routing'];
$acct_remarks  = $row['acct_remarks'];
$wire_status  = $row['wire_status'];
$trans_otp  = $row['trans_otp'];
$createdAt  = $row['createdAt'];
$init_created_at = $row['created_at'];
$init_time_created = $row['time_created'];


$fullName = $row['firstname']." ".$row['lastname'];

if(isset($_POST['update_trans'])){
    $id = $_GET['id'];
//    $amount = $_POST['amount'];
////    $sender_name = $_POST['acct_name'];
////    $description = $_POST['description'];
//    $created_at = $_POST['created_at'];
//    $time_created = $_POST['time_created'];

    // $acct_phone = $_POST['acct_phone'];
//
    if ($amount = $_POST['amount'] == ''){
        echo $amount = $_POST['amount'] = $init_amount;
    }else{
        echo $amount = $_POST['amount'];
    }

    if ($created_at = $_POST['created_at'] == ''){
        echo $created_at = $_POST['created_at'] = $init_created_at;
    }else{
        echo $created_at = $_POST['created_at'];
    }

    if ($time_created = $_POST['time_created'] == ''){
        echo $time_created = $_POST['time_created'] = $init_time_created;
    }else{
        echo $time_created = $_POST['time_created'];
    }

//    var_dump($limit);
//    exit();


    $sql = "UPDATE wire_transfer SET amount=:amount,created_at=:created_at,time_created=:time_created WHERE refrence_id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'amount'=>$amount,
        'created_at'=>$created_at,
        'time_created'=>$time_created
    ]);

    if(true){
        toast_alert('success','Transaction updated successfully','Approved');



    }else{
        toast_alert('error','Sorry something went wrong');


    }

    header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
    die;


}


if(isset($_POST['trans_delete'])){
    $trans_delete = $_POST['trans_delete'];
    $id = $_GET['id'];

    // $sql = "DELETE FROM transactions WHERE id =$id";
    $sql = "DELETE FROM wire_transfer WHERE refrence_id='$id'";
    // $sql = "DELETE FROM transactions.user_id = users.id WHERE transactions.trans_id='$id'";

    // FROM transactions LEFT JOIN users ON transactions.user_id = users.id WHERE transactions.refrence_id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if(true){
        toast_alert('success','Transaction Deleted Successfully');
    }else{
        toast_alert('error', 'Sorry Something Went Wrong');
    }

    header('Location:./wire-trans.php');

}




?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">


                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="general-info" class="section general-info" enctype="multipart/form-data" method="POST">

                                <div class="info">
                                    <h6 class="">Edit Credit/ Debit Transaction</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">

                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Amount</label>
                                                                    <input type="text" class="form-control mb-4"  placeholder="<?=$row['amount'] ?>" value="" name="amount" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Sender Name</label>
                                                                    <input type="text" class="form-control mb-4"  placeholder="<?=$fullName ?>"  disabled >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--                                                            <div class="col-sm-6">-->
                                                            <!--                                                                <div class="form-group">-->
                                                            <!--                                                                    <label for="fullName">Description</label>-->
                                                            <!--                                                                    <input type="text" class="form-control mb-4"  placeholder="--><?php //= $row['description'] ?><!--" value="" name="description" >-->
                                                            <!--                                                                </div>-->
                                                            <!--                                                            </div>-->
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Date</label>
                                                                    <input type="date" class="form-control mb-4" id="profession" placeholder="<?= $row['created_at'] ?>" value="" name="created_at">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Time</label>
                                                                    <input type="time" class="form-control mb-4"  placeholder="<?= $row['time_created'] ?>" value="" name="time_created">
                                                                </div>
                                                            </div>

                                                        </div>



                                                    </div>

                                                    <div class="col-md-4">
                                                        <button class="btn btn-primary text-center" name="update_trans">Update</button>

                                                        <form class="section about" method="POST">

                                                            <button class="btn btn-danger" name="trans_delete">Delete</button>

                                                        </form>
                                                    </div>









                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
<?php
include_once("./layout/footer.php");
?>