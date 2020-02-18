<!-- Modal -->
<div id="reload_div" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <!-- Modal content-->
    <div class="modal-content">
    	<!--<script type='text/javascript'>
			$('#reload_div').on('hidden.bs.modal', function (e) {           
				location.reload();
			})
		</script>-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $fetch_bank_details->firstname;?> <?php echo $fetch_bank_details->lastname;?> Bank Details</h4>
      </div>
      <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
				  <div class="form-group">
					<div class="c_names">Currency</div>
					<h5><?php echo ucfirst($fetch_bank_details->currency);?></h5>
				  </div>
				</div>
			</div>
			<?php
				if($fetch_bank_details->currency == 'EUR'){
			?>
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">IBAN</div>
						<h5><?php echo ucfirst($fetch_bank_details->iban_eur);?></h5>
					</div>
				</div>
			<?php
				}else if($fetch_bank_details->currency == 'GBP'){
			?>
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Sort Code</div>
						<h5><?php echo ucfirst($fetch_bank_details->sort_code_gbp);?></h5>
					</div>
					<div class="col-md-6 ">
						<div class="c_names">Account Number</div>
						<h5><?php echo ucfirst($fetch_bank_details->account_number_gbp);?></h5>
					</div>
				</div>
			<?php
				}else if($fetch_bank_details->currency == 'USD'){
			?>
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Account Type</div>
						<h5><?php echo ucfirst($fetch_bank_details->account_type_usd);?></h5>
					</div>
					<div class="col-md-6 ">
						<div class="c_names">Account Number</div>
						<h5><?php echo ucfirst($fetch_bank_details->account_number_usd);?></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Routing Number</div>
						<h5><?php echo ucfirst($fetch_bank_details->routing_number_usd);?></h5>
					</div>
				</div>
			<?php
				}
			?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>