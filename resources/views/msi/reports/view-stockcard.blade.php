<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $stockcard->article }} | Stock Card</title>
	<style type="text/css">
	html {
		font-family: Arial, sans-serif;
		text-indent: 5px;
	}
	table {
		border-collapse: collapse;
		width: 100%;
	}
	thead {
		font-weight: bold;
	}
	td{
		border: 2px solid black;
	}
	tr.pd>td {
		padding: 5px 20px 30px 5px;
	}
	tr.pd>td>label {
		display: block;
		position: relative;
		top: 10px;
	}
	tr.pdg>td {
		padding: 5px 10px;
	}
	.title {
		font-size: 25px;
		margin-top: 0;
	}
	table.align {
		text-align: center;
		vertical-align: middle;
	}
	.wd {
		padding: 0 15px 40px 20px;
	}
	td.nb {
		border-bottom: none;
	}
	td.noborder {
		border-top: none;
	}
	tr.pdg>td {
		padding: 10px;
	}
</style>
</head>
<body>
	<table>
		<thead>
			<tr >
				<td align="center" colspan="5" class="nb">
					<p class="title">STOCK CARD</p>
					<p align="left" class="wd">_________________________ Water District</p>
				</td>
			</tr>
			<tr class="pd">
				<td class="noborder" colspan="2"></td>
				<td>Card No.<label>{{ $stockcard->card_number }}</label></td>
				<td colspan="2">Stock No.<label>{{ $stockcard->stock_number }}</label></td>
			</tr>
			<tr class="pd">
				<td width="35%">Article:<label>{{ $stockcard->article }}</label></td>
				<td width="10%">Unit:<label>{{ $stockcard->unit }}</label></td>
				<td width="20%">Location:<label>{{ $stockcard->location }}</label></td>
				<td width="15%">Reorder point<label>{{ $stockcard->reorder_point }}</label></td>
				<td width="15%">Reorder Quantity<label>{{ $stockcard->reorder_quantity }}</label></td>
			</tr>
			<tr class="pd">
				<td colspan="5">DESCRIPTION<label>{{ $stockcard->description }}</label></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<table class="align">
					<thead>
						<tr>
							<td rowspan="2" width="10%">Date</td>
							<td rowspan="2" width="10%">Reference</td>
							<td colspan="3">Received</td>
							<td colspan="3">Issued</td>
							<td colspan="3">Balance - End</td>
						</tr>
						<tr>
							<td>Quantity</td>
							<td>Unit Cost</td>
							<td>Amount</td>
							<td>Quantity</td>
							<td>Unit Cost</td>
							<td>Amount</td>
							<td>Quantity</td>
							<td>Unit Cost</td>
							<td>Amount</td>
						</tr>
					</thead>
					<tbody class="content">
						@forelse ($items as $item)						
						<tr class="pdg">
							<td>{{ \Carbon\Carbon::parse($item->created_at)->format('m/d/y')}}</td>
							<td>{{ $item->reference }}</td>
							<td>{{ number_format($item->received_quantity, 0, '', ',')?:'' }}</td>
							<td>{{ ($x = str_replace('.00', '', $item->received_unit_cost)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'' }}</td>
							<td>{{ ($x = str_replace('.00', '', $item->received_amount)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'' }}</td>
							<td>{{ number_format($item->issued_quantity, 0, '', ',')?:'' }}</td>
							<td>{{ ($x = str_replace('.00', '', $item->issued_unit_cost)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'' }}</td>
							<td>{{ ($x = str_replace('.00', '', $item->issued_amount)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'' }}</td>
							<td>{{ number_format($item->balance_quantity, 0, '', ',') }}</td>
							<td>{{ ($x = str_replace('.00', '', $item->balance_unit_cost)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'₱0' }}</td>
							<td>{{ ($x = str_replace('.00', '', $item->balance_amount)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'₱0' }}</td>
						</tr>
						@empty
						<tr class="pdg">
							<td colspan="11"><b>No Record Found.</b></td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</tr>
		</tbody>
	</table>
</body>
</html>