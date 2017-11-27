<?php


	class Hourly_Employee extends Employee	


	{
		private $_hourlyRate = 50;
		private $_expectedWorkHours = 40;

		public function __construct($name, $designation, $duration/*, $overtime*/){

			$this->name = $name;
			$this->designation = $designation;
			$this->duration = $duration;
			//$this->overtime = $overtime;

		}
	
		public function calculateOvertime($duration){

			return ($duration - $this->_expectedWorkHours) * $this->_hourlyRate;

		}


		public function calculateBaseSalary() {

			$totalPay = 0;
			$overtime = 0;

			if($this->duration > $this->_expectedWorkHours){
				$overtime = $this->calculateOvertime($this->duration);
			}


			$totalPay = ($this->_hourlyRate * $this->duration) + $overtime;

			return $totalPay;
		}


	}






?>