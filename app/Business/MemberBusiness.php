<?php

namespace App\Business;

use App\Http\Controllers\Controller;
use App\Business\MemberBusiness;
use App\Dal\MemberDao;
use App\Member;

	class MemberBusiness{

		public function validateMember($member){

			//validations like regex for name, etc
			return "success";
		}

		public function saveMember($member){

			$memberDao = new memberDao();

			$memberDao->saveMember($member);
			
		}
	}