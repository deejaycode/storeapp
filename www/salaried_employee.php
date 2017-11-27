<?php


	class Salaried_Employee extends Employee


	{

		public function __construct($name, $designation, $amountPaid,$duration){

			$this->name = $name;
			$this->designation = $designation;
			$this->amountPaid = $amountPaid;
			$this->duration = $duration;
		}

	}


?>