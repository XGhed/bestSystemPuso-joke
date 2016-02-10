<?php

namespace App\Dal;

use App\Http\Controllers\Controller;
use App\Business\MemberBusiness;
use App\Dal\MemberDao;
use App\Member;

use DB;

	class MemberDao{

		public function saveMember($member){

			//validations if not on database yet

			DB::insert("INSERT INTO members (firstName, middleName, lastName, address) values (?, ?, ?, ?)", [$member->firstName, $member->middleName, $member->lastName, $member->address]);
		}
	}