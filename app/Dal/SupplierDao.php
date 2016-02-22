<?php

namespace App\Dal;

use App\Http\Controllers\Controller;
use App\Business\SupplierBusiness;
use App\Dal\SupplierDao;
use App\Supplier;

use DB;

	class SupplierDao{

		public function saveSupplier($supplier){

			//validations if not on database yet

			$supplier->save();
		}
	}