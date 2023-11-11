<?php




$pageName  = "Individual Retirement";
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
                                    <h1> <span>Individual Retirement Account</span> </h1>
                                    <div class="text" style="color:#1F1B44;">An IRA can prepare you for a secure retirement, offering greater
                                        returns than standard savings and a variety of tax advantages and terms to fit your needs. So whether you
                                        plan to travel, start a new hobby, or just hang out with the grandkids, we can help you achieve financial
                                        security.</div>
                                    <div class="btn-box">
                                        <a href="./about" class="theme-btn btn-style-one"><span class="txt">Who We Are</span></a>
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
                        <div class="content-column col-lg-12 col-md-12 col-sm-12 mb-0">
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
                                                <div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>DETAILS
                                            </div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <div class="accordian-text">
                                                        Save for retirement with tax advantages*<br>
                                                        Earn competitive interest higher than regular savings<br>
                                                        Available in Traditional and Roth<br>
                                                        Annual contribution limits apply<br>
                                                        $1,000 annual “catch up” contributions allowed for ages 50 and better<br>
                                                        No annual fees or set up fees<br>
                                                        Federally insured<br>
                                                        $2,500 minimum deposit to open
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>TRADITONAL VS ROTH.
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="accordian-text">
                                                        There are advantages to both Traditional and Roth IRAs. One of the biggest differences is the time at which you
                                                        see the most advantage. A Traditional IRA provides potential tax relief today, while a Roth IRA has the potential
                                                        for the most tax benefit at time of retirement.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>Coverdell ESA
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="accordian-text">
                                                        Create an easier transition into college for yourself and your student by setting up a savings account early. A Coverdell
                                                        Education Savings Account (ESA) provides a tax-free safe place to grow competitive dividends and also financial confidence
                                                        for a new stage in life.
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