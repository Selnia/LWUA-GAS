@extends('layouts.default')

@section('title', 'Purchase Requisition')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/data-tables/css/jquery.dataTables.min.css') }}" media="screen,projection">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/css/sweetalert.css') }}" media="screen,projection">
@endsection

@section('content-title', 'Purchase Requisition')

@section('breadcrumbs')
<li class="grey-text">MSI</li>
<li><a href="#!">Purchase Requisition</a></li>
@endsection


@section('content')
<a href="#modal-add" class="waves-effect waves-light mb-3 right btn modal-trigger">Add Item</a>
<div id="modal-add" class="modal">
	<div class="modal-content">
		<form id="form-purchase-requisition" class="col s12">
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Purchase Requisition</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div id="tab1" class="col s12 grey lighten-5 active">
					<div class="input-field col s12 m7">
						
						<input id="pr_number" type="text" class="validate" name="pr_number" value="{{ 'PR' . date('ymis') }}" disabled>
						<input id="pr_number" type="text" class="validate" name="pr_number" value="{{ 'PR' . date('ymis') }}" hidden>
						<label for="pr_number">PR No</label>
						
					</div>
					<div class="input-field col s12 m6">
						<input id="to" type="text" class="validate" name="to" required>
						<label for="to" data-error="Insufficient">To</label> 
					</div>
					<div class="input-field col s12 m6">
						<select name="charge_to">
							<option value="admin" selected>Admin</option>
							<option value="financial">Finance</option>
							<option value="commercial">Commercial</option>
							<option value="technical">Technical</option>
						</select>
						<label for="charge_to">Charge to</label>
					</div>
					<div class="col s7">
						<p>
							<input name="options" type="radio" id="included_app" value="1"/>
							<label for="included_app">Included in Appproved Procurement Program (APP)</label>
						</p>
					</div>
					<div class="col s5">
						<p>
							<input name="options" type="radio" id="not_included_app" value="2"/>
							<label for="not_included_app">Not Included in the APP</label>
						</p>
					</div>
					<div class="col s7">
						<p style="margin-left: 2px">
							<input name="needs_budget" type="checkbox" id="needs_budget" value="1"/>
							<label for="needs_budget">Needs Budget Realignment</label>
						</p>
					</div>
					<div class="col s5">
						<p style="margin-left: 2px">
							<input name="needs_item" type="checkbox" id="needs_item" value="1"/>
							<label for="needs_item">Needs Item Reprogramming</label>
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="tab2" class="col s12 grey lighten-5 active">
					<div class="input-field col s12">
						<textarea id="justification" class="materialize-textarea" name="justification"></textarea>
						<label for="justification">Justification</label>
					</div>	
					<div class="input-field col s6">
						<select name="end_user">
							<option value="admin">Admin</option>
							<option value="financial">Finance</option>
							<option value="commercial">Commercial</option>
							<option value="technical">Technical</option>
						</select>
						<label for="end_user">End User/s</label>
					</div>
					<div class="input-field col s6">
						<input id="order_no" type="text" class="validate uppercase" name="order_no" required>
						<label for="order_no" data-error="Insufficient">Job/Work Order No</label> 
					</div>	
					<div class="col s12">
						<label>For Non-Stock</label>
					</div>
					<div class="col s12 m6">
						<p style="margin-left: 2px">
							<input name="to_be_carried" type="checkbox" id="to_be_carried" value="1"/>
							<label for="to_be_carried">To be carried in the stock</label>
						</p>
					</div>
					<div class="col s12 m6">
						<p style="margin-left: 2px">
							<input name="on_case_to" type="checkbox" id="on_case_to" value="1"/>
							<label for="on_case_to">On case to case basis</label>
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="tab3" class="col s12 grey lighten-5">
					<div class="row">
						<h6>BUDGET STATUS</h6>
					</div>
					<div class="row">
						<div class="input-field col s12 m4">
							<input id="control_no" type="text" class="validate" name="control_no" required>
							<label for="control_no" data-error="Insufficient">Control No.</label>
						</div>
					</div>
					<div class="row">
						<div class="col s2">
							<p>
								<label>Budget</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="budget_quarter" type="text" class="validate" name="budget_quarter" required>
							<label for="budget_quarter" data-error="Insufficient">For the quarter</label> 
						</div>
						<div class="input-field col s12 m6">
							<input id="budget_year" type="text" class="validate" name="budget_year" required>
							<label for="budget_year" data-error="Insufficient">For the year</label> 
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<p>
								<label>Amount Utilized</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="amount_quarter" type="text" class="validate" name="amount_quarter" required>
							<label for="amount_quarter" data-error="Insufficient">For the quarter</label> 
						</div>
						<div class="input-field col s12 m6">
							<input id="amount_year" type="text" class="validate" name="amount_year" required>
							<label for="amount_year" data-error="Insufficient">For the year</label> 
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<p>
								<label>Balance-to-Date</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="btd_quarter" type="text" class="validate" name="btd_quarter" required>
							<label for="btd_quarter" data-error="Insufficient">For the quarter</label> 
						</div>
						<div class="input-field col s12 m6">
							<input id="btd_year" type="text" class="validate" name="btd_year" required>
							<label for="btd_year" data-error="Insufficient">For the year</label> 
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<p>
								<label>Amount of the Request</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="amntreq_quarter" type="text" class="validate" name="amntreq_quarter" required>
							<label for="amntreq_quarter" data-error="Insufficient">For the quarter</label> 
						</div>
						<div class="input-field col s12 m6">
							<input id="amntreq_year" type="text" class="validate" name="amntreq_year" required>
							<label for="amntreq_year" data-error="Insufficient">For the year</label> 
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<p>
								<label>Balance after this Request</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="balreq_quarter" type="text" class="validate" name="balreq_quarter" required>
							<label for="balreq_quarter" data-error="Insufficient">For the quarter</label> 
						</div>
						<div class="input-field col s12 m6">
							<input id="balreq_year" type="text" class="validate" name="balreq_year" required>
							<label for="balreq_year" data-error="Insufficient">For the year</label> 
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="tab4" class="col s12 grey lighten-5">
					<div class="col s12">
						<p>
							<label>1. Requisitioned By:</label>
						</p>
					</div>
					<div class="input-field col s6">
						<input id="requisitioned_name" type="text" class="validate" name="requisitioned_name" required>
						<label for="requisitioned_name" data-error="Insufficient">Name</label> 
					</div>
					<div class="input-field col s6">
						<input id="requisitioned_position" type="text" class="validate" name="requisitioned_position" required>
						<label for="requisitioned_position" data-error="Insufficient">Position Title</label> 
					</div>
					<div class="col s12">
						<p>
							<label>2. Certified Included in the Program of Activity Recommending, Approval:</label>
						</p>
					</div>
					<div class="input-field col s12">
						<input id="supervisor" type="text" class="validate" name="supervisor" required>
						<label for="supervisor" data-error="Insufficient">Supervisor/Division Manager</label> 
					</div>
					<div class="col s6">
						<p>
							<label>3. Certified Funds Available Recommending Approval:</label>
						</p>
					</div>
					
					<div class="col s6">
						<p>
							<label>4. Approved / Disapproved: </label>
						</p>
					</div>
					<div class="input-field col s6">
						<input id="finance" type="text" class="validate" name="finance" required>
						<label for="finance" data-error="Insufficient">Finance/Accounting Department Manager</label> 
					</div>
					<div class="input-field col s6">
						<input id="approved_general_manager" type="text" class="validate" name="approved_general_manager" required>
						<label for="approved_general_manager" data-error="Insufficient">General Manager</label> 
					</div>
				</div>
			</div>
			<div class="row">
				<ul id="tabs-swipe-demo" >
				    <li id="prevtab" class="col s6"><a href="#tab1" class="btn cyan waves-effect waves-light left">Previous<i class="material-icons left">arrow_back</i></a></li>
				    <li id="nexttab" class="col s6"><a class="btn cyan waves-effect waves-light right" href="#tab2">Next<i class="material-icons right">arrow_forward</i></a></li>
				    <li id="submit" class="col s6" hidden>
						<button class="btn cyan waves-effect waves-light right" type="submit">Submit<i class="material-icons right">send</i>
						</button>
				    </li>
				    <li class="tab"><a href="#tab1"></a></li>
				    <li class="tab"><a href="#tab2"></a></li>
				    <li class="tab"><a href="#tab3"></a></li>
				    <li class="tab"><a href="#tab4"></a></li>
				  </ul>
			</div>
		</form>
	</div>
