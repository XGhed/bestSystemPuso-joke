<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function manageCategory(){

       $results = App\Category::all();

       return view('category')->with ('results', $results);
    }

    public function confirmCategory(Request $request){

		if (isset($_POST['add'])) {
			$this->insertCategory($request);
			$results = App\Category::all();
			return view('category')->with ('results', $results)->with ('message', '1');
		}
		elseif (isset($_POST['edit'])) {
	        $this->updateCategory($request);
	        $results = App\Category::all();
			return view('category')->with ('results', $results)->with ('message', '2');
	    }
	    elseif (isset($_POST['delete'])) {
	        $this->deleteCategory($request);
	        $results = App\Category::all();
			return view('category')->with ('results', $results)->with ('message', '3');
	    }
    }

    public function insertCategory(Request $request){

		$supplier = new App\Category;

		$supplier->SupplierName = $request->input('add_name');

		try {
			$category->save();
		} catch (Exception $e) {
			return view('category')->with ('results', $results)->with ('message', '-1');
		}
	}
}
