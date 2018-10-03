<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php 
	echo $this->Html->css('playlist_video.css');
	echo $this->Html->script('playlist_video.js');
?>
<br>
<div class="container">
<div class="vidcontainer">
<video id="myvid" >

  Your browser does not support the video tag.
  
</video>

        <div class="topControl">
			<div class="progress">
				<span class="bufferBar"></span>
				<span class="timeBar"></span>
			</div>
			<div class="time">
				<span class="current"></span> / 
				<span class="duration"></span> 
			</div>
        </div>

<div class="controllers">
  	<button class="btnPlay" title="Play/Pause video"></button>
  	<button class="prevvid disabled" title="Previous video"><i class="fa fa-step-forward fa-rotate-180"></i></button>
    <button class="nextvid" title="Next video"><i class="fa fa-step-forward"></i></button>
    <button class="sound sound2 btn" title="Mute/Unmute sound"></button>
    <div class="volume" title="Set volume">
			<span class="volumeBar"></span>
	</div>
    <button class="btnFS " style="float:right" title="full screen"></button>
    <button class="btnspeed " style="float:right" title="Video speed"><i class="fa fa-gear"></i></button>
    <ul class="speedcnt">
    	<li class="spdx50">1.5</li>
    	<li class="spdx25">1.25</li>
    	<li class="spdx1 selected">Normal</li>
    	<li class="spdx050">0.5</li>
    </ul>
	<button class="btnLight lighton " style="float:right" title="on/off light"><i class="fa fa-lightbulb-o"></i></button>
</div>
<div class="bigplay" title="play the video"><i class="fa fa-play-circle-o"></i></div>
<div class="loading"><i class="fa fa-spinner fa-spin"></i></div>
    </div>

	<div class="videolist">
		<nav class="vids">
			<a class="link" href="https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4">test1</a>

			<a class="link" href="https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4">test2</a>

			<a class="link" href="http://www.html5videoplayer.net/videos/toystory.mp4">test3</a>

			<a class="link" href="http://download.wavetlan.com/SVV/Media/HTTP/H264/Talkinghead_Media/H264_test4_Talkingheadclipped_mp4_480x320.mp4">test4</a>

			<a class="link" href="http://download.wavetlan.com/SVV/Media/HTTP/H264/Other_Media/H264_test5_voice_mp4_480x360.mp4">test5</a>

			<a class="link" href="http://download.wavetlan.com/SVV/Media/HTTP/H264/Other_Media/H264_test7_voiceclip_mp4_480x360.mp4">test6</a>

			<a class="link" href="http://download.wavetlan.com/SVV/Media/HTTP/H264/Other_Media/H264_test8_voiceclip_mp4_480x320.mp4">test7</a>

			<a class="link" href="http://download.wavetlan.com/SVV/Media/HTTP/MP4/ConvertedFiles/Media-Convert/Unsupported/dw11222.mp4">test8</a>

			<a class="link" href="http://download.wavetlan.com/SVV/Media/HTTP/MP4/ConvertedFiles/Media-Convert/Unsupported/test7.mp4">tsest9</a>
		</nav>
	</div>
</div>
<br>