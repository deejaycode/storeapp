<?php # DVD class


	//include 'testproduct.php';
	
	class DVD extends Product
	{

		private $duration;


		/* @override */
		public function __construct($title, $price, $duration){

			$this->_type = "DVD";	
			$this->_title = $title;
			$this->_price = $price;
			$this->_duration = $duration;


			// call an overrridden constructor :: -> pammayim nekudotayim
			parent::__construct($title, $price);

		}

		public function getDuration(){

			return $this->_duration;
		}

		public function getDescription(){


			echo '<ul>';
			echo '<li> type: '.$this->getType().'</li>';
			echo '<li> title: '.$this->getTitle().'</li>';
			echo '<li> price: '.$this->getPrice().'</li>';
			echo '<li> Duration: '.$this->getDuration().'</li>';

			echo '</ul>';
		}

	}

?>