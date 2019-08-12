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
							<a href="<?php echo get_site_url(); ?>"><img class="img-fluid nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo"></a>
							<a class="color--white mx-2 ts-6 my-auto social-link d-inline-block d-lg-none" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/facebook.svg'); ?></a>
							<a class="color--white mx-2 ts-6 my-auto social-link d-inline-block d-lg-none" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/instagram.svg'); ?></a>
						</div>

						<div class="col-12 col-lg-6 my-auto white py-3">
							<ul class="mb-lg-0 pl-0 social-list no-bullets d-flex flex-column flex-lg-row justify-content-end list--no-bullets text-center text-lg-left">
								<li class="my-2"><a class="social-link px-lg-4 color--white ts-6" target="_blank" href="tel:1800 825 805"><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/solid/phone.svg'); ?>1800 825 805</a></li>
								<li class="my-2"><a class="social-link color--white ts-6" target="_blank" href="mailto:apply@myborrowing.com.au"><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/solid/envelope.svg'); ?>apply@myborrowing.com.au</a></li>
							</ul>
						</div>

					</div>

					<div class="d-flex flex-column flex-lg-row justify-content-between">

						<div class="d-flex flex-column flex-lg-row justify-content-between my-auto text-center text-lg-left">

							<a class="color--white mx-2 ts-6 my-auto py-2" href="<?php echo get_site_url(); ?>/how-it-works/">How it Works</a>
							<a class="color--white mx-2 ts-6 my-auto py-2" href="<?php echo get_site_url(); ?>/loan-costs/">Loan Costs</a>
							<a class="color--white mx-2 ts-6 my-auto py-2" href="<?php echo get_site_url(); ?>/faq/">FAQs</a>
							<a class="color--white mx-2 ts-6 my-auto py-2" href="<?php echo get_site_url(); ?>/contact-us/">Contact Us</a>
							<a class="color--white mx-2 ts-6 my-auto py-2" href="<?php echo get_site_url(); ?>/disclosure/">Disclosure</a>
							<a class="color--white btn-link__warning-alt mx-auto ts-6 my-2" href="apply.myborrowing.com.au/mb/apply">Apply Now</a>
							<a class="color--white mx-2 ts-6 my-auto social-link d-none d-lg-block" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/facebook.svg'); ?></a>
							<a class="color--white mx-2 ts-6 my-auto social-link d-none d-lg-block" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/instagram.svg'); ?></a>


						</div>

						<div class="my-auto text-center text-lg-left">
							<a class="btn-link__warning px-2" data-toggle="modal" data-target="#borrowingWarningModal"><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/solid/exclamation-triangle.svg'); ?>WARNING ABOUT BORROWING</a>
						</div>

					</div>

					<p class="ts-6 color--dark-grey">
						Disclaimer: Mifin Pty Ltd 2019 (ABN 14 132 429 595) is a Licensed Financial Broker which is an accredited representative of Marketplace Finance (ACL No. 389029). We are a referral service only and do not directly fund any credit product. Your request will be referred to a third party lender who will contact you directly to ascertain if they can facilitate your requirements. The third party will appraise you of their fees,charges and terms before you would enter any contract with them. We may receive a referral fee (amount not ascertainable) from the third party depending on the outcome of their dealings with you. It is recommended that you obtain independent legal and financial advice before taking up any products that you may be referred to and offered.
						</p>
					
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
