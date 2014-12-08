var ISkyVideo = ISkyVideo || {};

ISkyVideo.Youtube = (function(){

    // Get the YouTube IFrame API.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    
    var player;
    window.onYouTubeIframeAPIReady = function() {
        if(window.innerWidth >= 768) {
            var video = document.getElementById('hero-video');
            if(video !== null) {
                var videoId = video.getAttribute('data-videoid');
            }
            player = new YT.Player('hero-video', {
                height: '390',
                width: '640',
                videoId: videoId,
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    rel: 0,
                    autohide: 1,
                    autoplay: 1,
                    modestbranding: 1,
                    start: 5,
                    loop: 1,
					playlist: videoId
                },
                events: {
                    'onReady': function(e) {
                        e.target.playVideo();
                        player.mute();
                    }
                }
            });
        }
    };
	
	if(!!navigator.userAgent.match(/(iPhone|iPod|iPad)/i)) {
		// Remove video if on ios as ios doesn't autoplay.
		var video = document.getElementById('hero-video');
		video.parentNode.removeChild(video);
	}

})();