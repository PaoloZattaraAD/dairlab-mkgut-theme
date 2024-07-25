<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Dairlab_Tm
 * @since Dairlab Tm 1.0
 */

?>
		</main><!-- #main -->

	<footer id="colophon" class="site-footer">

		<section class="footer-helper-link">
            <div class="site-name"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.8 18.43"><path d="M.25 18.4a.25.25 0 01-.25-.25V.4A.25.25 0 01.25.15h7.87a3.5 3.5 0 013.57 3.57v11.14a3.5 3.5 0 01-3.57 3.57zm7.68-1.89a1.56 1.56 0 001.55-1.55V3.6a1.56 1.56 0 00-1.55-1.55H2.22v14.49z" fill="currentColor"></path><path d="M18.51.97a1.5 1.5 0 011.28-.94 3.21 3.21 0 011 0 1.5 1.5 0 011.3.94l5.53 16.83a2.21 2.21 0 01.12.39.27.27 0 01-.27.25h-1.35a.75.75 0 01-.61-.49l-1.67-5h-7.07l-1.62 5a.75.75 0 01-.62.49h-1.35a.27.27 0 01-.27-.25 2.24 2.24 0 01.12-.39zm2.09 2.29l-.32-1.55-.32 1.55-2.58 7.8h5.81zm8.73 1.89a.25.25 0 01.25-.25h1.72a.25.25 0 01.25.25v13a.25.25 0 01-.25.25h-1.72a.25.25 0 01-.25-.25zm8.64 1.77a.6.6 0 00-.54.59v10.68a.25.25 0 01-.25.25h-1.75a.25.25 0 01-.25-.25V7.61a2.65 2.65 0 012.71-2.71h3.44a.25.25 0 01.25.25v1.53a.25.25 0 01-.25.25zm9.91 9.62a.25.25 0 01.25.25v1.4a.25.25 0 01-.25.25h-2.11a2.05 2.05 0 01-2.21-2.21V.4a.25.25 0 01.25-.25h1.72a.25.25 0 01.25.25v15.9a.23.23 0 00.25.25zm9.57-8.9a.85.85 0 00-.93-.84h-5.26a.17.17 0 01-.17-.17V5.08a.19.19 0 01.17-.17h6.13a2.16 2.16 0 012.29 2.21v9.1a2.05 2.05 0 01-2.21 2.21h-4.9a2.13 2.13 0 01-2.29-2.17v-2.48a2.23 2.23 0 011.3-2.46l5.41-1.45c.42-.17.47-.34.47-.66zm-4.62 5.26c-.52.22-.52.86-.52 1.06v1.89a.7.7 0 00.76.69h3.62a.69.69 0 00.76-.74v-4.23l-.71.37zM62.87.4a.25.25 0 01.25-.25h1.72a.25.25 0 01.25.25v4.5h5.07a2.61 2.61 0 012.66 2.66v8.17a2.71 2.71 0 01-2.71 2.71h-4.58a2.46 2.46 0 01-2.66-2.66zm2.24 15.38a.75.75 0 00.76.76h3.9a.82.82 0 00.81-.81V7.59a.79.79 0 00-.79-.79h-4.7z" fill="#fff"></path></svg>
            </div>
            <ul class="landing_menu">
                <?php wp_nav_menu( array( 'items_wrap' => '%3$s','theme_location' => "landing",'container' => null ) ); ?>
            </ul>
			<?php get_template_part( 'template-parts/footer/footer-social' ); ?>
		</section>
		<hr>
		<section class="site-info">
			<div class="site-credits">
					<p>D-Air Lab Srl ©2021 | P.IVA 03926100243</p>
			</div><!-- .site-name -->
			<div class="site-lang">
				<ul>
					<li><a href="/">IT</a></li>
					<li><a href="/en/">EN</a></li>
                </ul>
			</div>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'dairlabtm' ); ?>" class="footer-navigation">
					<ul class="footer-navigation-wrapper">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'link_before'    => '<span>',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .footer-navigation-wrapper -->
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</section>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script>
(function($){
    //navbar animation
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('#masthead').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('#masthead').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('#masthead').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }

    //carousel for news
    let newscarousle = $("#newscarousel");
    if(newscarousle[0]){
        new Splide( newscarousle[0], {
        perPage: 3,
        loop : true,
        arrows: true,
        gap: '5rem',
        rewind: true,
        interval: 4000,
        easing:'ease',
        speed: 1000,
        'arrowPath': 'M 10 37.332031 L 27.332031 20 L 10 2.667969 L 10 0 L 30 20 L 10 40 Z M 10 37.332031',
        breakpoints: {
            960: {
                perPage: 2,
            },
            767: {
                perPage: 1,
            },
        }
        } ).mount();
    }

    //menu toggle
    var openmenu = document.getElementById('toogle-menu');
    let menushide = document.querySelectorAll('.main-menu');
    openmenu.onclick = function(){
        for (var i = 0; i < menushide.length; i++) {
            var menu = menushide[i];
            menu.classList.toggle("open");
        }
    };


    //tabs
    var tabslink = document.querySelectorAll('.link-tab > a');
    if(tabslink.length){
            for (var i = 0; i < tabslink.length; i++) {
                var self = tabslink[i];

                self.addEventListener('click', function (event) {
                    // prevent browser's default action
                    event.preventDefault();
                    let toView = this.getAttribute('href');
                    let oldactive = document.querySelector('.is_selected');
                    oldactive.classList.remove('is_selected');
                    this.parentElement.classList.toggle('is_selected');
                    //console.log(toView);
                    let toRemove = document.querySelectorAll(".dropdown-element.active");
                    //console.log(toRemove);
                    toRemove[0].classList.remove("active");
                    let activate = document.querySelector(toView);
                    activate.classList.toggle('active');
                }, false);
            }
    }
    $( document ).ready(function() {
        if($('#newscarousel-slide01 .thumbail').length){
            var imgcarousel = $('#newscarousel-slide01 .thumbail img').height();
            var arrowhe = $('#newscarousel .splide__arrows');
            var slipagination = $('#newscarousel .splide__pagination');
            var heightcalc = (imgcarousel / 2);
            arrowhe.css({ 'top': heightcalc });
            $( window ).resize(function() {
            imgcarousel = $('#newscarousel-slide01 .thumbail img').height();
            heightcalc = (imgcarousel / 2);
            arrowhe.css({ 'top': heightcalc });
            });
            if ($(window).width() <= 767) {
                slipagination.css({ 'top': imgcarousel-5,'bottom':'auto' });
                $( window ).resize(function() {
                    slipagination.css({ 'top': imgcarousel-5,'bottom':'auto'});
                });
            }
        }
    });

        //carousel for news
        let postcarousel = $(".postcarousel");
    if(postcarousel[0]){
        new Splide( postcarousel[0], {
            perPage: 3,
        type : 'loop',
        perMove: 1,
        arrows: true,
        focus:  "center",
        pagination:false,
        interval: 4000,
        trimSpace: false,
        easing:'ease',
        speed: 1000,
        gap: '6rem',
        'arrowPath': 'M 10 37.332031 L 27.332031 20 L 10 2.667969 L 10 0 L 30 20 L 10 40 Z M 10 37.332031',
        breakpoints: {
            1280: {
                perPage: 2,
                padding: '5%',
                gap: '4rem',
            },
            767: {
                perPage: 1,
                padding: '5%',
                gap: '3rem',
            },
        }
        } ).mount();
    }
            //carousel for news
            var introslider = new Splide( '.intro_slider',{
                perPage: 1,
                type : 'loop',
                arrows: true,
                focus:  "center",
            });

            if(introslider){
                introslider.mount();  
            }
})(jQuery);
</script>
</body>
</html>
