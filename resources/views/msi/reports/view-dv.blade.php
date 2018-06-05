<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$dvs->title}} - Disbursement Voucher</title>

	<style type="text/css">
	html {
		font-family: Arial, sans-serif;
		text-indent: 5px;
	}
	table {
		border-collapse: collapse;
		width: 100%;
	}
	thead, tbody {
		font-weight: bold;
	}
	td{
		border: 2px solid black;
	}
	p.title {
		font-size: 20px;
	}
	small.small {
		margin-left: 17%;
	}
	span.right {
		float: right;
	}
	small.small_left {
		float: left;
	}
	small.small_right {
		padding: 0 0px 0px 540px;
	}
	tr.pd>td {
		padding: 0 20px 30px 0;
	}
	table.subtable{
		border: none;
	}
	td.nb {
		border-top: none;
		border-left: none;
		border-bottom: none;
	}
	td.nb_response {
		border-top: none;
		border-right: none;
	}
	td.nb_title {
		border-bottom: none;
		border-left: none;
		border-right: none;
	}
	input[type="checkbox"] {
  visibility: hidden;
  margin-right: 90px;
}
	
		input[type="checkbox"] + label:before {
  border: 1px solid #333;
  content: "\00a0";
  display: inline-block;
  font: 16px/1em sans-serif;
  height: 16px;
  margin: 0 .25em 0 0;
  padding: 0;
  vertical-align: top;
  width: 16px;
}
input[type="checkbox"]:checked + label:before {
  background: #fff;
  color: #333;
  content: "\2713";
  text-align: center;
}
input[type="checkbox"]:checked + label:after {
  font-weight: bold;
}

input[type="checkbox"]:focus + label::before {
    outline: rgb(59, 153, 252) auto 5px;
} 

</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td align="center" colspan="5" width="80%">
					<p class="title">MALAY WATER DISTRICT</p>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="5" width="20%">
					DISBURSEMENT VOUCHER
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="80%">
					<center><p>MODE OF PAYMENT</p></center>
					<div class="mo" style="text-align: center;">
					<input type="checkbox" name="mo" id="ce" style="padding:15px; margin-bottom: 20px;margin-right: 10px;" {{($dvs->mode_of_payment == "MDS Check" ? 'checked' :'')}}>
					<label for="ce">MDS Check</label>
					<input type="checkbox" name="" id="ced" style="padding:15px; margin-bottom: 20px;" {{($dvs->mode_of_payment == "Commercial Check" ? 'checked' : '')}}><label for="ced">Commercial Check</label>
					<input type="checkbox" name="" id="ces" style="padding:15px; margin-bottom: 20px;" {{($dvs->mode_of_payment == "ADA" ? 'checked' :'')}}><label for="ces">ADA</label>
					<input type="checkbox" name="" id="cea" style="padding:15px; margin-bottom: 20px;" {{$dvs->mode_of_payment == "Others" ? 'checked' :''}}><label for="cea">Others</label>
					</div>
				</td>
				<td width="20%" colspan="2">
					<small class="small_left">NO.:&nbsp;&nbsp;<label>{{$dvs->number}}</label> </small><br/><br/>
					<small class="small_left">Date:&nbsp;&nbsp;<label>{{$dvs->dv_date}}</label> </small>
				</td>
			</tr>
			<tr>
				<td width="80%">
					<small class="small_left">Payee/Office:&nbsp;&nbsp;<label>{{$dvs->payee_office}}</label></small>
					<small class="small_right">TIN/Employee No.:&nbsp;&nbsp;<label>{{$dvs->tin_employee_number}}</label></small>
				</td>
				<td width="20%">
					<small class="small_left">OS/BUS No.:&nbsp;&nbsp;<label>{{$dvs->os_bus_number}}</label></small><br/>
					<small class="small_left">Date&nbsp;&nbsp;<label>{{$dvs->os_bus_date}}</label></small>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table class="subtable">
						<tr >
							<td rowspan="2" width="50%" class="nb">
								<small>Address:&nbsp;&nbsp;<label>{{$dvs->address}}</label></small>
							</td>
							<td class="nb_response">
								<center><small>Responsibility Center</small></center>
							</td>
						</tr>
						<tr >
							
							<td width="50%" class="nb_title">
								<small>Title:&nbsp;&nbsp;<label>{{$dvs->title}}</label></small>
							</td>	
						</tr>
					</table>
				</td>
			</tr>
			<tr >
				<td rowspan="2">
					<center>
						<p><label>{{$dvs->explanation}}</label></p>					
					</center>
				</td>
				<td >
					<center><small>Amount</small></center>
				</td>
			</tr>
			<tr >

				<td>
					<center><p><label>{{($x = str_replace('.00', '', $dvs->amount)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):''}}</label><span><br/><b>__________________________</b></span></p></center>
				</td>	
			</tr>
			<tr>
				<td colspan="2" " >
					<table style="border-top: none;border-bottom:none;width: 100%;">
						<tr>
							<td style="border-top:none;" width="450px">
								<small style="float: left;">Certified </small><span style="margin-left: 43px;"><small>Expenses/Advances</small></span><br>
								<span style="margin-left: 107px"><small>necessary,lawful & supervision</small></span><br>
								<span style="margin-left: 107px"><small>incurred under my direct supervision</small></span>
								<br><br>
								<small>Signature<span style="margin-left: 45px">_________________________</span></small>
								<br><br>
								<small>Printed Name<span style="margin-left: 20px"><label><u>{{$dvs->printed_name_one}}</u></label></span></small>
								<br><br>
								<small>Position<span style="margin-left: 53px"><label><u>{{$dvs->position_one}}</u></label></span></small>
								<br><br>
								<small>Date<span style="margin-left: 75px"><label><u>{{$dvs->certified_date_one}}</u></label></span></small>
							</td>
							<td style="border-top:none;padding-bottom: 10px;" width="450px">
								<small style="margin-left: 30px;">Certified:</small> 
								<span style="margin-left: 35px;"><small><br>Supporting Documents complete <br><span style="margin-left: 35px;">and proper, and</span><br><span style="margin-left: 35px;"><span style="margin-left: 20px"><label><u>{{($x = str_replace('.00', '', $dvs->cash_available)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):''}}</u></label></span> Cash Available</span></small></span>
								<br><br>
								<small>Signature<span style="margin-left: 45px">_________________________</span></small>
								<br><br>
								<small>Printed Name<span style="margin-left: 20px"><label><u>{{$dvs->printed_name_two}}</u></label></span></small>
								<br><br>
								<small>Position<span style="margin-left: 53px"><label><u>{{$dvs->position_two}}</u></label></span></small>
								<br><br>
								<small>Date<span style="margin-left: 75px"><label><u>{{$dvs->certified_date_two}}</u></label></span></small>
							</td>
							<td style="border-top:none;" width="450px">
								<small >Approved for Payment</small> 
								<p></p>
								<br><br>
								<small>Signature<span style="margin-left: 45px">_________________________</span></small>
								<br><br>
								<small>Printed Name<span style="margin-left: 20px"><label><u>{{$dvs->printed_name_three}}</u></label></span></small>
								<br><br>
								<small>Position<span style="margin-left: 53px"><label><u>{{$dvs->position_three}}</u></label></span></small>
								<br><br>
								<small>Date<span style="margin-left: 75px"><label><u>{{$dvs->certified_date_three}}</u></label></span></small>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>