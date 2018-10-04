<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php 
	echo $this->Html->css('playlist_video.css');
?>
<br>

<!-- <iframe width="1221" height="687" src="https://www.youtube.com/embed/cVpnZ_qgz6o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
<div class="container">
	<div class="row">
        <div class="col-sm-8">
            <iframe id="viewFull" width="750" height="500" src="<?php echo $videos['Video']['path']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-4">
        	<?php foreach ($videos as $value) { ?>
            <div class="row">
                <div class="col-sm-12 ">
                    <iframe class = "<?php $value['Video']['id']?>" min-height: "170px"; src="<?php echo $videos['Video']['path']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
    <script>
    	
    </script>
    <h2>maybe you have not</h2>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section"></div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section bg-alt"></div>
        </div>
		<div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section"></div>
        </div>
        <div class="col-sm-6 col-md-12 col-lg-3">
            <div class="section bg-alt"></div>
        </div>
    </div>

    <h2>maybe you have not</h2>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section"></div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section bg-alt"></div>
        </div>
		<div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section"></div>
        </div>
        <div class="col-sm-6 col-md-12 col-lg-3">
            <div class="section bg-alt"></div>
        </div>
    </div>

</div>	