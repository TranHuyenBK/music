<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php 
	echo $this->Html->css('playlist_video.css');
?>
<br>
<div class="container">
	<div class="row">
        <div class="col-sm-8">
            <iframe id="viewFull" width="750" height="500" src="<?php echo $videos[0]['Video']['path']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-4">
        	<?php foreach ($videos as $value) { ?>
            <div class="row">
                <div class="col-sm-12 ">
                    <a><img  class ="playlist_video" id = "<?php echo $value['Video']['id'];?>" data_src = "<?php echo $value['Video']['path']; ?>" height="170px" width="250px" src = 'https://image.freepik.com/free-photo/cute-cat-picture_1122-449.jpg' ></img></a>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.playlist_video').click(function() {
                src = $(this).attr('data_src');
                $('#viewFull').attr('src', src);
            });
        });

        
        
    </script>
    <h2>maybe you have not</h2>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="section"></div>
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