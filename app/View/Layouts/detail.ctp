<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Symphony a Music Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Symphony Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->

<?php 
    echo $this->Html->css('/web/css/bootstrap.css');
    echo $this->Html->css('/web/css/style.css');
    echo $this->Html->script('/web/js/jquery-2.1.4.min.js');
    // echo $this->Html->script('/web/css/font-awesome.css');
?>
<link href="" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!-- <link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet"> -->
<!-- <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head> -->
    
<body>
<!-- banner -->
    <div class="banner1">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.html">Sym<span>phony</span></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
                            <li class="menu__item menu__item--current"><a href="music.html" class="menu__link">Music</a></li>
                            <li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="icons.html">Web Icons</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class="menu__item"><a href="mail.html" class="menu__link">Mail Us</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    </div>
<!-- //banner -->   
    <?php echo $this->fetch('content'); ?>

    <div class="footer">
        <div class="container">
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>About Us</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="agileits_footer_grid_gallery">
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo $this->webroot.'/web/images/11.jpg'; ?>" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo $this->webroot.'/web/images/11.jpg'; ?>" alt=" " class="img-responsive" /></a>
                    </div>
                    
                    
                </div>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Twitter Posts</h3>
                <ul class="w3agile_footer_grid_list">
                    <li>Ut aut reiciendis voluptatibus maiores <a href="#">http://symphony@example.com</a> alias, ut aut reiciendis.
                        <span><i class="fa fa-twitter" aria-hidden="true"></i>02 days ago</span></li>
                    <li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://symphony@example1.com</a> ut aut
                        voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i>03 days ago</span></li>
                </ul>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Social Media</h3>
                <ul class="agileinfo_social_icons">
                    <li><a href="#" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span><i>-</i>Facebook</a></li>
                    <li><a href="#" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span><i>-</i>Twitter</a></li>
                    <li><a href="#" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span><i>-</i>Google+</a></li>
                    <li><a href="#" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span><i>-</i>Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- //footer -->
<!-- copy-right -->
   
<!-- //copy-right -->
<!-- bootstrap-pop-up -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Symphony
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-6 w3_modal_body_left">
                            <img src="<?php echo $this->webroot.'/web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-6 w3_modal_body_right">
                            <h4>Suspendisse et sapien ac diam suscipit posuere</h4>
                            <p>Ut enim ad minima veniam, quis nostrum 
                            exercitationem ullam corporis suscipit laboriosam, 
                            nisi ut aliquid ex ea commodi consequatur? Quis autem 
                            vel eum iure reprehenderit qui in ea voluptate velit 
                            esse quam nihil molestiae consequatur.
                            <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
                                esse quam nihil molestiae consequatur.</i>
                                Fusce in ex eget ligula tempor placerat. Aliquam laoreet mi id felis commodo 
                                interdum. Integer sollicitudin risus sed risus rutrum 
                                elementum ac ac purus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<!-- //bootstrap-pop-up -->
<!-- flexisel -->
    <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: false,
                    autoPlaySpeed: 3000,            
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: { 
                        portrait: { 
                            changePoint:480,
                            visibleItems: 1
                        }, 
                        landscape: { 
                            changePoint:640,
                            visibleItems:2
                        },
                        tablet: { 
                            changePoint:768,
                            visibleItems: 2
                        }
                    }
                });
                
            });
    </script>
    <?php 
        echo $this->Html->script('/web/js/jquery.flexisel.js');
        echo $this->Html->script('/web/js/move-top.js');
        echo $this->Html->script('/web/js/easing.js');
        echo $this->Html->script('/web/js/bootstrap.js');
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
</body>
</html>