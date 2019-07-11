<?php
/**
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php include_once 'inc/components/objectaccordion.php'; ?>

<?php
  $faqArrayLeft = array();

	//Faq item
	$faqTitle = 'What does My Borrowing do?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayLeft, $faqObject);

  //Faq item
	$faqTitle = 'How much can I borrow?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayLeft, $faqObject);

  //Faq item
	$faqTitle = 'How do I receive my loan?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayLeft, $faqObject);

  //Faq item
	$faqTitle = 'How much does it cost?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayLeft, $faqObject);

  //Faq item
	$faqTitle = 'How do I pay my loan back?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayLeft, $faqObject);

  //Faq item
	$faqTitle = 'How do I contact MyBorrowing?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayLeft, $faqObject);
  
  ?>


<?php
  $faqArrayRight = array();

	//Faq item
	$faqTitle = 'How quickly can I get approved?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayRight, $faqObject);

  //Faq item
	$faqTitle = 'My pay day or my bank details have been changed';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayRight, $faqObject);

  //Faq item
	$faqTitle = 'What if I think I might have difficulty making a payment?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayRight, $faqObject);

  //Faq item
	$faqTitle = 'What happens if I do not repay on time?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayRight, $faqObject);

  //Faq item
	$faqTitle = 'Can I email through my bank statement?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayRight, $faqObject);

  //Faq item
	$faqTitle = 'What if my loan is not approved?';
	$faqCategory = '';
	$faqBody = '<p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>';
	$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
  array_push($faqArrayRight, $faqObject);
  
  ?>

<!-- Section - FAQ -->
<section class="background--black py-0 mb-5">
  <div class="outer-container background--light-grey">
    <div class="container">

      <div class="row">
        <div class="col-12">
          <h2 class="bold style--yellow-bar">Frequently Asked Questions</h2>
          <p class="color--secondary">Here are some answers to common queries raised with us.</p>
        </div>
      </div>
      
      <div class="row accordion mt-lg-5">

        <div class="col-12 col-lg-6">

          <div class=" row">
          
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-0" aria-expanded="false" class="px-4 accordion-header collapsed" data-target="#faq-default-0" data-toggle="collapse" id="faq-default-0-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-0" aria-expanded="false" class="panel-title light collapsed" data-target="#faq-default-0" href="#faq-default-0" data-toggle="collapse">
						What does My Borrowing do?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-0-heading" class="collapse" data-parent=".accordion" id="faq-default-0" style="">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-1" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-1" data-toggle="collapse" id="faq-default-1-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-1" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-1" href="#faq-default-1" data-toggle="collapse">
						How much can I borrow?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-1-heading" class="collapse" data-parent=".accordion" id="faq-default-1">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-2" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-2" data-toggle="collapse" id="faq-default-2-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-2" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-2" href="#faq-default-2" data-toggle="collapse">
						How do I receive my loan?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-2-heading" class="collapse" data-parent=".accordion" id="faq-default-2">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-3" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-3" data-toggle="collapse" id="faq-default-3-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-3" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-3" href="#faq-default-3" data-toggle="collapse">
						How much does it cost?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-3-heading" class="collapse" data-parent=".accordion" id="faq-default-3">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-4" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-4" data-toggle="collapse" id="faq-default-4-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-4" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-4" href="#faq-default-4" data-toggle="collapse">
						How do I pay my loan back?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-4-heading" class="collapse" data-parent=".accordion" id="faq-default-4">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-5" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-5" data-toggle="collapse" id="faq-default-5-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-5" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-5" href="#faq-default-5" data-toggle="collapse">
						How do I contact MyBorrowing?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-5-heading" class="collapse" data-parent=".accordion" id="faq-default-5">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			          </div>

        </div>

        <div class="col-12 col-lg-6">

          <div class=" row">
          
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-7" aria-expanded="false" class="px-4 accordion-header collapsed" data-target="#faq-default-7" data-toggle="collapse" id="faq-default-7-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-7" aria-expanded="false" class="panel-title light collapsed" data-target="#faq-default-7" href="#faq-default-7" data-toggle="collapse">
						How quickly can I get approved?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-7-heading" class="collapse" data-parent=".accordion" id="faq-default-7" style="">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-8" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-8" data-toggle="collapse" id="faq-default-8-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-8" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-8" href="#faq-default-8" data-toggle="collapse">
						My pay day or my bank details have been changed
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-8-heading" class="collapse" data-parent=".accordion" id="faq-default-8">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-9" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-9" data-toggle="collapse" id="faq-default-9-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-9" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-9" href="#faq-default-9" data-toggle="collapse">
						What if I think I might have difficulty making a payment?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-9-heading" class="collapse" data-parent=".accordion" id="faq-default-9">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-12" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-12" data-toggle="collapse" id="faq-default-12-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-10" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-12" href="#faq-default-12" data-toggle="collapse">
						What happens if I do not repay on time?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-12-heading" class="collapse" data-parent=".accordion" id="faq-default-12">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-10" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-10" data-toggle="collapse" id="faq-default-10-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-10" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-10" href="#faq-default-10" data-toggle="collapse">
						Can I email through my bank statement?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-10-heading" class="collapse" data-parent=".accordion" id="faq-default-10">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
					</div>
				</div>	
			</div>				
			
			<div class="col-12 p-0 accordion-item filterDiv ">
        <div aria-controls="faq-default-11" aria-expanded="false" class=" collapsed px-4 accordion-header" data-target="#faq-default-11" data-toggle="collapse" id="faq-default-11-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-11" aria-expanded="" class="collapsed panel-title light" data-target="#faq-default-11" href="#faq-default-11" data-toggle="collapse">
						What if my loan is not approved?
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-default-11-heading" class="collapse" data-parent=".accordion" id="faq-default-11">
					<div class="card-body text-left pt-0">
					  <p class="accordion-content mb-0 ">With MyBorrowing you can apply for short-term loans between $500 and $2,000 or secured personal loans between $2,100 and $4,600, depending on your eligibility. Loan terms can be anywhere between 6 to 18 months, depending on the type of loan and the lender’s specifications.</p>
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
<?php include_once 'inc/components/section-cta-grey.php'; ?>

<?php get_footer(); ?>