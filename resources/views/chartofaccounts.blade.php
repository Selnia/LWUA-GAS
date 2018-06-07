@extends('layouts.default')

@section('styles')
<style>
select:invalid { color: gray; }
</style>
@endsection

@section('content')
<div class="row">
	<div class="input-field col s1">
		<select id="select1">
			<option disabled selected hidden>0</option>
			@foreach ($items->select('account_group')->orderBy('account_group')->get() as $item)
			<option value="{{ $item->account_group }}">{{ $item->account_group }}</option>
			@endforeach
		</select>
	</div>
	<div class="input-field col s1">
		<select id="select2" disabled>
			@foreach ($items->select('major_account_group')->orderBy('major_account_group')->get() as $item)
			<option value="{{ $item->major_account_group }}">{{ $item->major_account_group }}</option>
			@endforeach
		</select>
	</div>
	<div class="input-field col s1">
		<select id="select3" disabled>
			@foreach ($items->select('sub_major_account_group')->orderBy('sub_major_account_group')->get() as $item)
			<option value="{{ $item->sub_major_account_group }}">{{ $item->sub_major_account_group }}</option>
			@endforeach
		</select>
	</div>
	<div class="input-field col s1">
		<select id="select4" disabled>
			@foreach ($items->select('gl_account')->orderBy('gl_account')->get() as $item)
			<option value="{{ $item->gl_account }}">{{ $item->gl_account }}</option>
			@endforeach
		</select>
	</div>
	<div class="input-field col s1">
		<select id="select5" disabled>
			@foreach ($items->select('gl_contra_account')->orderBy('gl_contra_account')->get() as $item)
			<option value="{{ $item->gl_contra_account }}">{{ $item->gl_contra_account }}</option>
			@endforeach
		</select>
	</div>
	<div class="input-field col s1">
		<select id="select6" disabled>
			@foreach ($items->select('subsidiary_ledger_account')->orderBy('subsidiary_ledger_account')->get() as $item)
			<option value="{{ $item->subsidiary_ledger_account }}">{{ $item->subsidiary_ledger_account }}</option>
			@endforeach
		</select>
	</div>
	<div class="input-field col s6">
		<input id="account-name" type="text" name="account-name" required>
		<label for="account-name">Account Name</label>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(document).on('change', '#select1', function(e){
		$('#select2').val(0);
		$('#select3').val(0);
		$('#select4').val(0);
		$('#select5').val(0);
		$('#select6').val(0);
		$('#select2').prop('disabled', true);
		$('#select3').prop('disabled', true);
		$('#select4').prop('disabled', true);
		$('#select5').prop('disabled', true);
		$('#select6').prop('disabled', true);
		$('select').material_select();
		$('#account-name').val('').blur().prop('disabled', true);
		Materialize.updateTextFields();
		$.ajax({
			url: '{{ url('chartofaccounts/select1') }}',
			type: 'POST',
			data: { select1 : $('#select1').val() },
			success: function(data){
				$('#select2').empty();
				$.each(data, function() {
					$.each(this, function(key, value) {
						$('#select2').append("<option value='"+ value.major_account_group +"'>" + value.major_account_group + "</option>");
					});
				});
				$('#select2').prop('disabled', false);
				$('select').material_select();
			},
			error: function(data){
				console.log(data);
			}
		});
	});
	$(document).on('change', '#select2', function(e){
		$('#select3').val(0);
		$('#select4').val(0);
		$('#select5').val(0);
		$('#select6').val(0);
		$('#select3').prop('disabled', true);
		$('#select4').prop('disabled', true);
		$('#select5').prop('disabled', true);
		$('#select6').prop('disabled', true);
		$('select').material_select();
		$('#account-name').val('').blur().prop('disabled', true);
		Materialize.updateTextFields();
		$.ajax({
			url: '{{ url('chartofaccounts/select2') }}',
			type: 'POST',
			data: { select1 : $('#select1').val(), select2 : $('#select2').val() },
			success: function(data){
				$('#select3').empty();
				$.each(data, function() {
					$.each(this, function(key, value) {
						$('#select3').append("<option value='"+ value.sub_major_account_group +"'>" + value.sub_major_account_group + "</option>");
					});
				});
				$('#select3').prop('disabled', false);
				$('select').material_select();
			},
			error: function(data){
				console.log(data);
			}
		});
	});
	$(document).on('change', '#select3', function(e){
		$('#select4').val(0);
		$('#select5').val(0);
		$('#select6').val(0);
		$('#select4').prop('disabled', true);
		$('#select5').prop('disabled', true);
		$('#select6').prop('disabled', true);
		$('select').material_select();
		$('#account-name').val('').blur().prop('disabled', true);
		Materialize.updateTextFields();
		$.ajax({
			url: '{{ url('chartofaccounts/select3') }}',
			type: 'POST',
			data: { select1 : $('#select1').val(), select2 : $('#select2').val(), select3 : $('#select3').val() },
			success: function(data){
				$('#select4').empty();
				$.each(data, function() {
					$.each(this, function(key, value) {
						$('#select4').append("<option value='"+ value.gl_account +"'>" + value.gl_account + "</option>");
					});
				});
				$('#select4').prop('disabled', false);
				$('select').material_select();
			},
			error: function(data){
				console.log(data);
			}
		});
	});
	$(document).on('change', '#select4', function(e){
		$('#select5').val(0);
		$('#select6').val(0);
		$('#select5').prop('disabled', true);
		$('#select6').prop('disabled', true);
		$('select').material_select();
		$('#account-name').val('').blur().prop('disabled', true);
		Materialize.updateTextFields();
		$.ajax({
			url: '{{ url('chartofaccounts/select4') }}',
			type: 'POST',
			data: { select1 : $('#select1').val(), select2 : $('#select2').val(), select3 : $('#select3').val(), select4 : $('#select4').val() },
			success: function(data){
				$('#select5').empty();
				$.each(data, function() {
					$.each(this, function(key, value) {
						$('#select5').append("<option value='"+ value.gl_contra_account +"'>" + value.gl_contra_account + "</option>");
					});
				});
				$('#select5').prop('disabled', false);
				$('select').material_select();
			},
			error: function(data){
				console.log(data);
			}
		});
	});
	$(document).on('change', '#select5', function(e){
		$('#select6').val(0);
		$('#select6').prop('disabled', true);
		$('select').material_select();
		$('#account-name').val('').blur().prop('disabled', true);
		Materialize.updateTextFields();
		$.ajax({
			url: '{{ url('chartofaccounts/select5') }}',
			type: 'POST',
			data: { select1 : $('#select1').val(), select2 : $('#select2').val(), select3 : $('#select3').val(), select4 : $('#select4').val(), select5 : $('#select5').val() },
			success: function(data){
				$('#select6').empty();
				$.each(data, function() {
					$.each(this, function(key, value) {
						$('#select6').append("<option value='"+ value.subsidiary_ledger_account +"'>" + value.subsidiary_ledger_account + "</option>");
					});
				});
				$('#select6').prop('disabled', false);
				$('select').material_select();
			},
			error: function(data){
				console.log(data);
			}
		});
	});
	$(document).on('change', '#select6', function(e){
		$('#account-name').val('').blur().prop('disabled', true);
		Materialize.updateTextFields();
		$.ajax({
			url: '{{ url('chartofaccounts/select6') }}',
			type: 'POST',
			data: { select1 : $('#select1').val(), select2 : $('#select2').val(), select3 : $('#select3').val(), select4 : $('#select4').val(), select5 : $('#select5').val(), select6 : $('#select6').val() },
			success: function(data){
				console.log(data);
				$('#account-name').val(data.items[0].account_name).blur().prop('disabled', false);
				Materialize.updateTextFields();
			},
			error: function(data){
				console.log(data);
			}
		});
	});
</script>
@endsection