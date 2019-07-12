<?php
/**
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- Section - Contact Form -->
<section class="background--black py-0 mb-5">
  <div class="outer-container background--white">
    <div class="container">

      <div class="row">
        <div class="col-12">
          <h2 class="bold style--yellow-bar">Contact Us</h2>
          <p class="color--secondary">Transparency is at the heart of MyBorrowing’s business and we don’t believe in silly questions.</p>
        </div>
      </div>
      
      <div class="row mt-4">

        <div class="col-12 col-lg-6">
          <?php echo do_shortcode('[contact-form-7 id="19" title="General Contact Form"]'); ?>
        </div>

        <div class="col-12 col-lg-5 offset-lg-1 p-lg-5">
          <div class="box-shadow p-5">
            <div class="row">

              <div class="col-12 d-flex">
                <div class="d-inline my-auto ">
                  <?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-yellow-phone-2.svg"); ?>
                </div>
                <div class="d-inline my-auto p-3">
                  <p class="bold mb-1">Call Us</p>
                  <p class="ts-6 light mb-0">1200 762 731</p>
                </div>
              </div>

              <div class="col-12 d-flex">
                <div class="d-inline my-auto ">
                  <?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-yellow-mail.svg"); ?>
                </div>
                <div class="d-inline my-auto p-3">
                  <p class="bold mb-1">Email Us</p>
                  <p class="ts-6 light mb-0">info@cashsmart.net</p>
                </div>
              </div>

              <div class="col-12 d-flex">
                <div class="d-inline my-auto">
                  <?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-yellow-fax.svg"); ?>
                </div>
                <div class="d-inline my-auto p-3">
                  <p class="bold mb-1">Fax Us</p>
                  <p class="ts-6 light mb-0">07 3818 0644</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
      
    </div>
  </div>
</section>

<!-- Section - CTA Yellow -->
<?php include_once 'inc/components/section-cta-yellow.php'; ?>

<?php get_footer(); ?>