<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function manageSubCategory(){

       $results = App\SubCategory::all();

       return view('subcategory')->with ('results', $results);
    }

    public function confirmSubCategory(Request $request){

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
}
