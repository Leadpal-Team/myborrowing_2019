<section class="background--yellow-right py-0 mt-5 d-none d-lg-block">
    <div class="container pt-5">

      <div class="row">

        <div class="col-12 col-lg-6 pr-lg-4">
          <h2 class="bold style--yellow-bar mb-4">Frequently Asked Questions</h2>

          <div class="w-100 side-accordion py-4 border-bottom" onclick="sideAccordionSwitch(this)" data-target="0">
            <h4 class="mb-0">What does My Borrowing do?</h4>
          </div>

          <div class="w-100 side-accordion py-4 border-bottom active" onclick="sideAccordionSwitch(this)" data-target="1">
            <h4 class="mb-0">How much can I borrow?</h4>
          </div>

          <div class="w-100 side-accordion py-4 border-bottom" onclick="sideAccordionSwitch(this)" data-target="2">
            <h4 class="mb-0">How do I receive my loan?</h4>
          </div>

          <div class="w-100 side-accordion py-4 border-bottom" onclick="sideAccordionSwitch(this)" data-target="3">
            <h4 class="mb-0">How much does it cost?</h4>
          </div>

          <div class="w-100 side-accordion py-4 border-bottom" onclick="sideAccordionSwitch(this)" data-target="4">
            <h4 class="mb-0">How do I pay my loan back?</h4>
          </div>

          <div class="w-100 side-accordion py-4 border-bottom" onclick="sideAccordionSwitch(this)" data-target="5">
            <h4 class="mb-0">How do I contact MyBorrowing?</h4>
          </div>

          <a class="color--white btn-link__color-black mt-4" href="<?php echo get_site_url(); ?>/FAQ/">All FAQs</a>

        </div>


        <div class="col-12 col-lg-6 pl-lg-4">

          <div class="side-accordion-content d-none">
            <h3 class="extra-bold">What does My Borrowing do?</h3>
            <p>Essentially, we do the searching so you don’t have to! When you apply with MyBorrowing we will find the best loan option to meet your needs. Once we’ve found it, we’ll put you directly in touch with the lender who can offer you the loan you’re looking for.</p>
          </div>

          <div class="side-accordion-content">
            <h3 class="extra-bold">How much can I borrow?</h3>
            <p>With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility.</p>
            <p>Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
          </div>

          <div class="side-accordion-content d-none">
            <h3 class="extra-bold">How do I receive my loan?</h3>
            <p>Once MyBorrowing has reviewed your application we will match you to a suitable lender. Then, you will have to wait for final approval of your application. If successful, the money will be transferred straight into your bank account subject to the lenders protocol.</p>
          </div>

          <div class="side-accordion-content d-none">
            <h3 class="extra-bold">How much does it cost?</h3>
            <p>The cost of your loan depends on the lender. We encourage all our lenders to be upfront with all fees and charges associated with their loans. Unless your lender says otherwise, you can expect to pay something similar to this:</p>
					<p>$500 up to $2,000 Short term Loans</p>
					<ul>
						<li>20% of principal amount (establishment fee)</li>
						<li>4% of principal amount per month.</li>
						<li>There is NO Interest charged on our loans between $500 and up to $2000</li>
						<li>The easiest way to see how much your loan would cost is to go to our Loan Costs page.</li>
					</ul>
					<p>$2,001 up to $4,600 Personal Loans</p>
					<ul>
						<li>$400 Establishment Fee</li>
						<li>Interest at 47.5% per annum charged on a reducing balance basis.</li>
						<li>APR is 47.5%, Comparisson rate is 65.88%</li>
						<li>The easiest way to see how much your loan would cost is to go to our Loan Costs page.</li>
					</ul>
          </div>

          <div class="side-accordion-content d-none">
            <h3 class="extra-bold">How do I pay my loan back?</h3>
            <p>It’s important you make your repayments on time so you do not incur any extra charges from your lender. Forgetting to repay your loan could lead to defaults being added to your credit score, making it hard to apply for funding in future. When you loan is approved, speak with your lender about setting up a scheduled payment to ensure you meet repayments.</p>
          </div>

          <div class="side-accordion-content d-none">
            <h3 class="extra-bold">How much can I borrow?</h3>
            <p>Our friendly team is here to help! If you have any questions, feel free to call us on 1300 762 731 or email us directly at <a href="info@cashsmart.net">info@cashsmart.net</a>.</p>
          </div>

        </div>

      </div>
      
    </div>
</section>

<?php
  $faqArray = array();

	//Faq item
	$faqTitle = 'What does My Borrowing do?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">Essentially, we do the searching so you don’t have to! When you apply with MyBorrowing we will find the best loan option to meet your needs. Once we’ve found it, we’ll put you directly in touch with the lender who can offer you the loan you’re looking for.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArray, $faqObject);
  
  //Faq item
	$faqTitle = 'How much can I borrow?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility.Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArray, $faqObject);
  
  //Faq item
	$faqTitle = 'How do I receive my loan?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">Once MyBorrowing has reviewed your application we will match you to a suitable lender. Then, you will have to wait for final approval of your application. If successful, the money will be transferred straight into your bank account subject to the lenders protocol.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArray, $faqObject);
  
  //Faq item
	$faqTitle = 'How much does it cost?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">The cost of your loan depends on the lender. We encourage all our lenders to be upfront with all fees and charges associated with their loans. Unless your lender says otherwise, you can expect to pay something similar to this:</p>
  <p>$500 up to $2,000 Short term Loans</p>
  <ul>
    <li>20% of principal amount (establishment fee)</li>
    <li>4% of principal amount per month.</li>
    <li>There is NO Interest charged on our loans between $500 and up to $2000</li>
    <li>The easiest way to see how much your loan would cost is to go to our Loan Costs page.</li>
  </ul>
  <p>$2,001 up to $4,600 Personal Loans</p>
  <ul>
    <li>$400 Establishment Fee</li>
    <li>Interest at 47.5% per annum charged on a reducing balance basis.</li>
    <li>APR is 47.5%, Comparisson rate is 65.88%</li>
    <li>The easiest way to see how much your loan would cost is to go to our Loan Costs page.</li>
  </ul>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArray, $faqObject);
  
  //Faq item
	$faqTitle = 'How do I pay my loan back?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">It’s important you make your repayments on time so you do not incur any extra charges from your lender. Forgetting to repay your loan could lead to defaults being added to your credit score, making it hard to apply for funding in future. When you loan is approved, speak with your lender about setting up a scheduled payment to ensure you meet repayments.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArray, $faqObject);
  
  //Faq item
	$faqTitle = 'How do I contact MyBorrowing?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">Our friendly team is here to help! If you have any questions, feel free to call us on 1300 762 731 or email us directly at <a href="info@cashsmart.net">info@cashsmart.net</a>.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
	array_push($faqArray, $faqObject);
  
  ?>

<section class="d-block d-lg-none">
  <div class="">
    <div class="row accordion m-0">

      <div class="col-12">
        <h2 class="bold style--yellow-bar mb-4">Frequently Asked Questions</h2>
      </div>

      <?php generateAccordionCards($faqArray); ?>

      <div class="text-center col-12 mt-3">
        <a href="<?php echo get_site_url(); ?>/FAQ/" class="btn-link__white ">All FAQs</a>
      </div>

    </div>
  </div>
</section>