<?php


	
	class Employee {


		protected $name;
		protected $designation;
		protected $amountPaid;
		protected $duration;

		function getName(){

			return $this->name;

		}

		function setName($name){

			$this->name = $name;
		}


		function getDesignation(){

			return $this->designation;

		}

		function setDesignation($designation){

			$this->designation = $designation;
		}




		function getAmountPaid(){

			return $this->amountPaid;

		}

		function setAmountPaid($amountPaid){

			$this->amountPaid = $amountPaid;
		}

		function getDuration(){

			return $this->duration;
		}

		function setDuration($duration){

			$this->duration = $duration;
		}


		





	}




?>