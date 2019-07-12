<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg py-4">
	<div class="container d-flex flex-row justify-content-between">
		<a class="nav-logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-fluid d-none d-lg-block"></a>
		<button class="navbar-toggler navbar-light white-bg" onclick="openNav()" type="button" data-toggle="collapse" data-target="#mySideNav" aria-controls="mySideNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

			<nav class="">
				<ul class="navbar-nav main-bg ">
					<li class="my-auto"><a class="color--white mr-3 p-2" href="<?php echo get_site_url(); ?>/how-it-works/">How It Works</a></li>
					<li class="my-auto"><a class="color--white mx-3 p-2" href="<?php echo get_site_url(); ?>/loan-costs/">Loan Costs</a></li>
					<li class="my-auto"><a class="color--white mx-3 p-2" href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
					<li class="my-auto"><a class="color--white ml-3 btn-link__primary" href="<?php echo get_site_url(); ?>/">Apply Now</a></li>
				</ul>
			</nav>

		</div>
	</div>
</nav>

<!-- Sidenav for Small Devices -->
<div id="sidenav" class="sidenav text-center background--white">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-alt.png" class="img-fluid mt-5 px-2">
	<ul class="pl-0">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<li class="py-3"><a class="color--black" href="<?php echo get_site_url(); ?>/">Home</a></li>
		<li class="py-3"><a class="color--black" href="<?php echo get_site_url(); ?>/how-it-works/">How It Works</a></li>
		<li class="py-3"><a class="color--black" href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
		<li class="py-3"><a class="color--black" href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
		<li class="py-3"><a class="color--black" href="<?php echo get_site_url(); ?>/contact-us/">Contact</a></li>
		<li class="py-3"><a class="color--black" href="apply">Apply Now</a></li>		
	</ul>
</div>