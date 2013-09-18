//<![CDATA[
$(document).ready(function(){

    var myPlaylist = new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_N",
        cssSelectorAncestor: "#jp_container_N"
    }, [
        {
            title:"Cro Magnon Man",
            artist:"The Stark Palace",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
            oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg",
            poster: "http://www.jplayer.org/audio/poster/The_Stark_Palace_640x360.png"
        },
        {
            title:"Cro Masgnon Man",
            artist:"The Stark Palace",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
            oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg",
            poster: "http://www.jplayer.org/audio/poster/The_Stark_Palace_640x360.png"
        },
        {
            title:"Your Face",
            artist:"The Stark Palace",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
            oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg",
            poster: "http://www.jplayer.org/audio/poster/The_Stark_Palace_640x360.png"
        },
        {
            title:"Big Buck Bunny Trailer",
            artist:"Blender Foundation",
            m4v:"http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
            ogv:"http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
            webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
            poster:"http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
        }
    ], {
        playlistOptions: {
            enableRemoveControls: true
        },
        swfPath: "js",
        supplied: "webmv, ogv, m4v, oga, mp3"
    });

    // Click handlers for jPlayerPlaylist method demo

    // Audio mix playlist

    $("#playlist-remove").click(function() {
        myPlaylist.remove();
    });

    // The shuffle commands

    $("#playlist-shuffle").click(function() {
        myPlaylist.shuffle();
    });

    $("#playlist-shuffle-false").click(function() {
        myPlaylist.shuffle(false);
    });
    $("#playlist-shuffle-true").click(function() {
        myPlaylist.shuffle(true);
    });

    // The next/previous commands

    $("#playlist-next").click(function() {
        myPlaylist.next();
    });
    $("#playlist-previous").click(function() {
        myPlaylist.previous();
    });

    // The play commands

    $("#playlist-play").click(function() {
        myPlaylist.play();
    });

    // The pause command

    $("#playlist-pause").click(function() {
        myPlaylist.pause();
    });

    
    var Radio = {
        search: function(query) {
            $.ajax('/index.php?r=radio/search'
                    ,{param: query}
                    ,function (data){
                        
                    });
        }
    }
    $('#search').live('click',function(){
        Radio.search($('#palavra-chave').val());
    });
});
//]]>

            