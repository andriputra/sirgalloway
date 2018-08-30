<header class="fl-page-header fl-page-header-primary<?php FLTheme::header_classes(); ?>" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="fl-page-header-wrap">
		<div class="fl-page-header-container container">
			<div class="fl-page-header-row">
				<div class="col-md-5 col-sm-5">
					<div class="fl-page-header-logo" itemscope="itemscope" itemtype="http://schema.org/Organization">
						<a href="<?php echo home_url(); ?>" itemprop="url"><?php FLTheme::logo(); ?></a>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 visible-lg visible-sm visible-md">
					<div class="fl-page-header-content">
						<!-- <?php FLTheme::header_content(); ?> -->
						<div class="fl-page-header-row">
							<div class="col-md-4 col-sm-4">
								<div class="head-block">
									<ul class="head-list first">
										<li><i class="icon-head remove"></i>Tattoo Removal<br>Business Opportunity</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="head-block">
									<ul class="head-list mid">
										<li><i class="icon-head ask"></i>Ask a Technician</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="head-block last">
									<div class="top-login">
										<a href="<?php echo esc_attr( get_option('new_option_login') ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login.png">Technician Login</a>
									</div>
									<div class="header_content last">
										<p>Find a Technician :</p>
										<a href="<?php echo esc_attr( get_option('new_option_domestic') ); ?>">Domestic</a> | <a href="<?php echo esc_attr( get_option('new_option_international') ); ?>">International</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="visible-xs mobile-head">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<div class="head-block-mobile first">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/removal.png" class="img-responsive">
								</div>
								<p>Tattoo Removal<br>Business Opportunity</p>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="head-block-mobile last">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ask.png" class="img-responsive last">
								</div>
								<p>Ask a Technician</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="head-block last">
								<div class="top-login">
									<a href="<?php echo esc_attr( get_option('new_option_login') ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login.png">Technician Login</a>
								</div>
								<div class="header_content last">
									<p>Find a Technician :</p>
									<a href="<?php echo esc_attr( get_option('new_option_domestic') ); ?>">Domestic</a> | <a href="<?php echo esc_attr( get_option('new_option_international') ); ?>">International</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="fl-page-nav-wrap">
		<div class="fl-page-nav-container container">
			<nav class="fl-page-nav navbar navbar-default" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".fl-page-nav-collapse">
					<span><?php FLTheme::nav_toggle_text(); ?></span>
				</button>
				<div class="fl-page-nav-collapse collapse navbar-collapse">
					<?php

					wp_nav_menu(array(
						'theme_location' => 'header',
						'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
						'container' => false,
						'fallback_cb' => 'FLTheme::nav_menu_fallback'
					));

					FLTheme::nav_search();

					?>
				</div>
			</nav>
		</div>
	</div>
</header><!-- .fl-page-header -->
