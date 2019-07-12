<?php
/**
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer background--black" role="contentinfo">

			<!--  Footer CTA -->
			<section class="section--footer primary-color-bg">
				<div class="container">

					<div class="row py-lg-4 border-bottom mb-3">
						<div class="col-12 col-lg-6 text-center text-lg-left" >
							<a href="<?php echo get_site_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo"></a>
						</div>

						<div class="col-12 col-lg-6 my-auto white py-3">
							<ul class="mb-lg-0 pl-0 social-list no-bullets d-flex flex-column flex-lg-row justify-content-end list--no-bullets text-center text-lg-left">
								<li><a class="social-link px-lg-4 color--white ts-6" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/solid/phone.svg'); ?>1300 762 731</a></li>
								<li><a class="social-link color--white ts-6" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/solid/envelope.svg'); ?>info@cashsmart.net</a></li>
							</ul>
						</div>

					</div>

					<div class="d-flex flex-column flex-lg-row justify-content-between">

						<div class="d-flex flex-column flex-lg-row justify-content-between my-auto text-center text-lg-left">

							<a class="color--white mx-2 ts-6 mb-0 py-2" href="<?php echo get_site_url(); ?>/how-it-works/">How it Works</a>
							<a class="color--white mx-2 ts-6 mb-0 py-2" href="<?php echo get_site_url(); ?>/loan-costs/">Loan Costs</a>
							<a class="color--white mx-2 ts-6 mb-0 py-2" href="<?php echo get_site_url(); ?>/faq/">FAQs</a>
							<a class="color--white mx-2 ts-6 mb-0 py-2" href="<?php echo get_site_url(); ?>/contact-us/">Contact Us</a>
							<a class="color--white mx-2 ts-6 mb-0 py-2" href="<?php echo get_site_url(); ?>/disclosure/">Disclosure</a>
							<a class="color--white btn-link__warning mx-2 ts-6 mb-0 my-2" href="apply.myborrowing.com.au/mb/apply">Apply Now</a>
							<a class="color--white mx-2 ts-6 social-link d-none d-lg-block" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/facebook.svg'); ?></a>
							<a class="color--white mx-2 ts-6 social-link d-none d-lg-block" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/instagram.svg'); ?></a>


						</div>

						<div class="mb-0 text-center text-lg-left">
							<a class="btn-link__warning px-2" data-toggle="modal" data-target="#borrowingWarningModal"><span class="fas fa-exclamation-triangle mr-2"></span>WARNING ABOUT BORROWING</a>
						</div>

					</div>

					<div class="d-flex flex-column flex-lg-row justify-content-between color--dark-grey mt-4 text-center text-lg-left">
						<p class="ts-6">© Copyright 2018 cashsmart.net. All Right Reserved.</p>
						<p class="ts-6">ABN 37 111 606 127</p>
						<p class="ts-6">Cash Smart Pty Ltd 2019 | Australian Credit Licence 388992</p>
					</div>
					
				</div>
			</section>
		
		</footer><!-- #colophon -->
	
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Modal -->
<div class="modal fade" id="borrowingWarningModal" role="dialog" aria-labelledby="borrowingWarningModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title primary-color" id="borrowingWarningModalTitle">
					<i class="fas fa-exclamation-triangle"></i>WARNING: Do you really need a loan today?*
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>It can be expensive to borrow small amounts of money and borrowing may not solve your money problems.</p>
				<hr>
				<p>Check your options before you borrow:</p>
				<ul>
					<li>For information about other options for managing bills and debts, call <a href="tel:1800007007">1800 007 007</a> from anywhere in Australia to talk to a free and independent financial counsellor.</li>
					<li>Talk to your electricity, gas, phone or water provider to see if you can work out a payment plan.</li>
					<li>If you are on government benefits, ask if you can receive an advance from Centrelink: <a href="https://www.humanservices.gov.au/advancepayments">www.humanservices.gov.au/advancepayments</a>.</li>
				</ul>
				<p>The Australian Government's <a href="https://www.moneysmart.com.au">MoneySmart</a> website shows you how small amount loans work and suggests other options that may help you.</p>
				<small>*This statement is an Australian Government requirement under the <i>National Consumer Credit Protection Act 2009</i>.</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


</body>


</html>
