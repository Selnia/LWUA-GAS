
<!DOCTYPE html>
<html>
<head>
	<title>View MRS</title>
</head>
<style type="text/css">
html,body{
	font-family: Arial, sans-serif;
}
</style>  
<body>
	<br />
	<table width="100%" border="0" style="font-size:20px">
		<tr>
			<td width="78%" height="50"><label style="margin-right: 10px;"><u>Manila</u></label>Water District</td>
			<td width="22%" font-size="20px">Materials Returned to Suppliers</td>
		</tr>
	</table>
	<br />
	<table width="100%" border="1" cellspacing="0">	
		<tr>
			<td width="61%" height="52" rowspan="2"><p>Supplier:<label style="margin-left: 10px;"><u>{{$mrs->supplier}}</u></label></p>
				<p>Address: <label style="margin-left: 10px;"><u>{{$mrs->address}}</u></label></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p></td>
				<td width="14%" height="77"><br />Invoice<br /> No.:<label style="margin-left: 10px;"><u>{{$mrs->invoice_number}}</u></label>
					<p>&nbsp;</p></td>
					<td colspan="2"><br />Delivery Receipt No.<label style="margin-left: 10px;"><u>&nbsp;&nbsp;{{$mrs->delivery_reciept_number}}&nbsp;&nbsp;</u></label>
						<p>&nbsp;</p></td>
						<td width="12%" colspan="2"><br />P.O.<br /> No.<label style="margin-left: 10px;"><u>{{$mrs->po_number}}</u></label>
							<p>&nbsp;</p></td>
						</tr>
						<tr>
							<td height="27">Date:<label>{{$mrs->invoice_date}}</label></td>
							<td colspan="2">Date:<label>{{$mrs->delivery_reciept_date}}</label></td>
							<td>Date:<label>{{$mrs->po_date}}</label></td>
						</tr>
						<tr> <td height="2" colspan="5"></td></tr>
						<tr>
							<td height="32	"><center>Description of Materials Returned</center></td>
							<td><center>Quantity</center></td>
							<td width="6%"><center>Unit</center></td>
							<td width="7%"><center>Unit Price</center></td>
							<td width="12%"><center>AMOUNT</center></td>
						</tr>
					@foreach ($views as $mr)
						<tr>
							<td height="15">{{$mr->description}}</td>
							<td><center>{{$mr->quantity}}</center></td>
							<td width="6%"><center>{{$mr->unit}}</center></td>
							<td width="7%"><center>{{($x = str_replace('.00', '', $mr->unit_price)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):''}}</center></td>
							<td width="12%"><center>{{($x = str_replace('.00', '', $mr->amount)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):''}}</center></td>
						</tr>
					@endforeach	
						<tr>
						<!- TOTAL ->	<td height="17" colspan="4" align="right"><b>T&nbsp;O&nbsp;T&nbsp;A&nbsp;L&nbsp;</b></td>
							<td width="12%"><center><label>{{($x = str_replace('.00', '', $total)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):''}}</label></center></td>
						</tr>
						<tr> <td height="2" colspan="5"></td></tr>
						<tr> <td height="15" colspan="5" style="border-bottom: none;">REASON:</td></tr>
						<tr> <td height="15" colspan="5" rowspan="5" style="border-top: none;"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$mrs->reason}}</p></td></tr>
						
						<table border="1" cellspacing="0" width="100%" style="border-top:none;">
							<tr> 
								<td height="100" width="300px" style="border-top:none;">Prepared by:<center><br /><label><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$mrs->storekeeper}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br />Storekeeper</center></td>
								<td style="border-top:none;" width="400px">Approved by:<center><br /><label><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$mrs->plant_maint_officer}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br />Plant Maint. Officer</center></td>
								<td style="border-top:none;" width="400px">Received by:<center><br /><label><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$mrs->supplier_representative}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br />Supplier's Representative</center></td>
								<td style="border-top:none;" ><center>No.:<label><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$mrs->number}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label></center></td>
							</tr>
						</table>
					</table>
				</body>
				</html>