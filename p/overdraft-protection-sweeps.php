<?php




$pageName  = "Overdraft Protection";
include_once(__DIR__."/../front/header.php");

?>
        <!-- Banner Section -->
        <div class="banner-section">
            <div class="main-slider-carousel owl-carousel owl-theme" style="height:620px;">

                <div class="slide" data-bg-image="<?= $web_url ?>/front/images/main-slider/intro-1.jpg" style="height:620px;">
                    <div class="auto-container w-100">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h1> <span>Overdraft Protection & Sweeps</span> </h1>
                                    <div class="text" style="color:#1F1B44;"><?= $pageTitle ?> continues to offer overdraft protection and sweeps.</div>
                                    <div class="btn-box">
                                        <a href="about" class="theme-btn btn-style-one"><span class="txt">Who We Are</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
        <!-- End Banner Section -->



        <!-- About Section -->
        <div class="about-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                            <div class="about-column">
                                <div class="sec-title">
                                    <h2> <span>Line Of Credit Sweeps</span> <br></h2>
                                </div>
                                <div class="text">
                                    <p>
                                        It’s always a good plan to protect your funds. With <?= $pageTitle ?>’s sweep account options, you can ensure
                                        your funds are available when it’s time to pay the bills. Automate your fund transfers with a sweep
                                        account today. </p>
                                </div>
                            </div>
                        </div>
                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                            <div class="about-column">
                                <div class="sec-title">
                                    <h2 style="visibility:hidden;"> <span>Line of Credit Sweeps</span> <br></h2>
                                </div>
                                <div class="accordian-box">
                                    <!--Accordian Box-->
                                    <ul class="accordion-box">

                                        <!--Block-->
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active">
                                                <div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>Line Of Credit Sweep
                                            </div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <div class="accordian-text">
                                                        Move funds between your checking and line of credit accounts<br>
                                                        Rest easy knowing that funds will be available to ensure checks clear to pay bills<br>
                                                        Reduce what you spend on interest with automatic sweeps to pay down the loan balance<br>
                                                        Target your own balance – ask your banker how

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>ZERO BALANCE/TARGET BALANCE ACCOUNTS/OVERDRAFT PROTECTION
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="accordian-text">
                                                        Automate transfers between accounts<br>
                                                        Reduce or eliminate the need for credit – save on interest<br>
                                                        Minimize overdrafts<br>
                                                        Centralize cash for better control and efficiency<br>
                                                        Consolidate your balances for funding needs, but separate transaction flow for tracking purposes
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End About Section -->


       <?php
        include(__DIR__."/../front/footer.php");

        ?>