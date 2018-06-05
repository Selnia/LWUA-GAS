@extends('layouts.default')

@section('title', 'Bin Card')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/data-tables/css/jquery.dataTables.min.css') }}" media="screen,projection">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/css/sweetalert.css') }}" media="screen,projection">
@endsection

@section('content-title', 'Bin Card')

@section('breadcrumbs')
<li class="grey-text">MSI</li>
<li><a href="#!">Bin Card</a></li>
@endsection

@section('content')
<a href="#modal-add" class="waves-effect waves-light mb-3 right btn modal-trigger">Add Item</a>
<div id="modal-add" class="modal">
	<div class="modal-content">
		<form id="form-bincard" class="col s12">
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Bin Card</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="stock_number" type="text" class="validate uppercase" name="stock_number">
					<label for="stock_number">Stock Number</label>
				</div>
				<div class="input-field col s12 m6">
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
			</div>
			<div class="row">
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
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="location" type="text" class="validate" name="location" required>
					<label for="location">Location</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="item" type="text" class="validate" name="item" required>
					<label for="item">Item</label>
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
		<form id="form-bincard-content" class="col s12">
			<input type="hidden" id="bincard-id" name="bincard_id" />
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Bin Card Content for <span id="item-name"></span></h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="col s6 m4 push-s2 push-m3">
					<p>
						<input name="options" type="radio" id="radio-received" value="Received"/>
						<label for="radio-received">Received</label>
					</p>
				</div>
				<div class="col s6 m4 push-s2 push-m3">
					<p>
						<input name="options" type="radio" id="radio-issued" value="Issued"/>
						<label for="radio-issued">Issued</label>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m8 push-m2">
					<input id="reference" type="text" class="validate uppercase" name="reference" required>
					<label for="reference" data-error="Insufficient">Reference</label> 
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m8 push-m2">
					<input id="quantity" type="number" class="validate" name="quantity" min="1" required>
					<label for="quantity">Quantity</label>
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
				<th>Stock Number</th>
				<th>Unit</th>
				<th>Reorder Point</th>
				<th>Reorder Quantity</th>
				<th>Location</th>
				<th>Item</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($items as $item)
			<tr>
				<td>{{ $item->stock_number }}</td>
				<td>{{ $item->unit }}</td>
				<td>{{ $item->reorder_point }}</td>
				<td>{{ $item->reorder_quantity }}</td>
				<td>{{ $item->location }}</td>
				<td><span id="item{{ $item->id }}">{{ $item->item }}</span></td>
				<td>
					<a href="{{ url('msi/viewbincard/'.$item->id) }}" target="{{ $item->item }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>
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
		$('#radio-received').prop("checked", true);
		$('#issued').prop("disabled", true);
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

		$(document).on('submit', '#form-bincard', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			swal({   
				title: "Want to save this?",   
				text: "<table class='sweet-alert-table'><thead><tr><th width='35%'></th><th></th></tr></thead><tbody><tr><td>Stock Number: <td class='uppercase'><b>"+$('input[name=stock_number]').val()+"</b></td></tr><tr><td>Unit: </td><td><b>"+$('select[name=unit]').val()+"</b></td></tr><tr><td>Reorder Point: </td><td><b>"+$('select[name=reorder_point]').val()+"</b></td></tr><tr><td>Reorder Quantity: </td><td><b>"+$('select[name=reorder_quantity]').val()+"</b></td></tr><tr><td>Location: </td><td><b>"+$('input[name=location]').val()+"</b></td></tr><tr><td>Item: </td><td><b>"+$('input[name=item]').val()+"</b></td></tr></tbody></table>",   
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
						url: '{{ url('msi/addbincard') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#data-table-simple').DataTable().row.add([
								data.bincard.stock_number,
								data.bincard.unit,
								data.bincard.reorder_point,
								data.bincard.reorder_quantity,
								data.bincard.location,
								'<span id="item'+data.bincard.id+'">'+data.bincard.item+'</span>',
								'<a href="/msi/viewbincard/'+data.bincard.id+'" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>'
								+ '<a href="#modal-addcontent" id="'+data.bincard.id+'" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>'
								]).columns.adjust().draw();
							$('#modal-add').modal('close');
							$('.tooltipped').tooltip({delay: 50});
							$('#form-bincard').trigger('reset');
							Materialize.updateTextFields();
							swal("Success!", "The data has been saved.", "success");
						},
						error: function(data){
							console.log(data);
						}
					});        
				} 
				else {
					swal("Cancelled!", "There are no changes have occurred.", "error");   
				} 
			});
		});
		$(document).on('click', '.modal-addcontent', function(e){
			var id = this.id;
			$('#item-name').text($('#item'+id).text());
			$('#bincard-id').val(id);
			$('#radio-received').prop("checked", true);
			$('#reference').val('').blur().removeClass('invalid');
			$('#quantity').val('').blur().removeClass('invalid');	
			Materialize.updateTextFields();
		});
		$('#radio-received, #radio-issued').on('change', function(e){
			$('#reference').val('').blur().removeClass('invalid');
			$('#quantity').val('').blur().removeClass('invalid');	
			Materialize.updateTextFields();
		});
		$('#quantity').on('keypress keyup blur', function(e){
			if (($(this).val().length == 0 && e.which == 48) || (e.which < 48 || e.which > 57)) {
				e.preventDefault();
			}
		});
		$(document).on('submit', '#form-bincard-content', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			swal({   
				title: "Want to save this?",   
				text: "<table class='sweet-alert-table'><thead><tr><th width='30%'></th><th></th></tr></thead><tbody><tr><td>Action Type: </td><td><b>"+$('input[name=options]:checked').val()+"</b></td></tr><tr><td>Reference: <td class='uppercase'><b>"+$('input[name=reference]').val()+"</b></td></tr><tr><td>Quantity: </td><td><b>"+$('input[name=quantity]').val()+"</b></td></tr></tbody></table>",   
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
						url: '{{ url('msi/addbincardcontent') }}',
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
									window.open("/msi/viewbincard/"+$('#bincard-id').val(), $('#item-name').text());
								});
							}
							$('#form-bincard-content').trigger('reset');
							Materialize.updateTextFields();
							$('#radio-received').prop("checked", true);
							$('#received').prop("disabled", false);
							$('#issued').prop("disabled", true);
						},
						error: function(data){
							console.log(data);
						}
					});
				} 
				else {
					swal("Cancelled!", "There are no changes have occurred.", "error");   
				} 
			});
		});
	});
</script>
@endsection