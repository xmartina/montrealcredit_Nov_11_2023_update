<?php



require __DIR__."/../include/loginFunction.php";
require_once __DIR__."/../session.php";
// require_once("/include/UserFunction.php");

$sql = "SELECT * FROM settings WHERE id ='1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$page = $stmt->fetch(PDO::FETCH_ASSOC);

$title = $page['url_name'];

$pageTitle = $title;
$BANK_PHONE = $page['url_tel'];



$viesConn="SELECT * FROM users";
$stmt = $conn->prepare($viesConn);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);



$title = new pageTitle();
$email_message = new message();
$sendMail = new emailMessage();

?>
<!DOCTYPE html>
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8" />
<title><?= $pageName  ?> - <?= $pageTitle ?></title>
<meta property="og:image" content="images/logo.jpg"/>  
<!--<meta name="description" content="Successfully Providing the Best Banking Solution for over 10 years." />-->
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="<?= $web_url ?>/front/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= $web_url ?>/front/css/main.css" rel="stylesheet" />
<link href="<?= $web_url ?>/front/css/responsive.css" rel="stylesheet" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;500;600;700;900&amp;family=Libre+Baskerville:wght@400;700&amp;family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

<!-- Add site Favicon -->
<link rel="icon" href="<?= $web_url ?>/front/images/favicon.png" type="image/x-icon" />


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<style>
    .lower-content p {
        color: #1F1B44 !important;
    }

    .sidebar-widget ul li a,
    .auto-container,
    .auto-container h2 {
        color: #1F1B44;
    }
</style>

<script>

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
            return false;
        }
    }
</script>

</head>

<body oncontextmenu="return false">

	<div class="page-wrapper">

		    <!-- Main Header-->
    <header class="main-header style-three">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!-- Top Left -->
                    <div class="top-left">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li>
                                <a href="<?= $web_url ?>/login.php"><span class="icon icofont-bank"></span>Internet Banking</a>
                            </li>
                            <li class="share"><a href="<?= $web_url ?>/p/about.php"><span class="icon icofont-handshake-deal"></span> Why Trust <?=  $pageName  ?></a></li>


                        </ul>
                    </div>

                    <!-- Top Right -->
                    
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo">
                            <a href="/"><img src="<?= $web_url ?>/assets/images/logo/<?= $page['image'] ?>" alt="" title="" /></a>
                        </div>
                    </div>

                    <div class="nav-outer pull-left clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="<?= $web_url ?>">Home</a></li>
                                    <li class="dropdown">
                                        <a href="#">Personal <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="<?= $web_url ?>/p/ultimate-checking.php">Ultimate Checking</a></li>
                                            <li>
                                                <a href="<?= $web_url ?>/p/health-savings-account.php">Health Savings Account (NSA)</a>
                                            </li>
                                            <li>
                                                <a href="<?= $web_url ?>/p/individual-retirement-account.php">Individual Retirement Account(IRAs)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Business <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="<?= $web_url ?>/p/overdraft-protection-sweeps.php">Overdraft Protection & Sweeps</a></li>
                                            <li>
                                                <a href="<?= $web_url ?>/p/business-essential-checking.php">Business Essential Checking</a>
                                            </li>
                                            <li>
                                                <a href="<?= $web_url ?>/p/business-savings-account.php">Business Savings Account</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Loans <i class="fa fa-caret-down"></i></a>
                                        <ul class="from-right">
                                            <li><a href="<?= $web_url ?>/p/home-mortgage-loans.php">Home Mortgage Loans</a></li>
                                            <li><a href="<?= $web_url ?>/p/personal-loans.php">Personal Loans</a></li>
                                            <li><a href="<?= $web_url ?>/p/working-capital-loans.php">Working Capital Loans</a></li>
                                            <li><a href="<?= $web_url ?>/p/investment-property-loans.php">Investment Property Loans</a></li>
                                            <li><a href="<?= $web_url ?>/p/commercial-real-estate-loans.php">Commercial Real Estate Loans</a></li>
                                            <li><a href="<?= $web_url ?>/p/business-term-loans.php">Business Term Loans</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services <i class="fa fa-caret-down"></i></a>
                                        <ul class="from-right">
                                            <li><a href="<?= $web_url ?>/p/online-banking.php">Online Banking</a></li>
                                            <li><a href="<?= $web_url ?>/p/wire-transfers.php">Wire Transfers</a></li>
                                            <li><a href="<?= $web_url ?>/p/lost-cards.php">Lost or Stolen Cards</a></li>
                                        </ul>
                                    </li>
                                    <li class="current">
                                        <a href="<?= $web_url ?>/p/contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Outer Box -->
                    <div class="outer-box">
                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer">
                            <a href="<?= $web_url ?>/login.php" class="theme-btn btn-style-one" style="margin-top:0px;padding:10px 20px;"><span class="txt">Banking</span></a>
                        </div>
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler">
                            <span class="icon ti-menu"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="<?= $web_url ?>"><img src="<?= $web_url ?>/assets/images/logo/<?= $page['image'] ?>" alt="" title="" /></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->