<?php # product class

		
		abstract class Product
		{

			protected $_title;
			protected $_price;
			protected $_type;

			// an object is an isntance of a CLASS

			public function __construct( /*$type, */$title, $price){
				
				/*$this->_type = $type;*/
				$this->_title = $title;
				$this->_price = $price;
				

			}

			function getTitle() {

				return $this->_title;
			} 

			function setTitle($title){

				$this->_title = $title;
			}

			function getPrice() {

				return $this->_price;
			} 

			function setPrice($price){

				$this->_price = $price;
			}


			function getType() {

				return $this->_type;
			} 

			function setType($type){

				$this->_type = $type;
			}

			//program to an interface not an implementation
			abstract public function getDescription(); // Defining an abstract interface





		}
	
		


?>