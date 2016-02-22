<?php

namespace App\Business;

use App\Http\Controllers\Controller;
use App\Business\SupplierBusiness;
use App\Dal\SupplierDao;
use App\Supplier;

	class SupplierBusiness{

		public function validateSupplier($supplier){

			//validations like regex for name, etc
			return "success";
		}

		public function saveSupplier($supplier){

			$supplierDao = new supplierDao();

			$supplierDao->saveSupplier($supplier);
			
		}
	}