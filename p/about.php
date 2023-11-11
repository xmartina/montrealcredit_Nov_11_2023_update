<?php




$pageName  = "About Us";


include_once(__DIR__."/../front/header.php");

?>
        <!-- Page Banner Image Section -->
        <div class="page-banner-image-section">
            <div class="image">
                <img src="<?= $web_url ?>/front/images/background/2.jpg" alt="" />
            </div>
        </div>
        <!-- End Page Banner Image Section -->

        <!-- About Section Two -->
        <div class="about-section-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-6">
                            <div class="about-image">
                                <div class="about-inner-image">
                                    <img src="<?= $web_url ?>/front/images/background/about.jpg" alt="about">
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                            <div class="inner-column">
                                <div class="sec-title">
                                    <h2>We <span>Stand</span> For <span>Everyone</span> </h2>
                                </div>
                                <div class="text">
                                    <p>
                                        <?= $pageTitle ?>® is a federally chartered savings bank headquartered in United States.

                                        As a recognized leader in the industry, <?= $pageTitle ?> has been named among the top community banks and thrifts and the top-performing mid-sized banks in the nation. Though we’re receiving attention across the United States for what we do, our focus is and always has been on our customers.
                                    </p>
                                    <p>
                                        Successfully Providing the Best Banking Solution for over 10 years.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End About Section Two -->

        <!-- Reputation Section Two -->
        <div class="reputation-section-two">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">why choose us</div>
                                <h2><span>Your Success </span>Means<br> a lot To Us</h2>
                            </div>
                            <div class="blocks-outer">

                                <!-- Reputation Block -->
                                <div class="reputation-block">
                                    <div class="inner-box">
                                        <h5>Our Vision</h5>
                                        <div class="text">To be a leading bank in the World, supporting the development of small businesses and financial inclusion around the world.</div>
                                    </div>
                                </div>

                                <!-- Reputation Block -->
                                <div class="reputation-block">
                                    <div class="inner-box">
                                        <h5>Our Mission</h5>
                                        <div class="text">The mission of <?= $pageTitle ?> is to contribute to the sustainable development of the international banking sector by
                                            providing responsible financial services and solutions to households and micro, small and medium enterprises, using internationally
                                            recognized best banking practices. We are committed to delivering value for our clients, shareholders, employees, and society at large.
                                            The mission is based on our values: integrity and openness, professionalism, commitment to customers, team work, and social and
                                            environmental responsibility.</div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="form-boxed">
                                <!-- <h5>Our Values</h5> -->
                                <div class="text">The mission of <?= $pageTitle ?> is to contribute to the sustainable development of the international banking sector by
                                    providing. Below are our core values</div>

                                <div class="consult-form">
                                    <div class="sidebar-widget categories-blog">
    <div class="sidebar-title">
        <h4>Our Values</h4>
    </div>
    <ul>
        <li><a>Integrity and honesty </a></li>
        <li><a>Loyalty </a></li>
        <li><a>Teamwork</a></li>
        <li><a>Community </a></li>
        <li><a>Accountability </a></li>
        <li><a>Excellence </a></li>
        <li><a>Confidentiality </a></li>
        <li><a>Relationship </a></li>
    </ul>
</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Reputation Section -->



        <?php
        include(__DIR__."/../front/footer.php");

        ?>