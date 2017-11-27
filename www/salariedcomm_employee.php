<?php


	class Salaried_Commission_Employee extends Employee implements iPercentage

	{

		public function __construct($name, $designation, $amountPaid, $duration){

			$this->name = $name;
			$this->designation = $designation;
			$this->amountPaid = $amountPaid;
			$this->duration = $duration;
			
			

		}



		public function salesPercentageCommission($amountPaid){

			$result = (10/100) * $amountPaid;

			//$reward = $result + $amountPaid;

			return $reward;


		}


	}






?>