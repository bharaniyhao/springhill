

    <!-- Page Title area starts -->
    <section class="page-title section-big">
        <div class="container">
            <h2>CONTACT US</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!-- Page Title area ends -->


    <section id="contact" class="contact-area section-big">
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h3>Head Office</h3>
                    <div class="address-box clearfix">
                        <i class="fa fa-map-marker"></i>
                        <p>7503 Wakehurst St, Perrysburg, OH 43551</p>
                    </div>
                    <div class="address-box clearfix">
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:015110022">079 308 725 63</a></p>
                    </div>
                    <div class="address-box clearfix">
                        <i class="fa fa-send"></i>
                        <p><a href="mailto:email@yourdomain.com">info@springhillcarelimited.org.uk</a></p>
                    </div>
                    <div class="address-box clearfix">
                        <i class="fa fa-globe"></i>
                        <p><a href="http://www.yourdomain.com">www.yourdomain.com</a></p>
                    </div>

                    <br>

                    <h3>Branch Office</h3>
                    <div class="address-box clearfix">
                        <i class="fa fa-map-marker"></i>
                        <p>7503 Wakehurst St, Perrysburg, OH 43551</p>
                    </div>
                    <div class="address-box clearfix">
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:015110022">079 308 725 63</a></p>
                    </div>
                    <div class="address-box clearfix">
                        <i class="fa fa-send"></i>
                        <p><a href="mailto:email@yourdomain.com">info@yspringhillcarelimited.org.uk</a></p>
                    </div>
                    <div class="address-box clearfix">
                        <i class="fa fa-globe"></i>
                        <p><a href="http://www.yourdomain.com">www.yourdomain.com</a></p>
                    </div>
                </div>

                <div class="col-md-6">

                    <!-- Contact form starts -->
                    <div class="contact-form">

                        <form id="ajax-contact" action="assets/mailer.php" method="post">
                            <div class="form-group in_name">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="required">
                            </div>
                            <div class="form-group in_email">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group in_subject">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group in_message">
                                <textarea rows="5" name="message" class="form-control" id="message" placeholder="Message" required="required"></textarea>
                            </div>
                            <div class="actions">
                                <input type="submit" value="Send" name="submit" id="submitButton" class="btn" title="Submit Your Message!">
                            </div>
                        </form>

                        <!-- Submition status -->
                        <div id="form-messages"></div>

                    </div>
                    <!-- Contact form ends-->

                </div>


            </div>

        </div>
    </section>


    <!-- Google Map starts -->
    <div class="gmap-area section-big">
        <div class="container">
            <div id="contactgoogleMap"></div>
        </div>
    </div>
    <!-- Google Map ends-->