</div>


<div id="modal-addcontent" class="modal">
	<div class="modal-content">
		<form id="form-purchase-requisition-content" class="col s12">
			<input type="hidden" id="pr-id" name="pr_id" />
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Purchase Requisition Content for <span id="item-name"></span></h5>
			</div>
			<div class="divider"></div>

			<div class="row">
				<div id="tabcontent1" class="col s12 grey lighten-5 active">
					<div class="input-field col s12 m6">
						<input id="stock_no" type="text" class="validate uppercase" name="stock_no" required>
						<label for="stock_no" data-error="Insufficient">STOCK NO.</label> 
					</div>
					<div class="input-field col s12 m6">
						<input id="available_stock" type="text" class="validate" name="available_stock" required>
						<label for="available_stock" data-error="Insufficient">Available Stock</label> 
					</div>
					<div class="input-field col s12 m6">
						<select name="reorder_point">
							<option value="½ month">½ month</option>
							<option value="1 month" selected>1 month</option>
							<option value="1½ months">1½ months</option>
							<option value="2 months">2 months</option>
						</select>
						<label>Reorder Point</label>
					</div>
					<div class="input-field col s12 m6">
						<select name="reorder_quantity">
							<option value="Monthly" selected>Monthly</option>
							<option value="Quarterly">Quarterly</option>
							<option value="Semi-Annually">Semiannually</option>
							<option value="Annually">Annually</option>
						</select>
						<label>Reorder Quantity</label>
					</div>
					<div class="input-field col s12">
						<textarea id="particulars" class="materialize-textarea" name="particulars" required></textarea>
						<label for="particulars">Particulars</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="quantity" type="text" class="validate" name="quantity" required>
						<label for="quantity" data-error="Insufficient">Quantity</label> 
					</div>
					<div class="input-field col s12 m6">
						<input id="unit_cost" type="text" class="validate" name="unit_cost" required>
						<label for="unit_cost" data-error="Insufficient">Unit Cost</label> 
					</div>
				</div>
			</div>
			<div class="row">
				<h6>PROPERTY CONTROL</h6>
			</div>
			<div class="row">
				<div class="col s12">
					<p>
						<label>A. Similar Item/ s Already </label>
					</p>
				</div>
				<div class="col s12 m5">
					<p class="center">
						<label>Issued to Requisitioner/ s</label>
					</p>
				</div>
				<div class="col s12 m7">
					<p class="center">
						<label>(For Semi-Expandable & Fixed Assets)</label>
					</p>
				</div>
				<div class="input-field col s12 m3">
					<input id="a_item_no" type="text" class="validate" name="a_item_no" required>
					<label for="a_item_no" data-error="Insufficient">Item No.</label> 
				</div>
				<div class="input-field col s12 m3">
					<input id="a_quantity" type="text" class="validate" name="a_quantity" required>
					<label for="a_quantity" data-error="Insufficient">Quantity</label> 
				</div>
				<div class="input-field col s12 m6">
					<input id="a_classification" type="text" class="validate" name="a_classification" required>
					<label for="a_classification" data-error="Insufficient">Item Classification</label>
				</div>
				<div class="col s12">
					<p>
						<label>B. Supplies (Stock Status)</label>
					</p>
				</div>
				<div class="input-field col s12 m3">
					<input id="b_item_no" type="text" class="validate" name="b_item_no" required>
					<label for="b_item_no" data-error="Insufficient">Item No.</label> 
				</div>
				<div class="input-field col s12 m3">
					<input id="b_quantity" type="text" class="validate" name="b_quantity" required>
					<label for="b_quantity" data-error="Insufficient">Quantity</label> 
				</div>
				<div class="input-field col s12 m6">
					<input id="b_classification" type="text" class="validate" name="b_classification" required>
					<label for="b_classification" data-error="Insufficient">Item Classification</label>
				</div>
			</div>

			<div class="row">
				<button class="btn cyan waves-effect waves-light right" type="submit">Submit<i class="material-icons right">send</i>
				</button>
			</div>
		</form>
	</div>
