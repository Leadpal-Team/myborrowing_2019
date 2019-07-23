<form id="loan-calculator" class="app-form loan-calculator" autocomplete="on" oninput="formUpdate()" method="GET" action="<?php echo APPLICATION_URL ?>">

	<!-- Hidden -->
	<input type="hidden" name="source" value="<?php echo $_SESSION['source'] ?>" />
	<input id="loan-amount-unit" type="hidden" value="<?php echo LOAN_CURRENCY_UNIT ?>" />
	<input id="loan-term-unit" type="hidden" value="<?php echo LOAN_TERM_UNIT ?>" />

	<!-- Loan Amount -->
	<div class="row slider-section">

		<div class="col-12 mb-2">
			<div class="slider-tooltip text-left mb-3" id="loan-amount-bubble"><h3 class="d-inline">I need: </h3><h3 class="d-inline extra-bold" id="loan-amount-tooltip"> <?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_AMOUNT_DEFAULT_VALUE); ?></strong></h3></div>
			<input type="range" name="loan_amount" aria-label="Loan Amount" id="loan-amount" value="<?php echo LOAN_AMOUNT_DEFAULT_VALUE ?>" min="<?php echo SACC_LOAN_MIN; ?>" max="<?php echo LACC_LOAN_MAX; ?>" step="<?php echo LOAN_AMOUNT_STEP; ?>">
		</div>

		<div class="col-12 d-flex justify-content-between">
			<p class="d-inline color--dark-grey"><?php echo LOAN_CURRENCY_UNIT . number_format(SACC_LOAN_MIN); ?></p>
			<p class="d-inline color--dark-grey"><?php echo LOAN_CURRENCY_UNIT . number_format(LACC_LOAN_MAX); ?></p>
		</div>
	</div>

	<!-- Loan Duration -->
	<div class="row slider-section">

		<div class="col-12 mb-2">
			<div class="slider-tooltip text-left mb-3" id="loan-term-bubble">
				<h3 class="d-inline">For: </h3><h3 class="d-inline extra-bold" id="loan-term-tooltip"> <?php echo LOAN_TERM_DEFAULT_VALUE . LOAN_TERM_UNIT; ?></strong></h3>
			</div>
			<div class="hidden-pulser" id="hidden-thumb-term"><?php LOAN_TERM_DEFAULT_VALUE ?></div>
			<input type="range" aria-label="Loan Repayment Duration" id="loan-term" name="loan_term" required min="<?php echo LOAN_TERM_MIN; ?>" max="<?php echo LOAN_TERM_MAX; ?>" step="<?php echo LOAN_TERM_STEP; ?>" value="<?php echo LOAN_TERM_DEFAULT_VALUE; ?>" />
		</div>

		<div class="col-12 d-flex justify-content-between">
			<p class="d-inline color--dark-grey" id="loan-term-label-min"><?php echo number_format(LOAN_TERM_MIN) . ' ' . LOAN_TERM_UNIT; ?></p>
			<p class="d-inline color--dark-grey" id="loan-term-label-max"><?php echo number_format(LOAN_TERM_MAX) . ' ' . LOAN_TERM_UNIT; ?></p>
		</div>

	</div>

	<!-- Loan Repayments -->
	<div class="row py-3">
		<div class="col-12 mb-3">
			<h3 class="extra-bold d-inline slider-label ">Estimated repayment amounts:</h3>
		</div>
		<div class="col-12 d-flex flex-row justify-content-between">

			<div>
				<output id="weekly-repayment" class="bold text-center ts-3 repayments">$60.10</output>
				<p class="ts-6 text-center">Weekly</p>
			</div>
			
			<div>
				<output id="fortnightly-repayment" class="bold text-center ts-3 repayments">$120.30</output>
				<p class="ts-6 text-center">Fortnightly</p>
			</div>
			
			<div>
				<output id="monthly-repayment" class="bold text-center ts-3 repayments">$259.25</output>
				<p class="ts-6 text-center">Monthly</p>
			</div>
			
		</div>
	</div>

	<!-- Apply -->
	<div class="row pt-4">
		<div class="col-12 text-center">
			<button type="submit" id="slider-submit" class="btn-link__primary w-100 mb-3">Apply Now</button>
		</div>
	</div>

	<!-- Disclaimer -->
	<!-- <div class="row py-2">
		<div class="col-12">
			<small class="disclaimer" id="loan-disclaimer"></small>
		</div>
	</div> -->

</form>

