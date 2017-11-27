<?php # DVD class


	//include 'testproduct.php';
	
	class Book extends Product implements iDownloadable
	{	

		private $_author;

		/* @override */
		public function __construct($title, $price, $author){

			$this->_type = "Book";	
			$this->_author = $author;
			$this->_price = $price;
			$this->_title = $title;


			// call an overrridden constructor :: -> pammayim nekudotayim
			//parent::__construct($title, $price);


		}

		public function getAuthor(){

			$result = $this->_author;

			echo $result;
		}

		/* @overrride
		public function getTitle($title){

			return "hellllll";
		}*/

		public function getDescription(){

			echo '<ul>';
			echo '<li> type: '.$this->getType().'</li>';
			echo '<li> title: '.$this->getTitle().'</li>';
			echo '<li> price: '.$this->getPrice().'</li>';
			echo '<li> Author: '.$this->getAuthor().'</li>';

			echo '</ul>';
		}

		public function prepareDownloadLink(){


		}

	}

?>