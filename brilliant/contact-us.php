<?php $pagename = "contact";
 include("head.php");
 include("navbar.php");
  ?>
    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.4910139249305!2d54.532390913679876!3d24.329382972331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e3974b9bfcc5b%3A0xd70600c74df3fdbb!2sNew%20Brilliant%20Typing%20%26%20Travels!5e0!3m2!1sen!2sin!4v1647581338568!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h4>Brilliant Typing</h4>
                                    <p>Musaffah <br>
                                    Sanaiya M/2 <br>
                                    P.O.Box: 33245 <br>
                                    Abu Dhabi - UAE
                                    </p>
                                    <p>
                                        <!-- <label>Phone:</label> -->
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+971565039007">+971 56 503 9007</a>
                                        <a href="tel:+971586911461">+971 58 691 1461</a> <br>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info.brillianttyping@gmail.com">info.brillianttyping@gmail.com</a>
                                    </p>
                                </address>

                                <address>
                                    <h4>Brilliant Typing Br.1</h4>
                                    <p>Musaffah <br>
                                    Sanaiya M/38 <br>
                                    P.O.Box: 33245 <br>
                                    Abu Dhabi - UAE
                                    </p>
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+971502134222">+971 50 213 4222</a>
                                        <a href="tel:+971586911461">+971 58 691 1461</a> <br>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info.brilliantgroupbr@gmail.com">info.brilliantgroupbr@gmail.com</a>
                                    </p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h4>New Brilliant Typing & Travels</h4>
                                    <p>Musaffah <br>
                                    Shabiya M/10 <br>
                                    P.O.Box: 33245 <br>
                                    Abu Dhabi - UAE
                                    </p>
                                    
                                </address>

                                <address>
                                    <h4>Brilliant Events</h4>
                                    <p>No1, 306,  3rd Floor, <br>
                                       UAE Enterprises Building, <br>
                                       Behind Dubai Airport Cargo. <br>
                                        Al garoud. Dubai.
                                    </p>
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+00971522197755">+971 52 219 7755</a> <br>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info@brillianteventsuae.com">info@brillianteventsuae.com</a>
                                    </p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message. We will get back to you!</h2>
                <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required" style="border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required" style="border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" style="border: 1px solid black;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="companyname" class="form-control" style="border: 1px solid black;">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required" style="border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" style="border: 1px solid black;"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <?php include("footer.php") ?>
</body>
</html>