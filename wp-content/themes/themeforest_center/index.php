        <?php get_header() ?>
    	<!-- ====== Preloader ======  -->
	    <div class="loading">
			<div class="load-circle"><span class="one"></span></div>
		</div>
		<!-- ======End Preloader ======  -->

		<!-- ====== button-top ======  -->
		<div class="button-top" data-scroll-nav="0">
			<span>
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</span>
		</div>
		<!-- ======End button-top ======  -->

    	<!-- ====== Navgition ======  -->
            <?php get_template_part( 'navigation'); ?>
		<!-- ====== End Navgition ======  -->

		<!-- ====== Header ======  -->
        <section class="header" data-scroll-index="0">
            <div class="container-fluid">
                <div class="wraper">
                    <div class="item bg3">
                        <div class="v-middle text-center caption">
                            <h4>We Are Creative</h4>
                            <h1>Makeing Awesome Themes</h1>
                            <p>Lorem ipsum dolor sit amet, conse ipsum ctetur adipis icing elit, labore et dolore magna aliqua.</p>
                            <!--                    <a class="butn" href="#"><span>Getting Started</span></a>-->
                            <!--                    <a class="butn" href="#"><span>Learn More</span></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- ====== End Header ======  -->

		<!-- ====== About ======  -->
            <?php get_template_part( 'about'); ?>
		<!--====== End About ======-->

        <!--====== Portfolio ======-->
            <?php get_template_part( 'portfolio'); ?>
        <!--====== End Portfolio ======-->

        <!--====== Blog ======-->
            <?php get_template_part( 'blog'); ?>
        <!--====== End Blog ======-->

        <!--====== Price ======-->
            <?php get_template_part( 'price'); ?>
        <!--====== End Price ======-->

        <!--====== Team ======-->
            <?php get_template_part( 'team'); ?>
		<!--====== End Team ======-->

<!--		<!--====== Services ======-->-->
<!--            --><?php //get_template_part( 'services'); ?>
<!--		<!--====== End Services ======-->-->

		<!--====== Contact ======-->
            <?php get_template_part( 'contacts'); ?>
		<!--====== End Contact ======-->
       
		<!--====== Footer ======-->
            <?php get_footer(); ?>
		<!--====== End Footer ======-->

