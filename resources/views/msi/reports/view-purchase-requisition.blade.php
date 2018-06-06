<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $purchase_req->pr_no }} | Purchase Requisition</title>

	<style>
		html {
			font-family: Arial, sans-serif;
			text-indent: 5px;
		}	
		table {
			border-collapse: collapse;
			width: 100%;
		}
		td {
			border: 2px solid black;
		}
		.title {
			font-size: 25px;
			margin-top: 0;
			font-family: timew new roman;
			font-size: 30px;
			text-transform: uppercase;
		}
		.date-left {
			float: left;
			margin-left: 40px;
		}
		.pr-no-right {
			float: right;
			margin-right: 40px;
		}

		tr>td.padding-to {
			padding: 10px 0px 10px 0px;
		}
		.to {
			font-family: times new roman;
			font-size: 15px;
			margin-left: 40px;
			text-transform: uppercase;
		}
		.checkbox {
			margin: 5px 10px;
		}
		.checkbox span {
	      font-size: 18px;
	      border: solid #000 2px;
	      padding: 0px 3px;
	      width: 10px;
	      height: 10px;
	    }
	    .checkbox-label {
	    	font-size: 14px;
	    }

	    .justification {
	    	font-size: 15px;
	    	font-family: times new roman;
	    	margin-left: 10px;
	    }

	    .float-right {
	    	float: right;
	    	margin-right: 10px;
	    }

	    ul>li
	    {
	    	display: inline;
	    	padding: 15px;
	    }

	    .small {
	    	font-size: 13px;
	    }

	    tr>td.no_border {
	    	border-top: none;
	    	border-left: none; 
	    	border-right: none;
	    	border-bottom: none;
	    	padding: 10px
	    }

	    .bold {
	    	font-weight: bold;
	    }

		tr.pdg>td {
			padding: 5px 10px;
			text-align: center;
			vertical-align: middle;
		}
	</style>
