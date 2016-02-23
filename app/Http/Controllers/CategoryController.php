<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App;

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

		$category = new App\Category;

		$category->CategoryName = $request->input('add_name');

		try {
			$category->save();
		} catch (Exception $e) {
			return view('category')->with ('results', $results)->with ('message', '-1');
		}
	}

	public function updateCategory(Request $request){

		$category = new App\Category;
		$category = App\Category::find($request->input('edit_ID'));

		$category->CategoryName = $request->input('edit_name');

		try {
			$category->save();
		} catch (Exception $e) {
			return view('category')->with ('results', $results)->with ('message', '-1');
		}
	}

	public function deleteCategory(Request $request){
		$category = new App\Category;
		$category = App\Category::find($request->input('edit_ID'));
		
		try {
			$category->delete();
		} catch (Exception $e) {
			return view('category')->with ('results', $results)->with ('message', '-1');
		}
	}
}
