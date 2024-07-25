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
			<?php get_template_part( 'template-parts/footer/footer-icon' ); ?>
			<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
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
