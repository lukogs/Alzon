<body class="<?= $pageName == "home" ? 'homepage' : '' ?>">
<header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-sm-6 col-xs-4"> -->
                    <div class="col-sm-4">
                        <div class="top-number"><i class="fa fa-phone-square"></i><a href="tel:+971565039007">+971 56 503 9007</a></div>
                    </div>
                    <div class="col-sm-8 offset-sm-8">
                    <!-- <div class="col-sm-6 col-xs-8"> -->

                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" height="80px"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                <?php $pageName = $pagename ?>
                    <ul class="nav navbar-nav">
                        <li class="<?= $pageName == "home" ? 'active' : '' ?>"><a href="./index.php">Home</a>
                        <li class="dropdown <?= $pageName == "about" ? 'active' : '' ?>"><a href="./about-us.php">About Us &nbsp; <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="./ceo.php">CEO's Message</a></li>
                            </ul>
                        </li>
                        <li class="dropdown web <?= $pageName == "service" ? 'active' : '' ?>"><a href="#">Services &nbsp; <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a href="#">Typing & Businessman &nbsp; <i class="fa fa-angle-right"></i></a>
                                    <ul class="uplift">
                                        <li><a href="./tasheel.php">Tas-heel services</a></li>
                                        <li><a href="./emirates.php">Emirates ID</a></li>
                                        <li><a href="./legalservices.php">Legal sesrvices</a></li>
                                        <li><a href="./echannel.php">Online E-channel</a></li>
                                        <li><a href="./consultation.php">Consultation</a></li>
                                        <li><a href="./licensing.php">Business Licensing</a></li>
                                        <li><a href="./vat.php">Vat Consultancy</a></li>
                                        <li><a href="./visa.php">Visa Services</a></li>
                                        <li><a href="./attestation.php">Attestation Services</a></li>
                                        <li><a href="./pwrofatt.php">Power Of Anttorney</a></li>
                                        <li><a href="./tradelicense.php">Trade License</a></li>
                                        <li><a href="./proservices.php">PRO Services</a></li>
                                        <li><a href="./businessman.php">Businessman services</a></li>
                                        <li><a href="./insurance.php">Insurance</a></li>
                                        <li><a href="./translation.php">Transnlation Services</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#">Tours & Travels &nbsp; <i class="fa fa-angle-right"></i></a>
                                    <ul class="uplift">
                                        <li><a href="./travels.php">Travels</a></li>
                                        <li><a href="./01_azerbaijan.php">Azerbaijan</a></li>
                                        <li><a href="./02_jordan.php">Jordan</a></li>
                                        <li><a href="./03_Kyrgyzstan.php">Kyrgyzstan</a></li>
                                        <li><a href="./04_georgia.php">Georgia</a></li>
                                        <li><a href="./05_turkey.php">Turkey</a></li>
                                        <li><a href="./06_armenia.php">Armenia</a></li>
                                        <li><a href="./07_nepal.php">Nepal</a></li>
                                        <li><a href="./08_bangkok.php">Bangkok</a></li>
                                        <li><a href="./09_warnerbros.php">Warnerbros</a></li>
                                        <li><a href="./10_emiratespark.php">Emirates Zoo</a></li>
                                        <li><a href="./11_skydiving.php">Skydiving</a></li>
                                        <li><a href="./12_ferrariworld.php">Ferrariworld</a></li>
                                        <li><a href="./13_nationalaquarium.php">National Aquarium</a></li>
                                        <li><a href="./14_qasralwatan.php">Qasr Al Watan</a></li>
                                        <li><a href="./15_burjkhalifa.php">Burj Khalifa</a></li>
                                        <li><a href="./16_fulldayabudhabi.php">Fullday Abu Dhabi</a></li>
                                        <li><a href="./17_hattamountain.php">Hatta Mountain</a></li>
                                        <li><a href="./18_fulldayhatta.php">Fullday Hatta</a></li>
                                        <li><a href="./19_eastcoast.php">East Coast</a></li>
                                        <li><a href="./20_musandam.php">Musandam</a></li>
                                        <li><a href="./21_deiracreek.php">Deira Creek Cruise</a></li>
                                        <li><a href="./22_marinacruise.php">Marina Cruise</a></li>
                                        <li><a href="./23_desertsafari.php">Desert Safari</a></li>
                                    </ul>
                                </li>
                                
                                <li class="dropdown-submenu"><a href="events.php">Event Management &nbsp; <i class="fa fa-angle-right"></i></a>
                                    <ul class="uplift">
                                        <li><a href="./01_conference.php">Conference</a></li>
                                        <li><a href="./02_birthday.php">Birthday Party</a></li>
                                        <li><a href="./03_corporate.php">Corporate Event</a></li>
                                        <li><a href="./04_entertainment.php">Entertainment</a></li>
                                        <li><a href="./05_fashionshow.php">Fashon Shows</a></li>
                                        <li><a href="./06_filming.php">Event Filming</a></li>
                                        <li><a href="./07_folklore.php">Folklore Dance</a></li>
                                        <li><a href="./08_hospitality.php">Hospitality Services</a></li>
                                        <li><a href="./09_musicalband.php">Musical Band</a></li>
                                        <li><a href="./10_recreational.php">Recreational Services</a></li>
                                        <li><a href="./11_wedding.php">Wedding Party</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="bdc.php">BDC &nbsp; <i class="fa fa-angle-right"></i></a>
                                    <ul class="uplift">
                                        <li><a href="./01_BDC_security.php">Security & Surveillance</a></li>
                                        <li><a href="./02_BDC_access_control.php">Access Control Solutions</a></li>
                                        <li><a href="./03_BDC_telecom_solutions.php">Telecom Solutions</a></li>
                                        <li><a href="./04_BDC_digital_signage.php">Digital Signage</a></li>
                                        <li><a href="./05_BDC_audio_visual.php">Audio Visual Solutions</a></li>
                                        <li><a href="./06_BDC_hardware.php">Hardware Solutions</a></li>
                                        <li><a href="./07_BDC_annual_maintenance.php">Annual Maintenance</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="phn"><a href="#" data-toggle="modal" data-target="#myModal">Services &nbsp; <i class="fa fa-angle-down"></i></a></li>    
                        <li class="<?= $pageName == "gallery" ? 'active' : '' ?>"><a href="./gallery.php">Gallery</a></li>
                        <li class="<?= $pageName == "contact" ? 'active' : '' ?>"><a href="./contact-us.php">Contact</a></li>       
                    </ul>
                </div>
            <!--/.container-->    
        </nav>

        <!--/nav-->
    </header><!--/header-->