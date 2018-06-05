<?php

use Illuminate\Database\Seeder;

class ChartOfAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '00',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'ASSETS'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash and Cash Equivalents'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash On Hand'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-1 ,
    		'cps_ngas_modified_chart_of_accounts' => 102 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash-Collecting Officers'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 122 ,
    		'cps_ngas_modified_chart_of_accounts' => 102 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0', 
    		'account_name' => 'Petty Cash'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-1 ,
    		'cps_ngas_modified_chart_of_accounts' => 104 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Local Currency on Hand'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-1 ,
    		'cps_ngas_modified_chart_of_accounts' => 105 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Foreign Currency on Hand'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-1 ,
    		'cps_ngas_modified_chart_of_accounts' => 106 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Checks and Other Cash Items'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-1 ,
    		'cps_ngas_modified_chart_of_accounts' => 107 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '060',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Treasury Fund Capital'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash in Bank-Local Currency'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-2 ,
    		'cps_ngas_modified_chart_of_accounts' => 107 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash in Bank-Local Currency, Current Account'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-2 ,
    		'cps_ngas_modified_chart_of_accounts' => 108 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash in Bank-Local Currency, Savings Account'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-2 ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '05',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Cash Equivalents'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 120-2 ,
    		'cps_ngas_modified_chart_of_accounts' => 108 ,
    		'account_group' => 1,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '05',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Time Deposits-Local Currency'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 112 ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Investments'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '07',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Sinking Fund'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Investments in Time Deposit'   
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 112 ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Investments in Time Deposits-Local Currency'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Investments'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 112 ,
    		'cps_ngas_modified_chart_of_accounts' => 199 ,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Investments' 
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 112 ,
    		'cps_ngas_modified_chart_of_accounts' => 199 ,
    		'account_group' => 1,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Other Investments'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Recievables'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Loans and Recievable Accounts'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 125 ,
    		'cps_ngas_modified_chart_of_accounts' => 111 ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accounts Recievable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Accounts Recievable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 124 ,
    		'cps_ngas_modified_chart_of_accounts' => 112 ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Notes Recievable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '021',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Notes Recievable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '05',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Recievable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '128 Various SL' ,
    		'cps_ngas_modified_chart_of_accounts' => 136 ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '05',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Recievable-Disallowances/Charges'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '128 Various SL' ,
    		'cps_ngas_modified_chart_of_accounts' => 135 ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '05',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due from Officers and Employees'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '128 Various SL' ,
    		'cps_ngas_modified_chart_of_accounts' => 149 ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '05',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Recievable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '05',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Other Recievables'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 131 ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Inventories'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Inventory Held for Consumption'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'SL Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 151 ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Office Supplies Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Office Supplies Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'SL Account' ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accountable Forms, Plates and Stickers Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '021',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Accountable Forms, Plates and Stickers Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'SL Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 157 ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Fuel, Oil and Lubricants Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '081',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Fuel, Oil and Lubricants Inventory'
    	]);

    	
    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'SL Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 158 ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '120',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Chemicals and Filtering Supplies Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '121',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Chemicals and Filtering Supplies Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'SL Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 169 ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Supplies and Materials Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '04',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Allowance for Impairment-Other Supplies and Materials Inventory'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 100 ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Property, Plant Equipments'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Land'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 306 ,
    		'cps_ngas_modified_chart_of_accounts' => 201,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Land'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account' ,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Land'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Land Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 390 ,
    		'cps_ngas_modified_chart_of_accounts' => 202,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Land Improvements, Aquaculture Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 390 ,
    		'cps_ngas_modified_chart_of_accounts' => 202,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depereciation-Land Improvements, Aquaculture Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '012',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Land Improvements, Aquaculture Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Land Improvements, Reforestation Projects'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '021',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Land Improvements, Reforestation Projects'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Infrastructure Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Sewer Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '031',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Sewer Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '032',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Sewer Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Water Supply Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '041',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Water Supply Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '042',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Water Supply Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 100 ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Plant-Utility Plant in Service'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-1',
    		'account_name' => 'Collecting and Impounding Reservoirs'
    	]);        

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-2',
    		'account_name' => 'Lake River and Other Channels'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-3',
    		'account_name' => 'Springs and Tunnels'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-4',
    		'account_name' => 'Wells'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-5',
    		'account_name' => 'Supply Mains'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-6',
    		'account_name' => 'Other Source of Supply Plant'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-7',
    		'account_name' => 'Other Pumping Plant'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-8',
    		'account_name' => 'Reservoirs and Tanks'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-9',
    		'account_name' => 'Transmission and Distribution Mains'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-10',
    		'account_name' => 'Fire Mains'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-11',
    		'account_name' => 'Services'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-12',
    		'account_name' => 'Meters'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-13',
    		'account_name' => 'Meter Installation'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-14',
    		'account_name' => 'Hydrants'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-15',
    		'account_name' => 'Other Transmission and Distribution Mains'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-16',
    		'account_name' => 'Other Plants'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-17',
    		'account_name' => 'Utility Plant Held for Future use'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '110-18',
    		'account_name' => 'Unclassified Utility Plant'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 100 ,
    		'cps_ngas_modified_chart_of_accounts' => 203,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '111',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Plant(UPIS)'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '112',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Plant(UPIS)'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Buildings and Other Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 204,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => 010,
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Buildings'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 204,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-01',
    		'account_name' => 'Source of Supply Plant Structures and Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 204,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-02',
    		'account_name' => 'Pumping Plant Structures and Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 204,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-03',
    		'account_name' => 'Water Treatment Structures and Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 204,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-04',
    		'account_name' => 'Transmission and Distribution Structures and Improvements'
    	]);        

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 204,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-05',
    		'account_name' => 'Administrative Structures and Improvement'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Buildings'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '012',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Buildings'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Water Plant, Strucutres and Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '071',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Water Plant, Strucutres and Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '072',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Water Plant, Strucutres and Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Other Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '04',
    		'gl_account' => '992',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Other Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Machinery and Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Machinery'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Machinery'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '012',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Machinery'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Office Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '021',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Office Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '022',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Office Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 380 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Information and Communication Technology Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 380 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '031',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Information and Communication Technology Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '032',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Information and Communication Technology Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Communication Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '071',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Communication Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '05',
    		'gl_account' => '072',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Communication Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Transportation Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Motor Vehicles'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Motor Vehicles'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '012',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Motor Vehicles'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Transportation Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Other Transportation Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '06',
    		'gl_account' => '992',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Other Transportation Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 376 ,
    		'cps_ngas_modified_chart_of_accounts' => 207,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '07',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Furniture, Fixtures and Books'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '07',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Furniture and Fixtures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '07',
    		'gl_account' => '011',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Furniture and Fixtures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '07',
    		'gl_account' => '012',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Furniture and Fixtures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Service Concession -Tangible Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Service Concession-Sewer Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '031',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Service Concession-Sewer Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '032',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Service Concession-Sewer Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Service Concession-Water Supply Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '041',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Service Concession-Water Supply Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '11',
    		'gl_account' => '042',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Service Concession-Water Supply Systems'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Property, Plant and Equipment'
    	]);     

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Property, Plant and Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-01',
    		'account_name' => 'Laboratory Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-02',
    		'account_name' => 'Power Production Equipment'
    	]);             

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-03',
    		'account_name' => 'Pumping Equipment'
    	]);  

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-04',
    		'account_name' => 'Water Treatment Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-05',
    		'account_name' => 'Stores Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-06',
    		'account_name' => 'Communications Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-07',
    		'account_name' => 'Power Operated Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-08',
    		'account_name' => 'Tools, Shop and Garage Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 372 ,
    		'cps_ngas_modified_chart_of_accounts' => 226,
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Depreciation-Other Propoerty, Plant and Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '98',
    		'gl_account' => '992',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Other Propoerty, Plant and Equipment'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => '243/244',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '99',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Construction in Progress'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => '243/244',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '99',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Construction in Progress-Land Improvements'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => '243/244',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '99',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Construction in Progress-Infrastracture Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => '243/244',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '99',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Construction in Progress-Buildings and Other Structures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => '243/244',
    		'account_group' => 1,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '99',
    		'gl_account' => '060',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Construction in Progress-Furniture and Fixtures'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => 261,
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'INTAGIBLE ASSETS'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => 261,
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Intangible Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => 261,
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Computer Software'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => 261,
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '021',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Amortization-Computer Software'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '022',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Computer Software'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => 261,
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '980',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Intangible Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 101 ,
    		'cps_ngas_modified_chart_of_accounts' => 261,
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '981',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Amortization-Other Intangible Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '08',
    		'sub_major_account_group' => '01',
    		'gl_account' => '982',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Other Intangible Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 133 ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 127 ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Advances'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Advances for Operating Expenses'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Advances for Payroll'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Advances for Special Disbursing Officer'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Advances for Officers and Employees'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 132 ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Prepayments'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 279,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Advances to Contractors'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 171,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '02',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Prepaid Rent'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 172,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '02',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Prepaid Insurance'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 172,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '02',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Withholding Tax at Source'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts' ,
    		'cps_ngas_modified_chart_of_accounts' => 178,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Prepayments'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 132 ,
    		'cps_ngas_modified_chart_of_accounts' => 178,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '99',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 146 ,
    		'cps_ngas_modified_chart_of_accounts' => 189,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '99',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Deffered Charges/Losses'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 146 ,
    		'cps_ngas_modified_chart_of_accounts' => 189,
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '99',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account' ,
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 1,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '99',
    		'gl_account' => '991',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accumulated Impairment Losses-Other Assets'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '00',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Liabilities'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Financial Liabilities'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Payables'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 222,
    		'cps_ngas_modified_chart_of_accounts' => 401,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accounts Payables'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 222,
    		'cps_ngas_modified_chart_of_accounts' => 423,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due to Officers and Employees'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 222,
    		'cps_ngas_modified_chart_of_accounts' => 402,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Notes Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 229,
    		'cps_ngas_modified_chart_of_accounts' => 406,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Interest Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 239,
    		'cps_ngas_modified_chart_of_accounts' => 407,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '100',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Accrued Benefits Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Bills/Bonds/Loans Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 239,
    		'cps_ngas_modified_chart_of_accounts' => 407,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Loans Payable-Domestic'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 225,
    		'cps_ngas_modified_chart_of_accounts' => 407,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-01',
    		'account_name' => 'Current Portion of Long Term Debt'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 211,
    		'cps_ngas_modified_chart_of_accounts' => 433,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-02',
    		'account_name' => 'Loans Payable (Long Term Debt)'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 239,
    		'cps_ngas_modified_chart_of_accounts' => 429,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Bills/Bonds/Loans Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '99',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Financial Liabilities'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 239,
    		'cps_ngas_modified_chart_of_accounts' => 429,
    		'account_group' => 2,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '99',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Other Financial Liabilities'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Inter-Agency Payables'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Inter-Agency Payables'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 232,
    		'cps_ngas_modified_chart_of_accounts' => 412,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due to BIR'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 226,
    		'cps_ngas_modified_chart_of_accounts' => 413,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due to GSIS'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 413,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due to Pag-IBIG'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 413,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due to Philhealth'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 239,
    		'cps_ngas_modified_chart_of_accounts' => 414,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Due to NGAs'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 414,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '120',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Value Added Tax Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 414,
    		'account_group' => 2,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '130',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Income Tax Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Trust Liabilities'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Trust Liabilities'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '227-1',
    		'cps_ngas_modified_chart_of_accounts' => 414,
    		'account_group' => 2,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => 'Guaranty/Security Deposits Payable'
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '227',
    		'cps_ngas_modified_chart_of_accounts' => 451,
    		'account_group' => 2,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '01',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Customers' Deposit Payable"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Deffered Credits/Unearned Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Deffered Credits"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 242,
    		'cps_ngas_modified_chart_of_accounts' => 459,
    		'account_group' => 2,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Deffered Credits"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Provisions"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Provisions"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 257,
    		'cps_ngas_modified_chart_of_accounts' => 459,
    		'account_group' => 2,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Pensions Benefits Payable"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 257,
    		'cps_ngas_modified_chart_of_accounts' => 459,
    		'account_group' => 2,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Leave Benefits Payable"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 258,
    		'cps_ngas_modified_chart_of_accounts' => 459,
    		'account_group' => 2,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Provisions"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Payables"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 2,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '99',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Payables"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 239,
    		'cps_ngas_modified_chart_of_accounts' => 429,
    		'account_group' => 2,
    		'major_account_group' => '99',
    		'sub_major_account_group' => '99',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Payables"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3 ,
    		'major_account_group' => '00',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "EQUITY"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Government Equity"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Government Equity"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 200,
    		'cps_ngas_modified_chart_of_accounts' => 471,
    		'account_group' => 3,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Government Equity"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 201,
    		'cps_ngas_modified_chart_of_accounts' => 471,
    		'account_group' => 3,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Contributed Capital"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Intermediate Accounts"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Intermediate Accounts"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 201,
    		'cps_ngas_modified_chart_of_accounts' => 471,
    		'account_group' => 3,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Revenue/Income and Expense Summary"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3,
    		'major_account_group' => '07',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Retained Earnings/(Deficit)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 3,
    		'major_account_group' => '07',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Retained Earnings/(Deficit)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 202,
    		'cps_ngas_modified_chart_of_accounts' => 481,
    		'account_group' => 3,
    		'major_account_group' => '07',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Retained Earnings/(Deficit)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 4,
    		'major_account_group' => '00',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "REVENUES"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Service and Business Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Business Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 500,
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Waterworks System Fees"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-01',
    		'account_name' => "Metered Sales"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-02',
    		'account_name' => "Unmetered Sales"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-03',
    		'account_name' => "Sales to Irrigation Customers"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-04',
    		'account_name' => "Private Fire Protection Service"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-05',
    		'account_name' => "Public Fire Protection Service"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-06',
    		'account_name' => "Sales to Other Water Utilities for Resale"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-07',
    		'account_name' => "Sales to Government Agencies by Contracts"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '090-08',
    		'account_name' => "Other Sales or Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 500,
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '160',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Sales Revenue(Water Sales)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 500,
    		'cps_ngas_modified_chart_of_accounts' => 571,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '161',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Sales Discount"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 524,
    		'cps_ngas_modified_chart_of_accounts' => 612,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '210',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Interest Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 612,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '230',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Fines and Penalties-Business Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 612,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Business Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-01',
    		'account_name' => "Miscellaneaous Service Revenue"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-02',
    		'account_name' => "Rent of Water Property"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-03',
    		'account_name' => "Meter Rental"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-04',
    		'account_name' => "Other Water Revenue"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 200,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Assistance and Subsidy"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 200,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Assistance and Subsidy"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 200,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Assistance from Local Government Units"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 201,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Shares, Grants and Donations"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 201,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Grants and Donations"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 201,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Income from Grants and Donations in Cash"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 201,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '04',
    		'sub_major_account_group' => '02',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Income from Grants and Donations in Kind"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 4,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Gains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 619,
    		'account_group' => 4,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Gains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 624,
    		'account_group' => 4,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Gain on Sale of Investment Property"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 623,
    		'account_group' => 4,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Gain on Sale of Property, Plant and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '100',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Gain on Sale of Intangible Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Gains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 521,
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Non-Operating Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Sale of Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Sale of Unserviceable Property"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Reversal of Impairment Loss"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Reversal of Impairment Loss"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Miscellaneaous Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 629,
    		'account_group' => 4,
    		'major_account_group' => '06',
    		'sub_major_account_group' => '03',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Miscellaneaous Income"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '00',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "EXPENSES"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Personal Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Salaries and Wages"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 521,
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Salaries and Wages-Regular"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-01',
    		'account_name' => "Source of Supply Expense-Operation Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-02',
    		'account_name' => "Source of Supply Expense-Operation Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-03',
    		'account_name' => "Source of Supply Expense-Maintenance Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-04',
    		'account_name' => "Pumping Expense-Power Production Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-05',
    		'account_name' => "Pumping Expense-Pumping Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-06',
    		'account_name' => "Water Treatment Expense-Operation Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-07',
    		'account_name' => "Transmission and Distribution Expense-Maintenance Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-08',
    		'account_name' => "Customer Account Expense-Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-09',
    		'account_name' => "Customer Account Expense-Meter Reading"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-10',
    		'account_name' => "Customer Account Expense-Customer Records and Collection"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 701,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-11',
    		'account_name' => "Administrative and General Salaries"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 521,
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Salaries and Wages-Casual/Contractual"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-01',
    		'account_name' => "Source of Supply Expense-Operation Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-02',
    		'account_name' => "Source of Supply Expense-Operation Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-03',
    		'account_name' => "Source of Supply Expense-Maintenance Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-04',
    		'account_name' => "Pumping Expense-Power Production Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-05',
    		'account_name' => "Pumping Expense-Pumping Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-06',
    		'account_name' => "Water Treatment Expense-Operation Labor"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-07',
    		'account_name' => "Transmission and Distribution Expense-Maintenance Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-08',
    		'account_name' => "Customer Account Expense-Supervision"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-09',
    		'account_name' => "Customer Account Expense-Meter Reading"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-10',
    		'account_name' => "Customer Account Expense-Customer Records and Collection"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 706,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '020-11',
    		'account_name' => "Administrative and General Salaries"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Compensation"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 707,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Personnel Economic Relief Allowance(PERA)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 707,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 710,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Representation Allowance(RA)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 711,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Transportation Allowance(TA)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 712,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Clothing/Uniform Allowance"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 712,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 719,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Productivity Incentive Allowance"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 719,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '080-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 713,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '100',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Honoraria"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 749,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '130',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Overtime and Night Pay"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 749,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '130',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '130-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 714,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '140',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Year End Bonus"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 714,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '140',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '140-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 719,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '150',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Cash Gift"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 719,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '150',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '150-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 719,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Bonuses and Allowances"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 719,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '02',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-01',
    		'account_name' => "(Distribute Subsidiary Account with Salaries and Wages Cost Centers)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '03',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Personnel Benefit Contributions (Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '822-1',
    		'cps_ngas_modified_chart_of_accounts' => 721,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '03',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Retirement and Life Insurance Premiums"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '822-2',
    		'cps_ngas_modified_chart_of_accounts' => 722,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '03',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Pag-IBIG Contributions"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '822-3',
    		'cps_ngas_modified_chart_of_accounts' => 723,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '03',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Philhealth Contributions"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => '822-3',
    		'cps_ngas_modified_chart_of_accounts' => 724,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '03',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Employees Compensation Insurance Premiums"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 824,
    		'cps_ngas_modified_chart_of_accounts' => 725,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '03',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Provident/Welfare Fund Contributions"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 824,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '04',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Personnel Benefits(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 824,
    		'cps_ngas_modified_chart_of_accounts' => 731,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Pensions Benefits"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 824,
    		'cps_ngas_modified_chart_of_accounts' => 734,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '04',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Retirement Gratuity"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 824,
    		'cps_ngas_modified_chart_of_accounts' => 737,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '04',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Terminal Leave Benefits"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 824,
    		'cps_ngas_modified_chart_of_accounts' => 749,
    		'account_group' => 5,
    		'major_account_group' => '01',
    		'sub_major_account_group' => '04',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Personnel Benefits"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Maintenance and Other Operating Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Travelling Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 827,
    		'cps_ngas_modified_chart_of_accounts' => 766,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Travelling Expenses-Local"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 827,
    		'cps_ngas_modified_chart_of_accounts' => 766,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Travelling Expenses-Foreign"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Training and Scholarship Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 833,
    		'cps_ngas_modified_chart_of_accounts' => 767,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Training Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 833,
    		'cps_ngas_modified_chart_of_accounts' => 767,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '02',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Scholarship Grants/Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Supplies and Materials Expenses(Administrative Expense-excel item no. 5)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 830,
    		'cps_ngas_modified_chart_of_accounts' => 751,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Office Supplies Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 850,
    		'cps_ngas_modified_chart_of_accounts' => 765,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Accountable Forms Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 850,
    		'cps_ngas_modified_chart_of_accounts' => 765,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Medical, Dental and Laboratory Supplies Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 840,
    		'cps_ngas_modified_chart_of_accounts' => 757,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Fuel, Oil and Lubricants Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 850,
    		'cps_ngas_modified_chart_of_accounts' => 765,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '130',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Chemical and Filtering Supplies Expenses(Water Treatment Expense)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 850,
    		'cps_ngas_modified_chart_of_accounts' => 765,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '03',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Supplies and Materials Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '04',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Utility Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '04',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Utility Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 835,
    		'cps_ngas_modified_chart_of_accounts' => 768,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '04',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Water Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 835,
    		'cps_ngas_modified_chart_of_accounts' => 769,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '04',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Electricity Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 835,
    		'cps_ngas_modified_chart_of_accounts' => 769,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '04',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Utility Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '05',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Communication Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 831,
    		'cps_ngas_modified_chart_of_accounts' => 772,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '05',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Postage and Courier Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 831,
    		'cps_ngas_modified_chart_of_accounts' => 773/774,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '05',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Telephone Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 831,
    		'cps_ngas_modified_chart_of_accounts' => 775,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '05',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Internet Subscription Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 831,
    		'cps_ngas_modified_chart_of_accounts' => 776,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '05',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Cable, Satellite, Telegraph and Radio Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '06',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Awards/Rewards, Prizes and Indemnites(Administrative Expense)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 834,
    		'cps_ngas_modified_chart_of_accounts' => 783,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '06',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Awards/Rewards Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 834,
    		'cps_ngas_modified_chart_of_accounts' => 783,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '06',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Prizes"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 834,
    		'cps_ngas_modified_chart_of_accounts' => 785,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '06',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Indemnities"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Generation, Transmission and Distribution Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 501,
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Generation, Transmission and Distribution Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 501,
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Generation, Transmission and Distribution Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-01',
    		'account_name' => "Source of Supply-Miscellaneous Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-02',
    		'account_name' => "Purchased Water"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-03',
    		'account_name' => "Source of Supply-Engineering Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-04',
    		'account_name' => "Power Production Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-05',
    		'account_name' => "Fuel for Power Production"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-06',
    		'account_name' => "Pumping Operations Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-07',
    		'account_name' => "Power or Fuel Purchased for Pumping"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-08',
    		'account_name' => "Water Treatment Operations Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-09',
    		'account_name' => "Transmission and Distibution-Engineering Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 792,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '09',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '010-10',
    		'account_name' => "Miscellaneaous Customer Accounts Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '10',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Confidential, Intelligence and Extraordinary Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 843,
    		'cps_ngas_modified_chart_of_accounts' => 795,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '10',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Extraordinary and Miscellaneaous Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Professional Services(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 825,
    		'cps_ngas_modified_chart_of_accounts' => 842,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Legal Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 826,
    		'cps_ngas_modified_chart_of_accounts' => 843,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Auditing Services"
    	]);        

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 826,
    		'cps_ngas_modified_chart_of_accounts' => 849,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Consultancy Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 826,
    		'cps_ngas_modified_chart_of_accounts' => 849,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '11',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Professional Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '12',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "General Services(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 826,
    		'cps_ngas_modified_chart_of_accounts' => 845,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '12',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Janitorial Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 826,
    		'cps_ngas_modified_chart_of_accounts' => 846,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '12',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Security Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 826,
    		'cps_ngas_modified_chart_of_accounts' => 849,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '12',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other General Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 849,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Investment Property"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Land Improvements"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Infrastructures Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-01',
    		'account_name' => "Repairs and Maintenance-Collecting and Impounding Reservoirs"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-02',
    		'account_name' => "Repairs and Maintenance-Lake RIver and Other Channels"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-03',
    		'account_name' => "Repairs and Maintenance-Springs and Tunnels"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-04',
    		'account_name' => "Repairs and Maintenance-Wells"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-05',
    		'account_name' => "Repairs and Maintenance-Supply Mains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-06',
    		'account_name' => "Repairs and Maintenance-Other Source of Supply Plant"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-07',
    		'account_name' => "Repairs and Maintenance-Other Pumping Plant"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-08',
    		'account_name' => "Repairs and Maintenance-Reservoirs and Tanks"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-09',
    		'account_name' => "Repairs and Maintenance-Transmission and Distibution Mains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-10',
    		'account_name' => "Repairs and Maintenance-Fire Mains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-11',
    		'account_name' => "Repairs and Maintenance-Services"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-12',
    		'account_name' => "Repairs and Maintenance-Meters"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-13',
    		'account_name' => "Repairs and Maintenance-Meter Installation"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-14',
    		'account_name' => "Repairs and Maintenance-Hydrants"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-15',
    		'account_name' => "Repairs and Maintenance-Other Transmission and Distribution Mains"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-16',
    		'account_name' => "Repairs and Maintenance-Other Plants"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-17',
    		'account_name' => "Repairs and Maintenance-Utility Plant Held for Future use"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 802,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '030-18',
    		'account_name' => "Repairs and Maintenance-Unclassified Utility Plant"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 804,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Buildings and Other Structures"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 804,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-01',
    		'account_name' => "Repairs and Maintenance-Source of Supply Plant Structures and Improvements"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 804,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-02',
    		'account_name' => "Repairs and Maintenance-Pumping Plant Structures and Improvements"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 804,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-03',
    		'account_name' => "Repairs and Maintenance-Water Treatment Structures and Improvements"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 804,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-04',
    		'account_name' => "Repairs and Maintenance-Transmission and Distribution Structures and Improvements"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 804,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '040-05',
    		'account_name' => "Repairs and Maintenance-Administrative Structures and Improvements"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 825,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Machinery and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 814,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '060',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Transportation Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 826,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Furnitures and Fixtures"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 826,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Service Concession Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Repairs and Maintenance-Other Property, Plant and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-01',
    		'account_name' => "Repairs and Maintenance-Laboratory Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-02',
    		'account_name' => "Repairs and Maintenance-Power Production Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-03',
    		'account_name' => "Repairs and Maintenance-Pumping Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-04',
    		'account_name' => "Repairs and Maintenance-Water Treatment Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-05',
    		'account_name' => "Repairs and Maintenance-Stores Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-06',
    		'account_name' => "Repairs and Maintenance-Communication Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-07',
    		'account_name' => "Repairs and Maintenance-Power Operated Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => '803-16',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '13',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '990-08',
    		'account_name' => "Repairs and Maintenance-Tools, Shop and Garage Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '15',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Taxes, Insurance Premiums and Other Fees(Administrative
    			Expenses)"
    		]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 844,
    		'cps_ngas_modified_chart_of_accounts' => 779,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '15',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Taxes, Duties and Licenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 844,
    		'cps_ngas_modified_chart_of_accounts' => 779,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '15',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Fidelity Bond Premiums"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 829,
    		'cps_ngas_modified_chart_of_accounts' => 781,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '15',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Insurance Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 829,
    		'cps_ngas_modified_chart_of_accounts' => 781,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '15',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Income Tax Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '16',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Labor and Wages"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '16',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Labor and Wages"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Maintenance and Operating Expenses(Administrative
    			Expenses)"
    		]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 839,
    		'cps_ngas_modified_chart_of_accounts' => 778,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Advertising, Promotional and Marketing Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 830,
    		'cps_ngas_modified_chart_of_accounts' => 777,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Printing and Publication Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 828,
    		'cps_ngas_modified_chart_of_accounts' => 782,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Representation Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 827,
    		'cps_ngas_modified_chart_of_accounts' => 766,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Transportation and Delivery Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 841,
    		'cps_ngas_modified_chart_of_accounts' => 786,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Rent/Lease Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 830,
    		'cps_ngas_modified_chart_of_accounts' => 796,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '060',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Membership Dues and Contributions to Organizations"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 830,
    		'cps_ngas_modified_chart_of_accounts' => 796,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Subscription Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 836,
    		'cps_ngas_modified_chart_of_accounts' => 841,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Donations"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 836,
    		'cps_ngas_modified_chart_of_accounts' => 841,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '120',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Directors and Committee Members' Fees"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 832,
    		'cps_ngas_modified_chart_of_accounts' => 989,
    		'account_group' => 5,
    		'major_account_group' => '02',
    		'sub_major_account_group' => '99',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Maintenance and Operating Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Financial Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Financial Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Financial Expenses(Administrative Expenses)"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 534,
    		'cps_ngas_modified_chart_of_accounts' => 996,
    		'account_group' => 5,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Interest Expenses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 843,
    		'cps_ngas_modified_chart_of_accounts' => 991,
    		'account_group' => 5,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Bank Charges"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 843,
    		'cps_ngas_modified_chart_of_accounts' => 991,
    		'account_group' => 5,
    		'major_account_group' => '03',
    		'sub_major_account_group' => '01',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Financial Charges"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '00',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Non-Cash Expenses"
    	]); 

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 503,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 991,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Investment Property"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 902,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Land Improvements"
    	]);        

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 902,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Infastructure Assets"
    	]);        

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 904,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Buildings and Other Structures"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 925,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '050',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Machinery and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 914,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '060',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Transportation Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 926,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Furniture, Fixtures and Books"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 926,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Service Concession Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => 926,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '01',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Depreciation-Other Property, Plant and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 503,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '02',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Amortization"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '02',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Amortization-Intangible Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'Various SL Accounts',
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '02',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Amortization-Service Concession-Intangible Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Loans and Recievables"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '060',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Other Recievables"
    	]);        

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Inventories"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Investment Properties"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Property, Plant and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '110',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Intangible Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '170',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Service Concession-Intangible Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 'New Account',
    		'cps_ngas_modified_chart_of_accounts' => 'New Account',
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '03',
    		'gl_account' => '990',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Impairment Loss-Other Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '04',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Losses"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 983,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '04',
    		'gl_account' => '030',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Loss on Sale of Investment Property"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 983,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '04',
    		'gl_account' => '040',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Loss on Sale of Property, Plant and Equipment"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 983,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '04',
    		'gl_account' => '070',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Loss on Sale of Tangible Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 983,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '04',
    		'gl_account' => '080',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Loss on Sale of Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 985,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '04',
    		'gl_account' => '090',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Loss of Assets"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => null,
    		'cps_ngas_modified_chart_of_accounts' => null,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '05',
    		'gl_account' => '000',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Discount and Rebates"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 539,
    		'cps_ngas_modified_chart_of_accounts' => 662,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '05',
    		'gl_account' => '010',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Other Discount"
    	]);

    	DB::table('chartofaccounts')->insert([
    		'cps_original_account_number' => 507,
    		'cps_ngas_modified_chart_of_accounts' => 667,
    		'account_group' => 5,
    		'major_account_group' => '05',
    		'sub_major_account_group' => '05',
    		'gl_account' => '020',
    		'gl_contra_account' => '0',
    		'subsidiary_ledger_account' => '000-0',
    		'account_name' => "Rebates"
    	]);
    }
}
