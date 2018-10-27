
<br><br>   
<div class="banner-bottom">
    <?php foreach ($albums as $album) {?>
        <div class="col-md-4 agileits_w3layouts_banner_bottom_grid">
            <div class="hovereffect">
                <a><img src=<?php echo $this->webroot.'img/album/'. $album['Album']['picture_album'];?> alt=" " class="img-responsive" /><a/>
                <div class="overlay">
                    <h3 class="w3_instruments"><?php echo $album['Album']['album_name']; ?></h3>
                </div>
            </div>
            <div class="agileinfo_banner_bottom_grid">
                <div class="agileits_banner_bottom_grid1">
                    <h4 class="w3ls_color">Symphony</h4>
                    <h3>Viking Music</h3>
                    <p><?php echo substr($album['Album']['decription'], 0, 130) ?><?php echo strlen($album['Album']['decription']) > 130 ? "..." : "" ?></p>
                </div>
            </div>
        </div>

    <?php } ?>
        <!-- <div class="col-md-4 agileits_w3layouts_banner_bottom_grid">
            <div class="hovereffect">
                <img src="<?php echo $this->webroot.'/web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
                <div class="overlay">
                    <h3 class="w3_instruments">Music Instruments</h3>
                </div>
            </div>
            <div class="agileinfo_banner_bottom_grid w3l_banner_bottom1">
                <div class="agileits_banner_bottom_grid1">
                    <h4 class="w3ls_color1">Symphony</h4>
                    <h3>Hormonica Music</h3>
                    <p>Praesent suscipit nunc vel orci dictum pretium. Donec ullamcorper sagittis turpis.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 agileits_w3layouts_banner_bottom_grid">
            <div class="hovereffect">
                <img src="<?php echo $this->webroot.'/web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
                <div class="overlay">
                    <h3 class="w3_instruments">Music Instruments</h3>
                </div>
            </div>
            <div class="agileinfo_banner_bottom_grid w3l_banner_bottom2">
                <div class="agileits_banner_bottom_grid1">
                    <h4 class="w3ls_color2">Symphony</h4>
                    <h3>Trumpet Playing</h3>
                    <p>Praesent suscipit nunc vel orci dictum pretium. Donec ullamcorper sagittis turpis.</p>
                </div>
            </div>
        </div> -->
        <div class="clearfix"></div>
    </div>
<!-- //banner-bottom -->
<!-- features -->
<!-- <br> -->
    <div class="features">
        <div class="container">
            <div class="col-md-6 agile_features_left">
                <img src="<?php echo $this->webroot.'/web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 agile_features_right">
                <p><a href="mailto:symphony@example.com">Symphony@example.com</a>
                    Sed tempus, ligula eu rhoncus mollis, purus.</p>
                <h4>Opening Timings</h4>
                <ul>
                    <li><span>Monday</span>: 10:00 AM - 5:00 PM</li>
                    <li><span>Tuesday</span>: 10:00 AM - 5:00 PM</li>
                    <li><span>Wednesday</span>: 10:00 AM - 5:00 PM</li>
                    <li><span>Saturday</span>: 8:00 AM - 3:00 PM</li>
                    <li><span>Sunday</span>: Closed</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //features -->
<!-- newsletter -->
<!-- <br> -->
    <div class="newsletter">
        <div class="container">
            <div class="col-md-4 w3_agile_newsletter_left">
                <p>Subscribe Newsletter</p>
            </div>
            <div class="col-md-8 w3_agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email..." required="">
                    <input type="password" name="Pass" placeholder="Password..." required="" style = "height: 46px;">
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //newsletter -->
<!-- team -->
<!-- <br> -->
    <div class="team">
    <?php foreach ($albums as $album) {?>
        <div class="hovereffect1 col-md-4 wthree_latest_albums_grid_left">
            <figure class="effect-julia">
                <img src=<?php echo $this->webroot.'img/album/'. $album['Album']['picture_album'];?> alt=" " class="img-responsive" />
                <div class="overlay">
                    <h4><?php echo $album['Album']['album_name']; ?></h4>
                </div>          
            </figure>
        </div>
    <?php } ?>
        <div class="clearfix"></div>
    </div>
<!-- //team -->
<!-- latest-albums -->
    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Our Latest released <span>albums</span></h3>
             <?php foreach ($videos as $video) {?>  
                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src=<?php echo $this->webroot.'img/video/'. $video['Video']['picture_video'];?> alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <p><?php echo $video['Video']['video_name']; ?></p> 
                            </div>
                        </figcaption>           
                    </figure>
                </div>
            <?php } ?>
        </div>
    </div>
<!-- //latest-albums -->
<!-- footer