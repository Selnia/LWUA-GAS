<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ ucfirst($type) }} Inventory Report</title>
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
	tr>td.nb {
		border-top: none;
		border-left: none;
		border-right: none;
		padding-bottom: 5px;
	}
	label.title {
		font-size: 17px;
	}
	label.page_of {
		float: right;
		margin-right: 20px;
	}
	label.finance {
		margin-left: 170px;
	}
	tr>td.pdg {
		padding: 5px;
	}
	tr.pd>td {
		padding: 10px;
		text-align: center;
	}
	label.underline {
		margin-left: 5%;
	}
	tr.footer>td {
		border-left: none;
		border-bottom: none;
		border-right: none;
	}
</style>
</head>
<body>
	<table>
		<thead>
			<tr >
				<td colspan="4" class="nb">
					<label class="wd">
						<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Caloocan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> Water District
					</label>
					<br/><br/>
					<label class="approve">APPROVED:</label>
					<u><label> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 		
						John Joshua Lopez Mendoza
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</label></u><br/>
					<center><label>Finance Officer</label></center>
				</td>
				<td colspan="6" class="nb">
					<center>
						<label class="title">
							{{ strtoupper($type) }} INVENTORY REPORT
						</label><br/>
						<label class="as_of">
							As of {{ date('F Y', mktime(0, 0, 0, $x, 1, date('Y')-$y+1)) }}
						</label>
					</center>
				</td>
				<td colspan="3" class="nb">
					<label class="page_of">Page 
						<u>&nbsp;&nbsp; 1 &nbsp;&nbsp; </u> of <u>&nbsp;&nbsp; 10 &nbsp;&nbsp;</u>
					</label>
				</td>
			</tr>
			<tr style="text-align: center">
				<td class="pdg" width="8%" rowspan="2">Stock No.</td>
				<td class="pdg" width="16%" rowspan=2>DESCRIPTION</td>
				<td class="pdg" width="5%" rowspan="2">Unit</td>
				<td class="pdg" width="5%" rowspan="2">Balance per SC</td>
				<td class="pdg" width="5%" rowspan="2">Balance per BC</td>
				<td class="pdg" width="5%" rowspan="2">Quantity</td>
				<td class="pdg" width="8%" rowspan="2">Unit Cost</td>
				<td class="pdg" width="5%" rowspan="2s">Amount</td>
				<td class="pdg" colspan="3" width="21%">Total {{ ucfirst($type) }} Usages</td>
				<td class="pdg" width="10%" rowspan="2">{{ ucfirst($type) }} Inventory Turnover</td>
				<td class="pdg" width="20%" rowspan="2">REMARKS</td>
			</tr>
			<tr >
				<td>Quantity</td>
				<td>Unit Cost</td>
				<td>Amount</td>
			</tr>
		</thead>
		<tbody>
			@forelse ($items as $item)
			<tr class="pd">
				<td>{{ $item->stock_number }}</td>
				<td>{{ $item->article }} - {{ $item->description }}</td>
				<td>{{ $item->unit }}</td>
				<td>{{ number_format($item->stockcardcontent->sortByDesc('created_at')->first()['balance_quantity'], 0, '', ',') }}</td>	
				<td>{{ number_format($item->bincard->bincardcontent->sortByDesc('created_at')->first()['available'], 0, '', ',') }}</td>
				<td></td>
				<td>{{ ($x = str_replace('.00', '', $item->stockcardcontent->sortByDesc('created_at')->first()['balance_unit_cost'])?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'₱0' }}</td>
				<td>{{ ($x = str_replace('.00', '', $item->stockcardcontent->sortByDesc('created_at')->first()['balance_amount'])?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'₱0' }}</td>
				<td>{{ $quantity = number_format($item->stockcardcontent->sum('issued_quantity'), 0, '', ',') }}</td>
				<td>{{ ($unit_cost = str_replace('.00', '', $item->stockcardcontent->sortByDesc('created_at')->first()['balance_unit_cost'])?:'')?substr_replace(number_format($unit_cost, 2, '.', ','), '₱', 0, 0):'₱0' }}</td>
				<td>{{ ($x = str_replace('.00', '', (int)str_replace(',', '', $quantity) * (float)$unit_cost)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):'₱0' }}</td>
				<td></td>
				<td></td>
			</tr>
			@empty
			<tr class="pd">
				<td colspan="13"><b>No Record Found.</b></td>
			</tr>
			@endforelse
		</tbody>
		<tfoot>
			<tr class="footer">
				<td colspan="2">
					<center>
						<p>Counted/Witness by:</p>
						<b><label>_________________________</label></b>
					</center>
				</td>
				<td colspan="4">
					<center>
						<p>Counted/Witness by:</p>
						<b><label class="underline">_________________________</label></b>
					</center>
				</td>
				<td colspan="4">
					<center>
						<p>Counted/Witness by:</p>
						<b><label class="underline">_________________________</label></b>
					</center>
				</td>
				<td colspan="3">
					<center>
						<p>Counted/Witness by:</p>
						<b><label class="underline">_________________________</label></b>
					</center>
				</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>