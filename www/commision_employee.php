<?php


	class Commission_Employee extends Employee implements iPercentage

	{


			private $sales; // sales
			private $perc;


		public function __construct($name, $designation, $amountPaid, $duration, $sales, $perc){

			$this->name = $name;
			$this->designation = $designation;
			$this->amountPaid = $amountPaid;
			$this->duration = $duration;
			$this->sales = $sales;
			$this->perc = $perc;

		}


		
		/*public function calculateNewAmount($sales, $perc){

			//$result in amount

			$amountPaid = ($perc * $sales);

			return $amountPaid;


		}*/

		public function salesPercentageCommission($amountPaid){



			
		}



	}






?>