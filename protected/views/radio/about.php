<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'RADIO',
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/actions/radio.js"></script>
<div class="navbar navbar-inner migalha">
    <div ><a class="Home" href="#">Principal</a> / <a  class="contato" href="#">Radio</a></div>
</div>
<div class="title"><span class="mark">&nbsp;</span>&nbsp;RADIO
<p>
    Curta suas musicas favoritas.
</p></div>
<h1></h1>
<div style="float:left;width: 400px;">
    <div>
        <label>Pesquisar:</label>
        <input id="palavra-chave" class="input-xlarge" name="palavra-chave" style="width: 100%"/>
    </div>
    <div>
        <input class="btn btn-primary" type="button" id="search" value="Pesquisar" />
    </div>
    <br>
    <div id="result" class="border-result">
        <span style="padding:10px;">
            Nenhum resultado encontrado!
        </span>
    </div>
</div>
<div style="width: 500px;float: right;">
    <br>
    <div id="jp_container_N" class="jp-video jp-video-270p">
            <div class="jp-type-playlist">
                    <div id="jquery_jplayer_N" class="jp-jplayer"></div>
                    <div class="jp-gui">
                            <div class="jp-video-play">
                                    <a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
                            </div>

                            <div class="jp-interface">
                                    <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                    <div class="jp-play-bar"></div>
                                            </div>
                                    </div>
                                    <div class="jp-current-time"></div>
                                    <div class="jp-duration"></div>
                                    <div class="jp-controls-holder">

                                            <ul class="jp-controls">
                                                    <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                                                    <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                                    <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                                    <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                                                    <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>

                                                    <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                                    <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                                    <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                            </ul>
                                            <div class="jp-volume-bar">
                                                    <div class="jp-volume-bar-value"></div>
                                            </div>

                                            <ul class="jp-toggles">
                                                    <li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
                                                    <li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
                                                    <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                                                    <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
                                                    <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>

                                                    <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                            </ul>
                                    </div>
                                    <div class="jp-title">
                                            <ul>
                                                    <li></li>
                                            </ul>
                                    </div>

                            </div>
                    </div>
                    <div class="jp-playlist">
                            <ul>
                                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                    <li></li>
                            </ul>
                    </div>
                    <div class="jp-no-solution">

                            <span>Update Required</span>
                            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
            </div>
    </div>
</div>