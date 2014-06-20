var ISkyVideo = ISkyVideo || {};

ISkyVideo.Utilities = (function(){
	
	/**
	 * Initialisation.
	 */
	function init() {
		replacePngWithSvg();
	}
	
	/**
	 * SVG replacement technique. Replace png's and gif's with a class
	 * name of 'svg' with an svg.
	 *
	 * E.g. <img src="hello.png" class="svg" alt=""> Replaces hello.png with hello.svg.
	 */
	function replacePngWithSvg() {
		$("img.svg").each(function(){
			var $img = $(this),
				replaced = $img.attr('src').replace(/(.png)|(.gif)/, '.svg');
				
			// Preload
			var newImg = new Image();
			newImg.src = replaced;
			newImg.onload = function(){
				$img.attr('src', replaced);
			};
		});
	}
	
    return {
		init: init
    };
})();

ISkyVideo.Utilities.init();