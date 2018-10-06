<?php 
    echo $this->Html->css('playlist_song.css');
    echo $this->Html->script('playlist_song.js');
?>
<script src="https://cdn.plyr.io/3.4.4/plyr.js"></script>
<link rel="stylesheet" href="https://cdn.plyr.io/3.4.4/plyr.css">
<div class="containers" align="justify">
    <div class="column add-bottom">
        <div id="mainwrap" style= "margin_left : 30px">
            <div id="nowPlay">
                <span id="npAction">Paused...</span><span id="npTitle"></span>
            </div>
            <div id="audiowrap">
                <div id="audio0">
                    <audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio>
                </div>
                <div id="tracks">
                    <a id="btnPrev">&larr;</a><a id="btnNext">&rarr;</a>
                </div>
            </div>
            <div id="plwrap">
                <ul id="plList"></ul>
            </div>
        </div>
    </div>
</div>
