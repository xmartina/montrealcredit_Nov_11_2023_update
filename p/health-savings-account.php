<?php




$pageName  = "Health Savings";
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
                                    <h1> <span>Health Savings Account</span> </h1>
                                    <div class="text" style="color:#1F1B44;">An HSA helps employees save in advance for future medical expenses. Both
                                        you and your employees can contribute to the account tax-free, and balances over $100 earn competitive, tiered
                                        interest. Employees can pay for qualified medical expenses at anytime — without paying a penalty for withdrawal.</div>
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
                                    <h2> <span>Employment Benefits</span> <br></h2>
                                </div>
                                <div class="accordian-box">
                                    <!--Accordian Box-->
                                    <ul class="accordion-box">
                                        <div class="accordian-box">
                                            <ul class="list-group">
                                                <li class="list-group-item"> Provide great benefit to employees</li>
                                                <li class="list-group-item">Helps retain and attract good employees</li>
                                                <li class="list-group-item">Contributions are tax-deductible</li>
                                                <li class="list-group-item">Reduced insurance premiums</li>
                                                <li class="list-group-item">Little administrative burden</li>
                                            </ul>

                                        </div>

                                    </ul>

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
                                        <div class="accordian-box">
                                            <ul class="list-group">
                                                <li class="list-group-item">Interest-bearing account</li>
                                                <li class="list-group-item">Use funds on any qualified medical expense</li>
                                                <li class="list-group-item">Contributions are tax-deductible</li>
                                                <li class="list-group-item">Earnings are tax-deferred</li>
                                                <li class="list-group-item">Reduce the High Deductible Health Plan (HDHP) costs</li>
                                                <li class="list-group-item">Unused funds go toward retirement</li>
                                                <li class="list-group-item">Free debit card</li>
                                            </ul>

                                        </div>

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