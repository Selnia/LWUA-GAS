@extends('layouts.default')

@section('title', 'Materials Returned to Suppliers')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/data-tables/css/jquery.dataTables.min.css') }}" media="screen,projection">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/css/sweetalert.css') }}" media="screen,projection">
@endsection

@section('content-title', 'Materials Returned to Suppliers')

@section('breadcrumbs')
<li class="grey-text">MSI</li>
<li><a href="#!">Materials Returned to Suppliers</a></li>
@endsection

@section('content')
<a href="#modal-add" class="waves-effect waves-light mb-3 right btn modal-trigger">Add Item</a>
<div id="modal-add" class="modal modal-centered">
	<div class="modal-content">
		<form id="form-stockcard" class="col s12">
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Material Returned</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="supplier" type="text" class="validate" name="supplier">
					<label for="supplier">Supplier</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<input id="address" type="text" class="validate" name="address">
					<label for="address">Address</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="invoice_number" type="text" class="validate" name="invoice_number" required>
					<label for="invoice_number">Invoice Number</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="invoice_date" type="date" class="datepicker" name="invoice_date" required>
					<label for="invoice_date">Date</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="delivery_reciept_number" type="text" class="validate" name="delivery_reciept_number" required>
					<label for="delivery_reciept_number">Delivery Reciept Number</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="delivery_reciept_date" type="text" class="datepicker" name="delivery_reciept_date" required>
					<label for="delivery_reciept_date">Date</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6">
					<input id="po_number" type="text" class="validate" name="po_number" required>
					<label for="po_number">P.O. Number</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="po_date" type="text" class="datepicker" name="po_date" required>
					<label for="po_date">Date</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="storekeeper" type="text" class="validate" name="storekeeper">
					<label for="storekeeper">Storekeeper</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="plant_maint_officer" type="text" class="validate" name="plant_maint_officer">
					<label for="plant_maint_officer">Plant Maint. Officer</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="supplier_representative" type="text" class="validate" name="supplier_representative">
					<label for="supplier_representative">Supplier Reperesentative</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<textarea id="reason" class="materialize-textarea" name="reason"></textarea>
					<label for="reason">Reason</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="number" type="text" class="validate" name="number">
					<label for="number">Number</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<button class="btn cyan waves-effect waves-light right" type="submit">Submit<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div id="modal-addcontent" class="modal">
	<div class="modal-content">
		<form id="form-stockcard-content" class="col s12">
			<input type="hidden" id="mrs-id" name="mrs_id" />
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Materials Returned</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m3">
					<input id="quantity" type="text" class="validate" name="quantity">
					<label for="quantity">Quantity</label>
				</div>
				<div class="input-field col s12 m3">
					<select name="unit">
						<optgroup label="Individual/Group">
							<option value="booklets">booklets</option>
							<option value="boxes">boxes</option>
							<option value="bundles">bundles</option>
							<option value="pieces" selected>pieces</option>
							<option value="reams">reams</option>
							<option value="sacks">sacks</option>
						</optgroup>
						<optgroup label="Length">
							<option value="cubic feet">cubic feet</option>
							<option value="cubic meters">cubic meters</option>
							<option value="feet">feet</option>
							<option value="inches">inches</option>
							<option value="linear meters">linear meters</option>
							<option value="meters">meters</option>
							<option value="yards">yards</option>
						</optgroup>
						<optgroup label="Volume">
							<option value="bottles">bottles</option>
							<option value="carbouys">carbouys</option>
							<option value="drums">drums</option>
							<option value="gallons">gallons</option>
							<option value="liters">liters</option>
						</optgroup>
						<optgroup label="Weight">
							<option value="grams">grams</option>
							<option value="kilograms">kilograms</option>
						</optgroup>
					</select>
					<label>Unit</label> 
				</div>
				<div class="input-field col s12 m3">
					<input id="unit_price" type="text" class="validate" name="unit_price">
					<label for="unit_price">Unit Price</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<textarea id="description" class="materialize-textarea" name="description"></textarea>
					<label for="description">Description</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<button class="btn cyan waves-effect waves-light right" type="submit">Submit<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div id="table-datatables">
	<table id="data-table-simple" class="responsive-table display" cellspacing="0">
		<thead>
			<tr>
				<th>Supplier</th>
				<th>Address</th>
				<th>Invoice Number</th>
				<th>Delivery Reciept Number</th>
				<th>P.O. Number</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($materials as $material)
			<tr>
				<td>{{ $material->supplier }}</td>
				<td>{{ $material->address }}</td>
				<td>{{ $material->invoice_number }}</td>
				<td>{{ $material->delivery_reciept_number }}</td>
				<td>{{ $material->po_number }}</td>
				<td>
					<a href="{{ url('msi/viewmrs/'.$material->id) }}" target="{{ $material->supplier_representative }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>
					<a href="#modal-addcontent" id="{{ $material->id }}" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>
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
		$('#radio-received').prop("checked", true);
		$(".dropdown-content.select-dropdown li").on( "click", function() {
			var that = this;
			setTimeout(function(){
				if($(that).parent().hasClass('active')){
					$(that).parent().removeClass('active');
					$(that).parent().hide();
				}
			},100);
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(document).on('submit', '#form-stockcard', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			swal({   
				title: "Want to save this?",   
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
						url: '{{ url('msi/addmrs') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#data-table-simple').DataTable().row.add([
								data.mrs.supplier,
								data.mrs.address,
								data.mrs.invoice_number,
								data.mrs.delivery_reciept_number,
								data.mrs.po_number,
								'<a href="/msi/viewmrs/'+data.mrs.id+'" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>'
								+ '<a href="#modal-addcontent" id="'+data.mrs.id+'" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>'
								]).columns.adjust().draw();
							$('#modal-add').modal('close');
							$('.tooltipped').tooltip({delay: 50});
							$('#form-stockcard').trigger('reset');
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
			$('#article-name').text($('#article'+id).text());
			$('#mrs-id').val(id);
			$('#radio-received').prop("checked", true);
			$('#reference').val('').blur().removeClass('invalid');	
			$('#quantity').val('').blur().removeClass('invalid');
			$('#unit_cost').val('').blur().removeClass('invalid').prop('disabled', false);
			Materialize.updateTextFields();
		});
		
		$(document).on('submit', '#form-stockcard-content', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			swal({
				title: "Want to save this?",   
				text: "<table class='sweet-alert-table'><thead><tr><th width='30%'></th><th></th></tr></thead><tbody><tr><td>Description: </td><td class='uppercase'><b>"+$('textarea[name=description]').val()+"</b></td></tr><tr><td>Quantity: </td><td class='uppercase'><b>"+$('input[name=quantity]').val()+"</b></td></tr><tr><td>Unit: </td><td><b>"+$('select[name=unit]').val()+"</b></td></tr><tr><td>Unit Price: </td><td><b>"+$('input[name=unit_price]').val()+"</b></td></tr></tbody></table>",   
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
						url: '{{ url('msi/addmrscontent') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#modal-addcontent').modal('close');
							$('#form-stockcard-content').trigger('reset');
							Materialize.updateTextFields();
							$('#radio-received').prop("checked", true);
							$('#unit_cost').prop("disabled", false);
							if(data.validation == 'empty') {
								swal("Empty!", "This stockcard is empty!", "warning");
							}
							else if(data.validation == 'insufficient') {
								swal("Insufficient!", "Available stocks for this item are insufficient.", "warning");
							}
							else {
								swal({
									title: "Success!",
									text: "The data has been saved.",
									type: "success"
								});
							} 
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