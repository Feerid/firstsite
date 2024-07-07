<?php
include 'phpfiles/header.php';
?>


<body>
   
 <?php include_once 'phpfiles/menu.php';?>


    <section class="section-contact" style="background-color: #eef1f6;">
        <div class="container">

          
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="contact--info-area">
                        <h3>Get in touch</h3>
                        <p>Looking for help? Fill the form and start a new adventura</p>
                    </div>

                    <div class="infos">
                        <h5>Headquarters</h5>
                        <p><i class="fa fa-home" aria-hidden="true"></i> 744 New York Ave, Brooklyn, Kings,<br>
                            New York 10224</p>
                    </div>

                    <div class="infos">
                        <h5>Phone</h5>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>(+642) 245 356 432<br>
                            (+420) 336 476 328</p>
                    </div>

                    <div class="infos">
                        <h5>Support</h5>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>bisy@support.com<br>
                            help@education.com</p>
                    </div>

                    <div class="sosial-icon">
                        <h5>Follow Us</h5>
                        <a class="face" href=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a class="twit" href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a class="you" href=""><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a class="link" href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    </div>

                </div>

                <div class="col-md-8 col-12">
                    <div class="contact-form">
                        <h4>Let's Connect</h4>
                        <p>Integer at lorem eget diam facilisis lacinia ac id massa.</p>
                        <form action="save.php" method="post" class="">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" required placeholder="First Name" name="firstname">
                                </div>

                                <div class="col-md-6">
                                    <input type="text"  placeholder="Last Name" name="lastname">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>

                                <div class="col-md-6">
                                    <input type="number" placeholder="Phone Number" name="phone">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>

                               <div class="col-md-12"> <textarea name="message" id="" placeholder="How can we help?" rows="10"></textarea></div>


                            </div>

                        </div>

                        <div><input type="checkbox"><span>
                                <p>I agree to the <a href="" style="text-decoration: none;">Terms & Conditions</a></p>
                            </span></div>
                        <button class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </section>

















    <section class="foot">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="end1">

                        <div class="end-logo">
                            <a href="">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAAAeCAYAAAAIC7GrAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3NpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo0OTdjYzgwYS1iNzM3LTEwNDAtODUxMy00MjQzNjFlMzFhZTEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTgzN0FGNUExMTU0MTFFQzlFRjJFNzFGNjVBMkQ2RUYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTgzN0FGNTkxMTU0MTFFQzlFRjJFNzFGNjVBMkQ2RUYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIyLjQgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjUxZmIxM2EtMzk1My00YzQ4LWExODgtZjlhMmM2Y2Y1ZmM1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjQ5N2NjODBhLWI3MzctMTA0MC04NTEzLTQyNDM2MWUzMWFlMSIvPiA8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"
                                    alt="">
                            </a>
                            <p>Appie WordPress is theme is the last theme you will ever have.</p>
                        </div>

                        <a class="read" href="">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="brand-icon">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>


                    </div>
                </div>

                <div class="col-md-2 col-12">
                    <div class="footer-company">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Case Studios</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <div class="footer-company">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="">Community</a></li>
                            <li><a href="">Resources</a></li>
                            <li><a href="">Faqs</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Careers</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <div class="footer-company">
                        <h4>Get In Touch</h4>
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i></i<a href="">support@appie.com</a>
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="">+(642) 342 762 44</a></li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="">442 Belle Terre St
                                    Floor 7, San Francisco, AV 4206</li>

                        </ul>
                    </div>
                </div>



            </div>

        </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>`
    <script src="js/appie.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

<?php



?>