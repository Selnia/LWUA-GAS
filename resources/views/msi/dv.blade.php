@extends('layouts.default')

@section('title', 'Disbursement Voucher')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/data-tables/css/jquery.dataTables.min.css') }}" media="screen,projection">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/css/sweetalert.css') }}" media="screen,projection">
@endsection

@section('content-title', 'Disbursement Voucher')

@section('breadcrumbs')
<li class="grey-text">MSI</li>
<li><a href="#!">Disbursement Voucher</a></li>
@endsection

@section('content')
<a href="#modal-add" class="waves-effect waves-light mb-3 right btn modal-trigger">Add Item</a>
<div id="modal-add" class="modal modal-centered">
	<div class="modal-content">
		<form id="form-stockcard" class="col s12">
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Disbursement Voucher</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m6">
					<select name="mode_of_payment">
						<option>MDS Check</option>
						<option>Commercial Check</option>
						<option>ADA</option>
						<option>Others</option>
					</select>
					<label>Mode of Payment</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="number" type="text" class="validate" name="number">
					<label for="number">Number</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="dv_date" type="date" class="datepicker" name="dv_date">
					<label for="dv_date">Date</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="payee_office" type="text" class="validate" name="payee_office">
					<label for="payee_office">Payee/Office</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="tin_employee_number" type="text" class="validate" name="tin_employee_number">
					<label for="tin_employee_number">TIN/Employee No.</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="os_bus_number" type="text" class="validate" name="os_bus_number">
					<label for="os_bus_number">OS/BUS No.</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="os_bus_date" type="date" class="datepicker" name="os_bus_date">
					<label for="os_bus_date">Date</label>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m12">
					<input id="address" type="text" class="validate" name="address">
					<label for="address">Address</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<input id="title" type="text" class="validate" name="title">
					<label for="title">Title</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<textarea id="explanation" class="materialize-textarea" name="explanation"></textarea>
					<label for="explanation">Explanation</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="amount" type="text" class="validate" name="amount">
					<label for="amount">Amount</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="cash_available" type="text" class="validate" name="cash_available">
					<label for="cash_available">Cash Available</label>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<label>Certified - Expenses/Advances necessary,lawful & supervision incurred under my direct supervision </label>
				<div class="input-field col s12 m6">
					<input id="printed_name_one" type="text" class="validate" name="printed_name_one">
					<label for="printed_name_one">Printed Name</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="position_one" type="text" class="validate" name="position_one">
					<label for="position_one">Position</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="certified_date_one" type="date" class="datepicker" name="certified_date_one">
					<label for="certified_date_one">Date</label>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<label>Certified : Supporting Documents complete and proper, and
Cash Available </label>
				<div class="input-field col s12 m6">
					<input id="printed_name_two" type="text" class="validate" name="printed_name_two">
					<label for="printed_name_two">Printed Name</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="position_two" type="text" class="validate" name="position_two">
					<label for="position_two">Position</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="certified_date_two" type="date" class="datepicker" name="certified_date_two">
					<label for="certified_date_two">Date</label>
				</div>
			</div>
			<div class="divider"></div>
			<label>Approved for Payment</label>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="printed_name_three" type="text" class="validate" name="printed_name_three">
					<label for="printed_name_three">Printed Name</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="position_three" type="text" class="validate" name="position_three">
					<label for="position_three">Position</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="certified_date_three" type="date" class="datepicker" name="certified_date_three">
					<label for="certified_date_three">Date</label>
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
<!- MODAL ADD->
<div id="modal-addcontent" class="modal">
	<div class="modal-content">
			<form id="form-stockcard-content" class="col s12">
			<input type="hidden" id="dv-id" name="dv_id" />
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Materials Returned</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="numbera" type="text" class="validate" name="number">
					<label for="number">Number</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="dv_date" type="date" class="datepicker" name="dv_date">
					<label for="dv_date">Date</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="payee_office" type="text" class="validate" name="payee_office">
					<label for="payee_office">Payee/Office</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="tin_employee_number" type="text" class="validate" name="tin_employee_number">
					<label for="tin_employee_number">TIN/Employee No.</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="os_bus_number" type="text" class="validate" name="os_bus_number">
					<label for="os_bus_number">OS/BUS No.</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="os_bus_date" type="date" class="datepicker" name="os_bus_date">
					<label for="os_bus_date">Date</label>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m12">
					<input id="address" type="text" class="validate" name="address">
					<label for="address">Address</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<input id="title" type="text" class="validate" name="title">
					<label for="title">Title</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<textarea id="explanation" class="materialize-textarea" name="explanation"></textarea>
					<label for="explanation">Explanation</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="amount" type="text" class="validate" name="amount">
					<label for="amount">Amount</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="cash_available" type="text" class="validate" name="cash_available">
					<label for="cash_available">Cash Available</label>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<label>Certified - Expenses/Advances necessary,lawful & supervision incurred under my direct supervision </label>
				<div class="input-field col s12 m6">
					<input id="printed_name_one" type="text" class="validate" name="printed_name_one">
					<label for="printed_name_one">Printed Name</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="position_one" type="text" class="validate" name="position_one">
					<label for="position_one">Position</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="certified_date_one" type="date" class="datepicker" name="certified_date_one">
					<label for="certified_date_one">Date</label>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<label>Certified : Supporting Documents complete and proper, and Cash Available </label>
				<div class="input-field col s12 m6">
					<input id="printed_name_two" type="text" class="validate" name="printed_name_two">
					<label for="printed_name_two">Printed Name</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="position_two" type="text" class="validate" name="position_two">
					<label for="position_two">Position</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="certified_date_two" type="date" class="datepicker" name="certified_date_two">
					<label for="certified_date_two">Date</label>
				</div>
			</div>
			<div class="divider"></div>
			<label>Approved for Payment</label>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="printed_name_three" type="text" class="validate" name="printed_name_three">
					<label for="printed_name_three">Printed Name</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="position_three" type="text" class="validate" name="position_three">
					<label for="position_three">Position</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="certified_date_three" type="date" class="datepicker" name="certified_date_three">
					<label for="certified_date_three">Date</label>
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
				<th>Payee/Office</th>
				<th>TIN/Employee Number</th>
				<th>Title</th>
				<th>Explanation</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($dvs as $dv)
			<tr>
				<td>{{ $dv->payee_office }}</td>
				<td>{{ $dv->tin_employee_number }}</td>
				<td>{{ $dv->title }}</td>
				<td>{{ $dv->explanation }}</td>
				<td>
					<a href="{{ url('msi/viewdisbursementvoucher/'.$dv->id) }}" target="{{ $dv->title }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>
					<a href="#modal-addcontent" id="{{ $dv->id }}" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>
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
						url: '{{ url('msi/adddisbursementvoucher') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#data-table-simple').DataTable().row.add([
								data.dv.payee_office,
								data.dv.tin_employee_number,
								data.dv.title,
								data.dv.explanation,
								'<a href="/msi/viewdisbursementvoucher/'+data.dv.id+'" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>'
								+ '<a href="#modal-addcontent" id="'+data.dv.id+'" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>'
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
		$(document).on('click', '.modal-addcontent', function(){
			var id = this.id;
			var number = $(this).data('number', 'value');
			$('#article-name').text($('#article'+id).text());
			$('#dv-id').val(id);
			$('#numbera').val(this.data(number));
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