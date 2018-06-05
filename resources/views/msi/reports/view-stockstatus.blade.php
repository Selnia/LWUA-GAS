<!DOCTYPE html>
<html>
<head>
	<title>Monthly Stock Status Report</title>
</head>
<style type="text/css">
html,body{
	font-family: Arial,sans-serif;
}
thead td{
	text-align: center;
}
thead{
	font-size:16px;
}
tbody td{
	text-align: center;
	padding: 5px;
}
</style>
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script>
	$(document).ready(function(){
		// $("table tbody tr td#eb").each(function() {
		// 	var cellText = $.trim($(this).text());
		// 	if (cellText.length == 0 || cellText == 0) {
		// 		$(this).parent().remove();
		// 	}
		// });
		// if($('table tbody tr').length == 0) {
		// 	$('table tbody').html('<tr><td colspan="10"><b>No Record Found.</b></td></tr>');
		// }
	});
</script>
<body>
	<table width="100%" border="1" cellspacing="0">
		<thead> 
			<tr>
				<td height="80px" colspan="2" style="border-right: none;text-align: left;"><label style="margin-left: 22px;margin-right: 10px;"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manila&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label>Water District</td>
				<td colspan="8" style="border-left: none;text-align: left"><span style="font-size: 20px;margin-left: 70px;"> MONTHLY STOCK STATUS REPORT</span> <br><span style="font-size: 15px;margin-left: 100px;">For the month of <label><b>{{ date('F Y', mktime(0, 0, 0, $x, 1, date('Y')-$y+1)) }}</b></span></td>
				</tr>
				<tr>
					<td width="6%" height="76">Stock No.</td>
					<td width="23%">Major type of Material & Supply Item</td>
					<td width="5%">Unit</td>
					<td width="9%">Last month's ending inventory balance</td>
					<td width="11%">Receipts</td>
					<td width="10%">Issues</td>
					<td width="9%">This month's ending inventory balance</td>
					<td width="10%">On order not yet received</td>
					<td width="9%">Re-Order Point</td>
					<td width="8%">Maximum Inventory Level</td>
				</tr>
			</thead>
			<tbody>
				@forelse ($items as $item)
				<tr>
					<td width="6%">{{ $item->stock_number }}</td>
					<td width="23%">{{ $item->article }}</td> 
					<td width="5%">{{ $item->unit }}</td>
					<td width="9%">{{ $ending_balance = number_format($item->stockcardcontent->where('created_at', '>=', \Carbon\Carbon::now()->startOfMonth()->subMonthNoOverflow())->where('created_at', '<=', \Carbon\Carbon::now()->subMonthNoOverflow()->endOfMonth())->sortByDesc('created_at')->first()['balance_quantity'], 0, '', ',') }}</td>
					<td width="11%">{{ $receipts = number_format($item->stockcardcontent->sum('received_quantity'), 0, '', ',') }}</td>
					<td width="10%">{{ $issues = number_format($item->stockcardcontent->sum('issued_quantity'), 0, '', ',') }}</td>
					<td width="9%">{{ number_format((str_replace(',', '', $ending_balance) + str_replace(',', '', $receipts)) - str_replace(',', '', $issues), 0, '', ',') }}</td>
					<td width="10%"></td>
					<td width="9%"></td>
					<td width="8%"></td>
				</tr>
				@empty
					<tr>
						<td colspan="10"><b>No Record Found.</b></td>
					</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td width="6%" height="75" colspan="4" style="border-right:none">Prepared by:<u style="margin-left:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> <br><span style="margin-left: 170px;">Bookkeeper</span></td>
					<td width="23%" colspan="6" style="border-left: none;">APPROVED:<u style="margin-left:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> <br><span style="margin-left: 170px;">Finance Officer</span>	</td>
				</tr>
			</tfoot>
		</table>
	</body>
	</html>