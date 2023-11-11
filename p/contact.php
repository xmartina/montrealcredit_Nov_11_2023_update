<?php




$pageName  = "Contact Us";
include_once(__DIR__."/../front/header.php");

?>
    <!-- Map Section -->
    <div class="map-section">
      <div class="contact-map-area">
        <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.961936781822!2d-122.34013238480624!3d47.60742979591455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab3cbba9c83%3A0x548849e16a192f92!2s1301%202nd%20Ave%20%232600%2C%20Seattle%2C%20WA%2098101%2C%20USA!5e0!3m2!1sen!2sng!4v1626796438815!5m2!1sen!2sng" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <!-- End Map Section -->

    <!-- Contact Page Section -->
    <div class="contact-page-section">
      <div class="auto-container">
        <!-- Contact Info Boxed -->
        <div class="contact-info-boxed">
          <div class="row clearfix">
            <!-- Column -->
            <div class="column col-lg-6 col-md-6 col-sm-12">
              <h2>Seattle, <span>United States</span></h2>
              <div class="text">
                1301 2nd Ave Suite 2600, Seattle, WA 98101              </div>
              <div class="email">
                Email:
                <a href="mailto:<?= $page['url_email'] ?>"><?= $page['url_email'] ?></a>
              </div>
            </div>

            <!-- Column -->
            <div class="column col-lg-6 col-md-6 col-sm-12">
              <div class="call">
                Call directly:<br /><a href="tel:+<?= $page['url_tel'] ?>">+<?= $page['url_tel'] ?></a>
              </div>
              <ul class="location-list">
                <li>
                  <span>Brand Offices:</span>Allentown PA | Allanta, GA | Chicago, IL | Dallas, TX, <br /> Edison, NJ | Houston, TX                </li>
                <li>
                  <span>Work Hours:</span>Mon - Sat: 8.00 - 17.00                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Form Boxed -->
        <div class="form-boxed">
          <div class="sec-title centered">
            <div class="title">contact us</div>
            <h2>We Always Here <span>To Help You</span></h2>
          </div>

          
          <div class="boxed-inner">
            <!-- Contact Form -->
            <div class="contact-form">
              <!-- Contact Form -->
              <form method="post" action="/" id="contact-forms">
                <div class="row clearfix">
                  <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                    <input type="text" name="name" placeholder="Name *" required />
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                    <input type="email" name="email" placeholder="Emaill Address *" required />
                  </div>

                  <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                    <input type="text" name="phone" placeholder="Phone" required />
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <textarea name="message" placeholder="Message"></textarea>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12
                        text-center form-group">
                    <input type="hidden" required name="spam1" value="070218">
                    <label>Verify that you're not a robot</label>:
                    <span style="font-weight:600; color:#f00"> <i>070218</i></span>
                    <input type="text" style="display:inline;width:200px;border-right:1px solid grey;" name="spam2" placeholder="Enter anti-spam code" required>

                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                      <span class="txt">Send Message</span>
                    </button>
                  </div>
                </div>
              </form>
              <p class="form-messege"></p>
            </div>
            <!--End Contact Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Detail Section -->
   <?php
        include(__DIR__."/../front/footer.php");

        ?>