<?php
/**
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>

		</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

			<!--  Footer CTA -->
			<section class="section--footer primary-color-bg">
				<div class="container">

					<div class="row py-4">
						<div class="col-12 col-md-6 text-center text-md-left" >
							<a href="<?php echo get_site_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo"></a>
						</div>

						<div class="col-12 col-md-5 mx-auto my-auto white py-3">
							<ul class="mb-md-0 social-list no-bullets d-flex justify-content-around list--no-bullets px-lg-3">
								<li><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/facebook.svg'); ?></a></li>
								<li><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/twitter.svg'); ?></a></li>
								<li><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/linkedin.svg') ?></a></li>
								<li><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/instagram.svg') ?></a></li>
								<li><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/pinterest.svg') ?></a></li>
								<li><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/google-plus.svg') ?></a></li>
							</ul>
						</div>

					</div>

					<div class="d-flex  flex-column flex-md-row justify-content-between">
						<div class="mb-3 mb-md-0">
							<h4 class="footer__header">Quick navigation</h4>
							<a href="<?php echo get_site_url(); ?>"><p class="footer__item">Home</p></a>
							<a href="<?php echo get_site_url(); ?>/about-us/"><p class="footer__item">About Us</p></a>
							<a href="<?php echo get_site_url(); ?>/costs/"><p class="footer__item">Costs</p></a>
						</div>
						<div class="mb-3 mb-md-0">
							<h4 class="footer__header">Finance</h4>
							<a href="<?php echo get_site_url(); ?>/personal-loans/"><p class="footer__item">Personal Loans</p></a>
							<a href="<?php echo get_site_url(); ?>/cash-loans/"><p class="footer__item">Cash Loans</p></a>
							<a href="<?php echo get_site_url(); ?>/travel-loans/"><p class="footer__item">Travel Loans</p></a>
						</div>
						<div class="mb-3 mb-md-0">
							<h4 class="footer__header">Customer support</h4>
							<a href="<?php echo get_site_url(); ?>/contact-us/"><p class="footer__item">Contact us</p></a>
							<a href="<?php echo get_site_url(); ?>/faq/"><p class="footer__item">FAQ</p></a>
						</div>
						<div class="mb-0">
							<a class="btn-link__warning px-2" data-toggle="modal" data-target="#borrowingWarningModal"><span class="fas fa-exclamation-triangle mr-2"></span>WARNING ABOUT BORROWING</a>
						</div>
					</div>
					
				</div>
			</section>

			<!--  Privacy links -->
			<section class="primary-color-bg">
				<div class="container">
					<div class="d-flex flex-column flex-md-row justify-content-between">
						<a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy</a>
						<a href="<?php echo get_site_url(); ?>/acknowledgement-and-consent/" >Acknowledgement and Consent</a>
						<a href="<?php echo get_site_url(); ?>/website-policy/">Website Policy</a>
						<a href="<?php echo get_site_url(); ?>/dispute-resolution-policy/">Dispute Resolution Policy</a>
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
