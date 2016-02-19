<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Business\MemberBusiness;
use App\Dal\MemberDao;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests;


class PageController extends Controller
{

    public function homepage(Request $request){

       return view('homepage');
    }

    public function manageItems(Request $request){

       return view('items');
    }


    public function dashboard(Request $request){

       return view('dashboard');
    }

    public function supplier(Request $request){

       return view('supplier');
    }  

    public function addMember(Request $request){

    	$member = new Member();
    	$memberBusiness = new MemberBusiness();

    	$member->firstName = $request->input('firstName');
    	$member->middleName = $request->input('middleName');
    	$member->lastName = $request->input('lastName');
    	$member->address = $request->input('address');

    	$memberBusiness->saveMember($member);
    }

    public function insertMember(){
    	return view('insertMember');
    }
}