</head>
<body>
	<table cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<td align="center" colspan="5">
					<b><p>Manila Water District</p></b>
					<p class="title">Purchase Requisition</p><br>
					<b><label class="date-left">Date: {{ \Carbon\Carbon::parse($purchase_req->date)->format(' F d, Y')}}</label></b>
					<b><label class="pr-no-right">PR No.: {{ $purchase_req->pr_no }}</label></b>
				</td>
			</tr>
			<tr>
				<td class="padding-to">
					<label class="to uppercase">TO: <b >{{ $purchase_req->to }}</b></label>
				</td>
			</tr>
			<tr>
				<td class="padding-to">
					<label class="to">CHARGE TO: <b>{{ $purchase_req->charge_to }} </b></label>
					<br>

					<table cellspacing="0" cellpadding="0">
						<tr>
							<td style="border-top: none; border-left: none; border-bottom: none; border-right: none;">
								<div class="checkbox">
									<span>{{ ($purchase_req->options=='1'?'✔':'✘') }}</span>
									<label for="included_app" class="checkbox-label" >Included in Appproved Procurement Program (APP)</label>
								</div>
								<div class="checkbox">
									<span>{{ ($purchase_req->needs_budget=='1'?'✔':'✘') }}</span>
									<label for="included_app" class="checkbox-label">Needs Budget Realignment</label>
								</div>
							</td>
							<td style="border-top: none; border-right: none; border-bottom: none; border-left: none;">
								<div class="checkbox">
									<span>{{ ($purchase_req->options=='2'?'✔':'✘') }}</span>
									<label for="included_app" class="checkbox-label">Not Included in the APP</label>
								</div>
								<div class="checkbox">
									<span>{{ ($purchase_req->needs_item=='1' ?'✔':'✘') }}</span>
									<label for="included_app" class="checkbox-label">Needs Item Reprogramming</label>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<table cellpadding="0" cellpadding="0">
						<tr>
							<td style="border-top: none; border-bottom: none; border-left: none;" width="6 %">
								<label class="bold">
									<center>ITEM No.</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;" width="6%">
								<label class="bold">
									<center>STOCK No.</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;" width="5%">
								<label class="bold">
									<center>Available Stock</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;" width="10%">
								<label class="bold">
									<center>Reorder Point</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;" width="5%">
								<label class="bold">
									<center>Reorder Qty</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;" width="28%">
								<label class="bold">
									<center>PARTICULARS</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;">
								<label class="bold">
									<center>Qty</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none;" width="6%">
								<label class="bold">
									<center>UNIT COST</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none; border-right: none;" width="10%">
								<label class="bold">
									<center>ESTIMATED COST</center>
								</label>
							</td>
						</tr>
						@forelse ($items as $item)
						<tr class="pdg">
							<td style="border-bottom: none; border-left: none;">
								<label>
									<center>{{ $item->item_no }}</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ $item->stock_no }}</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ $item->available_stock }}</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ $item->reorder_point }}</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ $item->reorder_quantity }}</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ $item->particulars }}</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ number_format($item->quantity, 0, '', ',')?:'' }} Unit/s</center>
								</label>
							</td>
							<td style="border-bottom: none;">
								<label>
									<center>{{ number_format($item->unit_cost, 0, '', ',')?:'' }}</center>
								</label>
							</td>
							<td style="border-bottom: none; border-right: none;">
								<label>
									<center>{{ number_format($item->estimated_cost, 0, '', ',')?:'' }}</center>
								</label>
							</td>
						</tr>
						@empty
						<tr class="pdg">
							<td colspan="9" style="border-bottom: none; border-right: none; border-left: none;"><b>No record found.</b></td>
						</tr>
						@endforelse
					</table>
				</td>
			</tr>


			<tr>
				<td>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td style="border-top: none; border-bottom: none; border-left: none; padding-bottom: 30px;" width="45%">
								<label class="justification">JUSTIFICATION (Specify in Details / Amplify):</label>

								<br>
								<br>
								<br>
								<center>
									<label><b>{{ $purchase_req->justification }}</b></label><br>
							</td>
							<td style="border-top: none; border-bottom: none; border-right: none;" width="53%">
								<table cellspacing="0" cellpadding="0">
									<tr>
										<td style="border-top: none; border-left: none; border-right: none;" colspan="2">
											<label class="float-right">T O T A L</label>
										</td>
										<td style="border-top: none; border-right: none; padding: 5px">
											<label><b>{{($x = str_replace('.00', '', $total)?:'')?substr_replace(number_format($x, 2, '.', ','), '₱', 0, 0):''}}</b></label>
										</td>
									</tr>
									<tr>
										<td style="border-bottom: none; border-left: none; padding-bottom: 15px;" width="35%">
											<label class="bold">END USER/S</label>
											<br>
											<br>
											<br>
											<label>
												<center><b>{{ $purchase_req->end_user }}</b></center>
											</label>
										</td>
										<td style="border-bottom: none; padding-bottom: 15px;" width="50%">
											<label class="bold">For Non-Stock</label>
											<br>
											<div class="checkbox">
												<span>{{ ($purchase_req->to_be_carried=='1'?'✔':'✘') }}</span>
												<label for="to_be_carried" class="checkbox-label">To be carried </label><label class="checkbox-label" style="margin-left: 45px;">in the stock</label>
											</div>
											<div class="checkbox">
												<span>{{ ($purchase_req->on_case_to=='1'?'✔':'✘') }}</span>
												<label for="to_be_carried" class="checkbox-label">On case to </label><label class="checkbox-label" style="margin-left: 45px;">case basis</label>
										</td>
										<td style="border-bottom: none; border-right: none; padding-bottom: 15px; " width="25%">
											<label class="bold">
												<center><b>JOB/Work Order No.: <br></b></center>
											</label>
											<br>
											<label>
												<center><b>{{ $purchase_req->job_work_order_no }}</b></center>
											</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td style="border-top: none; border-bottom: none; border-left: none;">
								<label class="bold">
									<center>PROPERTY CONTROL</center>
								</label>
							</td>
							<td style="border-top: none; border-bottom: none; border-right: none;">
								<label class="bold">
									<center>BUDGET STATUS</center>
								</label>
							</td>
						</tr>
						<tr>
							<td style="border-bottom: none; border-left: none;" width="60%">
								<table cellspacing="0" cellpadding="0">
									<tr>
										<td style="border-top: none; border-bottom: none; border-left: none; border-right: none;" colspan="3">
											<small class="bold">A. Similar Item/ s Already</small>
										</td>
									</tr>
									<tr>
										<td style="border-bottom: none; border-right: none; border-top: none;  border-left: none;" colspan="2">
											<center>
												<small class="small">Issued to Requisitioner/ s</small>
											</center>
										</td>
										<td style="border-bottom: none; border-right: none; border-top: none;  border-left: none;">
											<center>
												<small class="small">(For Semi-Expandable & Fixed Assets)</small>
											</center>
										</td>
									</tr>
									<tr>
										<td class="no_border" width="10%">
											<center>
												<label class="bold">
													<small>
														Item No.
													</small>
												</label>
											</center>
										</td>
										<td class="no_border" width="10%">
											<center>
												<label class="bold">
													<small>
														Qty
													</small>
												</label>
											</center>
										</td>
										<td class="no_border" width="80%">
											<center>
												<label class="bold">
													<small>
														Item Classification
													</small>
												</label>
											</center>
										</td>
									</tr>
									<tr>
										<td class="no_border" width="10%">
											<center>
												<label>
													<small>
														Item001
													</small>
												</label>
											</center>
										</td>
										<td class="no_border" width="10%">
											<center>
												<label>
													<small>
														1,000
													</small>
												</label>
											</center>
										</td>
										<td class="no_border" width="80%">
											<center>
												<label>
													<small>
														SADADASASd
													</small>
												</label>
											</center>
										</td>
									</tr>
									<tr>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;" colspan="3">
											<small class="bold">B. Supplies (Stock Status)</small>
										</td>
									</tr>
									<tr>
										<td class="no_border" width="10%">
											<center>
												<label>
													<small>
														Item001
													</small>
												</label>
											</center>
										</td>
										<td class="no_border" width="10%">
											<center>
												<label >
													<small>
														1,000
													</small>
												</label>
											</center>
										</td>
										<td class="no_border" width="80%">
											<center>
												<label >
													<small>
														asdasdadad
													</small>
												</label>
											</center>
										</td>
									</tr>
								</table>
							</td>
							<td style="border-bottom: none; border-right: none;"  width="40%">
								<table cellspacing="0" cellpadding="0">
									<tr>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;" colspan="3">
											<label>Control No. <b>QWERTY001</b></label>
											<br><br>
										</td>
									</tr>
									<tr>
										<td width="50%" style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											
										</td>
										<td width="25%" style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>For the Quarter</small>
										</td>
										<td width="25%" style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>For the Year</small>
										</td>
									</tr>
									<tr>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>Budget</small>
										</td>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
									</tr>
									<tr>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>Amount Utilized</small>
										</td>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
									</tr>
									<tr>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>Balance-to-Date</small>
										</td>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
									</tr>
									<tr>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>Amount of hte Request</small>
										</td>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
									</tr>
									<tr>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small>Balance after this Request</small>
										</td>
										<td style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
										<td  style="border-top: none; border-left: none; border-right: none; border-bottom: none;">
											<small><b>1,000,000.00</b></small>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr>
				<td>
					<table cellspacing="0" cellpadding="0">
						
						<tr>
							<td style="border-top: none; border-left: none; border-bottom: none;" width="25%">
								<small>1. Requisitioned By:</small>
								<br>
								<br>
								<br>
								<center>
									<label><u>&nbsp;&nbsp;&nbsp;&nbsp;{{ $purchase_req->requisitioned_name }}&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br>
									<small>Name</small><br><br>
									<label><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $purchase_req->requisitioned_position }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br>
									<small>Position Title</small>
								</center>
								<br>
								<br>
								<small>Date: {{ \Carbon\Carbon::parse($purchase_req->created_at)->format('m/d/y')}}</small>
							</td>
							<td style="border-top: none; border-left: none; border-bottom: none;" width="25%">
								<small>2. Certified Included in the Program of Activity Recommending, Approval:</small>
								<br>
								<br>
								<br>
								<center>
									<label><u>&nbsp;&nbsp;&nbsp;&nbsp;{{ $purchase_req->supervisor }}&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br>
									<small>Supervisor/ DIVISION MGR.</small><br>
								</center>
								<br>
								<br>
								<br>
								<small>Date: {{ \Carbon\Carbon::parse($purchase_req->created_at)->format('m/d/y')}}</small>
							</td>
							<td style="border-top: none; border-left: none; border-bottom: none;" width="25%">
								<small>3. Certified Fund Available Recommending Approval</small>
								<br>
								<br>
								<br>
								<br>
								<center>
									<label><u>&nbsp;&nbsp;&nbsp;&nbsp;{{ $purchase_req->finance }}&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br>
									<small>FINANCE/ Acctg Mgr.</small><br>
								</center>
								<br>
								<br>
								<br>
								<small>Date: {{ \Carbon\Carbon::parse($purchase_req->created_at)->format('m/d/y')}}</small>
							</td>
							<td style="border-top: none; border-right: none; border-bottom: none;" width="25%">
								<small>4. Approved / Disapproved:</small>
								<br>
								<br>
								<br>
								<br>
								<br>
								<center>
									<label><u>&nbsp;&nbsp;&nbsp;&nbsp;{{ $purchase_req->general_manager }}&nbsp;&nbsp;&nbsp;&nbsp;</u></label><br>
									<small>GENERAL MANAGER</small><br>
								</center>
								<br>
								<br>
								<br>
								<small>Date: {{ \Carbon\Carbon::parse($purchase_req->created_at)->format('m/d/y')}}</small>
							</td>
						</tr>

					</table>
				</td>
			</tr>
			
		</tbody>
	</table>
</body>
</html>