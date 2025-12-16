<header id="header">
    <div class="container-fluid">
        <div class="row lap">
            <div class="center">

                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <a class="brand" href="index.php"><img src="images/logo.png"></a>
                </div>


                <div class="col-lg-3 col-sm-3 col-xs-3">
                    <!-- <div class="ic">   
                      <a href="https://sachlo.com/login.php"><i class="demo-icon icon-user-circle-o">&#xf2be;</i></a>
                      <a href=""><i class="demo-icon icon-globe">&#xe811;</i></a>      
                      <a href="https://www.facebook.com/SachloKSA"><i class="demo-icon icon-facebook-2">&#xf300;</i></a>
                      <a href="https://twitter.com/SachloKSA"><i class="demo-icon icon-twitter">&#xe800;</i></a>                    
                      <a href=""><i class="demo-icon icon-whatsapp-1">&#xf232;</i></a>                      
                    </div> -->
                </div>

                <div class="col-lg-6">
                    <ul class="menu">

                        <li><a <?php if ($page == "home") { ?> class="active" <?php } ?> href="index.php"><i
                                    class="demo-icon icon-home-1">&#xe810;</i></a></li>

                        <li><a <?php if ($page == "about") { ?> class="active" <?php } ?> href="about-us.php">ABOUT
                                US</a></li>
                        <li><a <?php if ($page == "policies") { ?> class="active" <?php } ?>
                                href="policies.php">POLICIES</a></li>
                        <li class="dropdown">
                            <a <?php if ($page == "products") { ?> class="active" <?php } ?> href="#">PRODUCTS <i
                                    class="demo-icon icon-arrow-down-sign-to-navigate">&#xe821;</i></a>
                            <div class="dropdown-content">
                                <a href="liquefied-chlorine-manufacturer.php">Liquefied Chlorine</a>
                                <a href="caustic-soda-manufacturer.php">Caustic Soda</a>
                                <a href="caustic-soda-flakes.php">Caustic Soda Flakes</a>
                                <a href="hydro-chloric-acid.php">Hydrochloric Acid 32%</a>
                                <a href="sodium-hypochlorite.php">Sodium Hypochlorite 12%</a>
                                <a href="calcium-chloride-36-liquid.php">Calcium Chloride 36% Liquid</a>
                                <a href="calcium-chloride_77-78-flakes.php">Calcium Chloride ‐ 77% ‐ 78% Flakes</a>
                                <a href="calcium-chloride_94-prills.php">Calcium Chloride ‐ 94% Prills</a>
                            </div>
                        </li>
                        <li><a <?php if ($page == "careers") { ?> class="active" <?php } ?>
                                href="careers.php">CAREERS</a></li>
                        <li class="mr-0" ><a <?php if ($page == "contact") { ?> class="active" <?php } ?>
                                href="contact.php">CONTACT</a></li>
                        <li>
                            <div class="dropdown text-right ml-n4">
                                <a class="flag" href="#"><img src="images/india-flag.jpg">
                                    <i class="demo-icon icon-arrow-down-sign-to-navigate">&#xe821;</i></a>
                                <div class="dropdown-content text-left bg">
                                    <a class="flag" href="ar">
                                        <img src="images/saudi-flag.jpg"> KSA
                                    </a>
                                    <a class="flag">
                                        <img src="images/india-flag.jpg"> ENG
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
        </div>

        <div class="row mob">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="menu">
                    <li><a class="brand" href="index.php"><img src="images/logo.png"></a></li>
                </ul>

                <input id="toggle" type="checkbox" />
                <label class="hamburger" for="toggle">
                    <div class="top"></div>
                    <div class="meat"></div>
                    <div class="bottom"></div>
                </label>
                <div class="nav">
                    <div class="nav-wrapper">
                        <nav>
                            <ul>

                                <li class="flo">
                                    <div class="dropdown">
                                        <a class="flag" href="#"><img src="images/india-flag.jpg">
                                            <i class="demo-icon icon-arrow-down-sign-to-navigate">&#xe821;</i></a>
                                        <div class="dropdown-content text-left bg">
                                            <a class="flag" href="ar" target="blank">
                                                <img src="images/saudi-flag.jpg"> KSA</a>
                                            <a class="flag" href="../">
                                                <img src="images/india-flag.jpg"> ENG</a>
                                        </div>
                                    </div>
                                </li>


                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="policies.php">Policies</a></li>
                                <li class="drop">
                                    <a href="#">PRODUCTS <i class="demo-icon icon-arrow-down-sign-to-navigate">&#xe821;</i></a>
                                    <div class="dropdown-content">
                                        <a href="liquefied-chlorine-manufacturer.php">Liquefied Chlorine</a>
                                        <a href="caustic-soda-manufacturer.php">Caustic Soda</a>
                                        <a href="caustic-soda-flakes.php">Caustic Soda Flakes</a>
                                        <a href="hydro-chloric-acid.php">Hydrochloric Acid 32%</a>
                                        <a href="sodium-hypochlorite.php">Sodium Hypochlorite 12%</a>
                                        <a href="calcium-chloride-36-liquid.php">Calcium Chloride 36 % Liquid</a>
                                        <a href="calcium-chloride_77-78-flakes.php">Calcium Chloride - 77 % - 78 % Flakes</a>
                                        <a href="calcium-chloride_94-prills.php">Calcium Chloride - 94 % Prills 1</a>
                                    </div>
                                </li>
                                <li><a href="news.php">Latest News</a></li>
                                <li><a href="careers.php">Careers</a></li>
                                <li><a href="contact.php">Contact</a></li>


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PQKWQFXC24"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PQKWQFXC24');
</script>
<script src="https://analytics.ahrefs.com/analytics.js" data-key="63szDq3j1+uFu53iHoKXLw" async></script>
</header>






<script type="text/javascript">
window.onscroll = () => {
    const nav = document.querySelector('header');
    if (this.scrollY <= 10) nav.className = '';
    else nav.className = 'scroll';
};
</script>