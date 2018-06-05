@extends('layouts.default')

@section('title', 'Stock Card')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/data-tables/css/jquery.dataTables.min.css') }}" media="screen,projection">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/css/sweetalert.css') }}" media="screen,projection">
@endsection

@section('content-title', 'Stock Card')

@section('breadcrumbs')
<li class="grey-text">MSI</li>
<li><a href="#!">Stock Card</a></li>
@endsection

@section('content')
<a href="#modal-add" class="waves-effect waves-light mb-3 right btn modal-trigger">Add Item</a>
<div id="modal-add" class="modal modal-centered">
	<div class="modal-content">
		<form id="form-stockcard" class="col s12">
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Stock Card</h5>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="card_number" type="text" class="validate uppercase" name="card_number">
					<label for="card_number">Card Number</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="stock_number" type="text" class="validate uppercase" name="stock_number">
					<label for="stock_number">Stock Number</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="article" type="text" class="validate" name="article" required>
					<label for="article">Article</label>
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
				<div class="input-field col s12 m16">
					<input id="location" type="text" class="validate" name="location">
					<label for="location">Location</label>
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
				<div class="input-field col s12 m16">
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
<div id="modal-addcontent" class="modal">
	<div class="modal-content">
		<form id="form-stockcard-content" class="col s12">
			<input type="hidden" id="stockcard-id" name="stockcard_id" />
			<a href="#!" class="modal-action modal-close modal-close-position tooltipped right" data-position="right" data-delay="50" data-tooltip="Close"><i class="material-icons">close</i></a>
			<div class="row">
				<h5 class="center-align">Add Stock Card Content for <span id="article-name"></span></h5>
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
				<div class="input-field col s12 m6">
					<input id="reference" type="text" class="validate uppercase" name="reference" required>
					<label for="reference">Reference</label> 
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="quantity" type="number" class="validate" name="quantity" min="1" required>
					<label for="quantity">Quantity</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="unit_cost" type="number" class="validate" name="unit_cost" min="0" step="0.01" required>
					<label for="unit_cost">Unit Cost</label>
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
				<th>Card Number</th>
				<th>Stock Number</th>
				<th>Article</th>
				<th>Unit</th>
				<th>Location</th>
				<th>Reorder Point</th>
				<th>Reorder Quantity</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($items as $item)
			<tr>
				<td>{{ $item->card_number }}</td>
				<td>{{ $item->stock_number }}</td>
				<td><span id="article{{ $item->id }}">{{ $item->article }}</span></td>
				<td>{{ $item->unit }}</td>
				<td>{{ $item->location }}</td>
				<td>{{ $item->reorder_point }}</td>
				<td>{{ $item->reorder_quantity }}</td>
				<td>{{ $item->description }}</td>
				<td>
					<a href="{{ url('msi/viewstockcard/'.$item->id) }}" target="{{ $item->article }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>
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
				text: "<table class='sweet-alert-table'><thead><tr><th width='35%'></th><th></th></tr></thead><tbody><tr><td>Card Number: </td><td class='uppercase'><b>"+$('input[name=card_number]').val()+"</b></td></tr><tr><td>Stock Number: <td class='uppercase'><b>"+$('input[name=stock_number]').val()+"</b></td></tr><tr><td>Article: </td><td><b>"+$('input[name=article]').val()+"</td></tr><tr><td>Unit: </td><td><b>"+$('select[name=unit]').val()+"</b></td></tr><tr><td>Location: </td><td><b>"+$('input[name=location]').val()+"</b></td></tr><tr><td>Reorder Point: </td><td><b>"+$('select[name=reorder_point]').val()+"</b></td></tr><tr><td>Reorder Quantity: </td><td><b>"+$('select[name=reorder_quantity]').val()+"</b></td></tr><tr><td>Description: </td><td><b>"+$('textarea[name=description]').val()+"</b></td></tr></tbody></table>",   
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
						url: '{{ url('msi/addstockcard') }}',
						type: 'POST',
						data: formdata,
						success: function(data){
							$('#data-table-simple').DataTable().row.add([
								data.stockcard.card_number,
								data.stockcard.stock_number,
								'<span id="article'+data.stockcard.id+'">'+data.stockcard.article+'</span>',
								data.stockcard.unit,
								data.stockcard.location,
								data.stockcard.reorder_point,
								data.stockcard.reorder_quantity,
								data.stockcard.description,
								'<a href="/msi/viewstockcard/'+data.stockcard.id+'" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="View"><i class="material-icons action-icon">remove_red_eye</i></a>'
								+ '<a href="#modal-addcontent" id="'+data.stockcard.id+'" class="modal-addcontent modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add"><i class="material-icons action-icon">add</i></a>'
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
					swal("Cancelled!", "There are no changes have occurred.", "error");   
				} 
			});
		});
		$(document).on('click', '.modal-addcontent', function(e){
			var id = this.id;
			$('#article-name').text($('#article'+id).text());
			$('#stockcard-id').val(id);
			$('#radio-received').prop("checked", true);
			$('#reference').val('').blur().removeClass('invalid');	
			$('#quantity').val('').blur().removeClass('invalid');
			$('#unit_cost').val('').blur().removeClass('invalid').prop('disabled', false);
			Materialize.updateTextFields();
		});
		$('#radio-received, #radio-issued').on('change', function(e){
			$('#reference').val('').blur().removeClass('invalid');	
			$('#quantity').val('').blur().removeClass('invalid');
			if($('#unit_cost').prop('disabled')) {
				$('#unit_cost').prop('disabled', false);
			}
			else {
				$('#unit_cost').val('').blur().removeClass('invalid').prop('disabled', true);
			}
			Materialize.updateTextFields();
		});
		$('#quantity').on('keypress keyup blur', function(e){
			if (($(this).val().length == 0 && e.which == 48) || (e.which < 48 || e.which > 57)) {
				e.preventDefault();
			}
		});
		$('#unit_cost').on('keypress keyup blur', function(e){
			if (($(this).val().indexOf('.') != -1 || e.which != 46) && (e.which < 48 || e.which > 57)) {
                e.preventDefault();
            }
		});
		$(document).on('submit', '#form-stockcard-content', function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			swal({
				title: "Want to save this?",   
				text: "<table class='sweet-alert-table'><thead><tr><th width='30%'></th><th></th></tr></thead><tbody><tr><td>Action Type: </td><td><b>"+$('input[name=options]:checked').val()+"</b></td></tr><tr><td>Reference: </td><td class='uppercase'><b>"+$('input[name=reference]').val()+"</b></td></tr><tr><td>Quantity: </td><td><b>"+$('input[name=quantity]').val()+"</b></td></tr><tr><td>Unit Cost: </td><td><b>"+parseFloat($('input[name=unit_cost]').val())+"</b></td></tr></tbody></table>",   
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
						url: '{{ url('msi/addstockcardcontent') }}',
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
								}, 
								function() {
									window.open("/msi/viewstockcard/"+$('#stockcard-id').val(), $('#article-name').text());
								});
							}
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