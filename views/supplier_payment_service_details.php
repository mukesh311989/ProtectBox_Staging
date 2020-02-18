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
        <h4 class="modal-title">Supplier Payment Status</h4>
      </div>
	 
      <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
				  
				  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th>Service&nbsp;Name</th>
							<th>Price</th>
							<th>Payment&nbsp;Status</th>
							<th>Refund&nbsp;Status</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								foreach($fetch_supplier_service_payment_info AS $each_supplier_service_payment_info){
							?>
							<tr>
								<td><?php echo $each_supplier_service_payment_info->product_detail;?></td>
								<td><?php echo $each_supplier_service_payment_info->currency?>&nbsp;<?php echo $each_supplier_service_payment_info->seller_amount;?></td>
								<td><?php
									$order_status = $each_supplier_service_payment_info->sup_order_status;
									if($order_status == 'smb_placed_order'){
										echo "SMB placed order";
									}else if($order_status == 'seller_informed'){
										echo "Seller informed";
									}else if($order_status == 'confirmed-by-seller'){
										echo "Seller confirmed";
									}else if($order_status == 'reject-by-seller'){
										echo "Seller rejected";
									}else if($order_status == 'admin_cancelled'){
										echo "Admin cancelled";
									}else if($order_status == 'seller_paid'){
										echo "Seller paid";
									}else if($order_status == 'order_delivered'){
										echo "Order Delivered";
									}
								?></td>
								<td><?php
									$pay_staus = $each_supplier_service_payment_info->pay_status;
									if($pay_staus == 'Pending' || $pay_staus == 'Confirm'){
										echo "N/A";
									}else if($pay_staus == 'Refund_requested'){
										echo "Refund requested";
									}else if($pay_staus == 'Refund_completed'){
										echo "Refund completed";
									}
								?></td>
							</tr>
							<?php
								}	
							?>
						</tbody>
					</table>
					</div>

				</div>
			</div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>