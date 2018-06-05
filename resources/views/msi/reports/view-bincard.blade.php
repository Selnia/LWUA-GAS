<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $bincard->item }} | Bin Card</title>
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
	td {
		border: 2px solid black;
	}
	tr.pd>td {
		padding: 5px 15px 40px 5px;
	}
	tr.pd>td>label {
		display: block;
		position: relative;
		top: 20px;
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
	.quantity {
		letter-spacing: 10px;
	}
</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td align="center" colspan="5">
					<p class="title">BIN CARD</p>
					<p>_____________________________________ Water District</p>
				</td>
			</tr>
			<tr>
			</tr>
			<tr class="pd">
				<td width="20%">STOCK NO:<label>{{ $bincard->stock_number }}</label></td>
				<td width="23%">Unit:<label>{{ $bincard->unit }}</label></td>
				<td width="10%">Reorder point<label>{{ $bincard->reorder_point }}</label></td>
				<td width="12%">Reorder Quantity<label>{{ $bincard->reorder_quantity }}</label></td>
				<td width="35%">Location:<label>{{ $bincard->location }}</label></td>
			</tr>
			<tr class="pd">
				<td colspan="5">ITEM:<label>{{ $bincard->item}}</label></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<table class="align">
					<thead>
						<tr>
							<td rowspan="2">Date</td>
							<td rowspan="2">Reference</td>
							<td class="quantity" colspan="5">QUANTITY</td>
							<td rowspan="2">Storekeeper</td>
						</tr>
						<tr>
							<td width="10%">Received</td>
							<td width="10%">Issued</td>
							<td width="10%">Balance on Hand</td>
							<td width="10%">On Order</td>
							<td width="10%">Available</td>
						</tr>
					</thead>
					<tbody class="content">
						@forelse ($items as $item)
						<tr class="pdg">
							<td>{{ \Carbon\Carbon::parse($item->created_at)->format('m/d/y')}}</td>
							<td>{{ $item->reference }}</td>
							<td>{{ number_format($item->received, 0, '', ',')?:'' }}</td>
							<td>{{ number_format($item->issued, 0, '', ',')?:'' }}</td>
							<td>{{ number_format($item->balance_on_hand, 0, '', ',') }}</td>
							<td>{{ number_format($item->on_order, 0, '', ',')?:'' }}</td>
							<td>{{ number_format($item->available, 0, '', ',') }}</td>
							<td>{{ $item->storekeeper }}</td>
						</tr>
						@empty
						<tr class="pdg">
							<td colspan="9"><b>No record found.</b></td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</tr>
		</tbody>
	</table>
</body>
</html>