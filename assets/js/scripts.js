/******

Scripts.js includes all the basic JS scripts for this theme.

******/

// SVG fallback
// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	
// DOM Ready
/*$(function() {
	
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});*/

/*!
 *  FluidVids.js v2.1.0
 *  Responsive and fluid YouTube/Vimeo video embeds.
 *  Project: https://github.com/toddmotto/fluidvids
 *  by Todd Motto: http://toddmotto.com
 *
 *  Copyright 2013 Todd Motto. MIT licensed.
 */
window.Fluidvids=function(a,b){"use strict";var c,d,e=b.head||b.getElementsByTagName("head")[0],f=".fluidvids-elem{position:absolute;top:0px;left:0px;width:100%;height:100%;}.fluidvids{width:100%;position:relative;}",g=function(a){return c=new RegExp("^(https?:)?//(?:"+d.join("|")+").*$","i"),c.test(a)},h=function(a){var c=b.createElement("div"),d=a.parentNode,e=100*(parseInt(a.height?a.height:a.offsetHeight,10)/parseInt(a.width?a.width:a.offsetWidth,10));d.insertBefore(c,a),a.className+=" fluidvids-elem",c.className+=" fluidvids",c.style.paddingTop=e+"%",c.appendChild(a)},i=function(){var a=b.createElement("div");a.innerHTML="<p>x</p><style>"+f+"</style>",e.appendChild(a.childNodes[1])},j=function(a){var c=a||{},e=c.selector||"iframe";d=c.players||["www.youtube.com","player.vimeo.com"];for(var f=b.querySelectorAll(e),j=0;j<f.length;j++){var k=f[j];g(k.src)&&h(k)}i()};return{init:j}}(window,document);

		Fluidvids.init({
			selector: 'iframe',
			players: ['www.youtube.com', 'player.vimeo.com']
		});
		
    conditionizr.config({
      assets: '<?php echo get_template_directory_uri(); ?>/assets/conditionizr',
      tests: {
        'chrome': ['style', 'script', 'class'],
        'chromium': ['style', 'script', 'class'],
        'firefox': ['style', 'script', 'class'],
        'ie6': ['style', 'script', 'class'],
        'ie7': ['style', 'script', 'class'],
        'ie8': ['style', 'script', 'class'],
        'ie9': ['style', 'script', 'class'],
        'ie10': ['style', 'script', 'class'],
        'ie10touch': ['style', 'script', 'class'],
        'ie11': ['style', 'script', 'class'],
        'ios': ['style', 'script', 'class'],
        'linux': ['style', 'script', 'class'],
        'mac': ['style', 'script', 'class'],
        'opera': ['style', 'script', 'class'],
        'retina': ['style', 'script', 'class'],
        'safari': ['style', 'script', 'class'],
        'touch': ['style', 'script', 'class'],
        'windows': ['style', 'script', 'class'],
        'winPhone7': ['style', 'script', 'class'],
        'winPhone75': ['style', 'script', 'class'],
        'winPhone8': ['style', 'script', 'class']
      }
    });
    	conditionizr.polyfill('//html5shiv.googlecode.com/svn/trunk/html5.js', ['ie6', 'ie7', 'ie8']);