</div>

<div id="table-datatables">
	<table id="data-table-simple" class="responsive-table display" cellspacing="0">
		<thead>
			<tr>
				<th>PR No</th>
				<th>To</th>
				<th>Charge to</th>
				<th>Justification</th>
				<th>End User/s</th>
				<th>Order No</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($items as $item)
			<tr>
				<td><span id="item{{ $item->id }}">{{ $item->pr_no }}</span></td>
				<td>{{ $item->to }}</td>
				<td>{{ $item->charge_to }}</td>
				<td>{{ $item->justification }}</td>
				<td>{{ $item->end_user }}</td>
				<td>{{ $item->job_work_order_no }}</td>
				<td>
					<a href="{{ url('msi/viewpurchase_requisition/'.$item->id) }}" target="{{ $item->pr_no }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>
					<a href="#modal-addcontent" id="{{ $item->id }}" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('vendor/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/data-tables/js/data-tables-script.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/sweetalert/js/sweetalert.min.js') }}"></script>
<script>
	$(document).ready(function(){

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		var tab = 1;
		$('#prevtab a').on('click', function() {
		    if(tab!=1) {
		     	$(this).attr('href', '#tab'+(tab-1));
		     	tab--;
		     	if (tab!=4) {
		     		$('#nexttab').show();
		     		$('#submit').hide();
		     	}
		     }
		});

		$('#nexttab a').on('click', function() {
		     if(tab!=4) {
		     	$(this).attr('href', '#tab'+(tab+1));
		     	tab++;
		     	if (tab==4)
		     	{
		     		$('#nexttab').hide();
		     		$('#submit').show();
		     	}
		     }
		});

		var tabcontent = 1;
		$('#prevtabcontent a').on('click', function() {
		    if(tabcontent!=1) {
		     	$(this).attr('href', '#tabcontent'+(tabcontent-1));
		     	tabcontent--;
		     	if (tabcontent!=1) {
		     		$('#nexttabcontent').show();
		     		$('#submitcontent').hide();
		     	}
		     }
		});

		$('#nexttabcontent a').on('click', function() {
		     if(tabcontent!=4) {
		     	$(this).attr('href', '#tabcontent'+(tabcontent+1));
		     	tabcontent++;
		     	if (tabcontent==4)
		     	{
		     		$('#nexttabcontent').hide();
		     		$('#submitcontent').show();
		     	}
		     }
		});

		$(document).on('submit', '#form-purchase-requisition', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();

			swal({   
				title: "Want to save this?",   
				text: "<table class='sweet-alert-table'><thead><tr><th width='35%'></th><th></th></tr></thead><tbody><tr><td>PR No:</td><td class='uppercase' colspan=3><b>"+$('input[name=pr_number]').val()+"</b></td></tr><tr><td>To: </td><td><b>"+$('input[name=to]').val()+"</b></td><td>Charge To: </td><td><b>"+$('select[name=charge_to]').val()+"</b></td></tr><tr><td>Justification: </td><td colspan=3><b>"+$('textarea[name=justification]').val()+"</b></td></tr><tr><td>End User: </td><td><b>"+$('select[name=end_user]').val()+"</b></td><td>Order No: </td><td><b>"+$('input[name=order_no]').val()+"</b></td></tr><tr><td colspan=4><label class='bold'>1. Requisitioned By:</label></td></tr><tr><td>Name:</td><td><b>"+$('input[name=requisitioned_name]').val()+"</b></td><td>Position: </td><td><b>"+$('input[name=requisitioned_position]').val()+"</b></td></tr><tr><td colspan=4><label class='bold'>2. Certified Included in the Program of Activity Recommending, Approval:</label></td></tr><tr><td colspan=2>Supervisor/ DIVISION MGR:</td><td colspan=2><b>"+$('input[name=supervisor]').val()+"</b></td></tr><tr><td colspan=4><label class='bold'>3. Certified Funds Available Recommending Approval:</label></td></tr><tr><td colspan=2>FINANCE/ Acctg Mgr.:</td><td><b>"+$('input[name=finance]').val()+"</b></td></tr><tr><td colspan=4><label class='bold'>4. Approved / Disapproved:</label></td><tr><tr><td colspan=2>General Manager:</td><td><b>"+$('input[name=approved_general_manager]').val()+"</b></td></tr></tbody></table>",   
				type: "warning",
				html: true,   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Yes",   
				cancelButtonText: "No",   
				closeOnConfirm: false,   
				closeOnCancel: false,
				showLoaderOnConfirm: true 
			}, 
			function(isConfirm){   
				if (isConfirm) {
					$.ajax({
						url: '{{ url('msi/addpurchase_requisition') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#data-table-simple').DataTable().row.add([
								data.purchase_requisition.pr_no,
								data.purchase_requisition.to,
								data.purchase_requisition.charge_to,
								data.purchase_requisition.justification,
								data.purchase_requisition.end_user,
								data.purchase_requisition.job_work_order_no,
								'<a href="/msi/viewpurchase_requisition/'+data.purchase_requisition.id+'" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>'
								+ '<a href="#modal-addcontent" id="'+data.purchase_requisition.id+'" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>'
								]).columns.adjust().draw();
							$('#modal-add').modal('close');
							$('.tooltipped').tooltip({delay: 50});
							$('#form-purchase-requisition').trigger('reset');
							Materialize.updateTextFields();
							swal("Success!", "The data has been saved.", "success");
						},
						error: function(data){
							console.log(data);
						}
					});        
				} 
				else {
					swal("Cancelled!", "", "error");   
				} 
			});
		});

		$(document).on('click', '.modal-addcontent', function(e){
			var id = this.id;
			$('#item-name').text($('#item'+id).text());
			$('#pr-id').val(id);
			$('#stock_no').val('').blur().removeClass('invalid');	
			$('#reorder_quantity').val('').blur().removeClass('invalid');	
			$('#particulars').val('').blur().removeClass('invalid');	
			$('#quantity').val('').blur().removeClass('invalid');	
			$('#unit_cost').val('').blur().removeClass('invalid');	
			$('#estimated_cost').val('').blur().removeClass('invalid');	
			Materialize.updateTextFields();
		});

		$(document).on('submit', '#form-purchase-requisition-content', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			swal({   
				title: "Want to save this?",
				text: "<div class='row'><div class='col s12 white lighten-5'><table class='sweet-alert-table'><thead><tr><th width='30%'></th></tr></thead><tbody><tr><td>Item No:</td><td class='uppercase'><b>"+$('input[name=pr_id]').val()+"</b></td><td>Stock No: </td><td><b>"+$('input[name=stock_no]').val()+"</b></td></tr><tr><td>Available Stock: </td><td><b>"+$('input[name=available_stock]').val()+"</b></td><td>Reorder Point: </td><td><b>"+$('select[name=reorder_point]').val()+"</b></td></tr><tr><td>Reorder Qty: </td><td><b>"+$('select[name=reorder_quantity]').val()+"</b></td><td>Particulars: </td><td><b>"+$('textarea[name=particulars]').val()+"</b></td></tr><tr><td>Quantity: </td><td><b>"+$('input[name=quantity]').val()+"</b></td><td>Unit Cost: </td><td><b>"+$('input[name=unit_cost]').val()+"</b></td></tr><tr><td>Estimated Cost: </td><td><b>"+$('input[name=estimated_cost]').val()+"</b></td></tr></tbody></table>", 
				type: "warning",
				html: true,
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Yes",   
				cancelButtonText: "No",   
				closeOnConfirm: false,   
				closeOnCancel: false,
				showLoaderOnConfirm: true 
			},
			function(isConfirm){   
				if (isConfirm) {
					$.ajax({
						url: '{{ url('msi/addpurchase_requisitioncontent') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#modal-addcontent').modal('close');
							if(data.validation == 'empty') {
								swal("Empty!", "This bincard is empty!", "warning");
							}
							else if(data.validation == 'insufficient') {
								swal("Insufficient!", "Available stocks for this item are insufficient.", "warning");
							}
							else {
								swal({
									title: "Success!",
									text: "The data has been saved.",
									type: "success"
								}, 
								function() {
									window.open("/msi/viewpurchase_requisition/"+$('#pr-id').val(), $('#item-name').text());
								});
							}
							$('#form-purchase-requisition-content').trigger('reset');
							Materialize.updateTextFields();	
						},   
						error: function(data){
							console.log(data);
						}
					});
				} 
				else {
					swal("Cancelled!", "", "error");   
				} 
			});
		}); 
	});
</script>

@endsection