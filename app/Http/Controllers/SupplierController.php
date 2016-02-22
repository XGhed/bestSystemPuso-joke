<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Business\SupplierBusiness;
use App\Dal\SupplierDao;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests;
use App;


class SupplierController extends Controller
{
	public function manageSuppliers(Request $request){

       $results = App\Supplier::all();

       return view('supplier')->with ('results', $results);
    }  

	public function insertSupplier(Request $request){

		$supplier = new App\Supplier;

		$supplier->SupplierName = $request->input('name');
		$supplier->Province_Address = $request->input('province');
		$supplier->City_Address = $request->input('city');
		$supplier->Barangay_Address = $request->input('barangay');
		$supplier->Street_Address = $request->input('street');
		$supplier->SupplierContactNo = $request->input('contactNo');
		$supplier->SupplierEmail = $request->input('email');

		$supplier->save();
	}

	public function deleteSupplier(Request $request){

	}
}