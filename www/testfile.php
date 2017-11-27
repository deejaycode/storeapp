<?php
	
	include 'downloadable.php';
	include 'testproduct.php';

	include 'dvd.php';

	include 'testbook.php';



	// create a new instance/copy
	//$product = new Product("Book", "Measuring time ",75);
	//$product2 = new Product("DVD", "Iorigins", 100);

	//$product->title = "Starwars"; this modified the property which is a bad type

	//$product->setTitle("Starwars");

	//$productTitle = $product->getTitle();
	//$product accesses an object in memory

	//echo $productTitle;


	//echo '<hr>';

	//$product2->setTitle("need for speed");
	//$productTitle2 = $product2->getTitle();
	//echo $productTitle2;

	//echo '<hr>';

	$book = new Book("waiting for an angel", 500, "Helon Habila");

	$bookTitle = $book->getTitle();

	$bookType = $book->getType();

	//$bookAuthor = 
	$book->getAuthor();

	echo $bookTitle;
	echo "<br/>";
	echo $bookType;
	echo "<br/>";
	//echo $bookAuthor;

	$book->getDescription();




?>