$(document).ready(function(){
    console.log('here');
    
    getGallery();
});

function getGallery() {
    $.getJSON('/api/slider', function(sliderData){
        var slides = {slides: sliderData};

        var slideHtml = nunjucks.render('../templates/slides.njk', slides);
        $('#slide-images').replaceWith(slideHtml);


        var carouselHtml = nunjucks.render('../templates/carousel.njk', slides);
        $('#carousel-images').replaceWith(carouselHtml);

        $('#carousel-pro').flexslider({
		  animation: "slide",
		  animationDuration: 200,  
		  controlNav: false,
		  animationLoop: false,  
		  directionNav: true, 
		  slideshow: false,
		  itemWidth:500,
		  itemMargin: 3,
		  minItems: 6,
		  maxItems: 6,
		  asNavFor: '#pro_slider'
		});
        $('#pro_slider').flexslider({
			smoothHeight: false,
			multipleKeyboard: true,
			animation: "fade",
			controlNav: true,
			directionNav: true, 
			animationLoop: true,
			slideshow: true,
			slideshowSpeed: 7000,
			animationSpeed: 600,
			sync: "#carousel-pro"
	    });	
        

        $.getJSON('/api/gallery', function(data){
            console.log('gallery: ');
            var images = {images: data};

            console.log(images);

            var res = nunjucks.render('../templates/gallery.njk', images);

            
            $('#myimages').replaceWith(res);
            $("a[data-rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'fast', /* fast/slow/normal */
                slideshow: 5000, /* false OR interval time in ms */
                autoplay_slideshow: false, /* true/false */
                opacity: 0.80, /* Value between 0 and 1 */
                show_title: false, /* true/false */
                allow_resize: true, /* Resize the photos bigger than viewport. true/false */
                default_width: 500,
                default_height: 344,
                counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
                theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                horizontal_padding: 20, /* The padding on each side of the picture */
                hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
                wmode: 'opaque', /* Set the flash wmode attribute */
                autoplay: false, /* Automatically start videos: True/False */
                modal: false, /* If set to true, only the close button will close the window */
                deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
                overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
                keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
                ie6_fallback: true,
                social_tools: '' /* html or false to disable  <div class="pp_social"><div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&href='+location.href+'&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div></div> */
            });
            
        })


    });
}