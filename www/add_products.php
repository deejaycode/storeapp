<?php

    session_start();

    $page_title = "Admin Dashboard";

    include "include/db.php";
    include "include/function.php";
    include "include/dashboard_header.php";

    checkLogin();

	$errors = [];

	$flag = ['Top-Selling', 'Trending', 'Recently Viewed'];

	define('MAX_FILE_SIZE', 2097152);

	$ext = ['image/jpeg', 'image/jpg', 'image/png'];


	
	if(array_key_exists('add', $_POST)) {

		if(empty($_POST['title'])) {
			$errors['title'] = "Enter the book title";
		}

		if(empty($_POST['author'])) {
			$errors['author'] = "Enter the book author";
		}

		if(empty($_POST['price'])){
			$errors['price'] = "Please enter book price";
		}

		if(empty($_POST['year'])) {
			$errors['year'] = "Please enter year of publication";
		}

		if(empty($_POST['flag'])) {
			$errors['flag'] = "Please select a flag";
		}

		if(empty($_POST['cat_name'])) {
			$errors['catname'] = "Select a category";
		}

		if(empty($_FILES['images']['name'])){
			$errors['images'] = "Please select a book image";
		}

		if($_FILES['images']['size'] > MAX_FILE_SIZE){
			$errors['images'] = "Image size too large";
		}

		if(!in_array($_FILES['images']['type'], $ext)) {
			$errors['images'] = "Image type not supported";

		}



		if(empty($errors)) {


			
			$img = uploadFile($_FILES, 'images', 'uploads/');
			
			if($img[0]){

				$location = $img[1];
				print_r($location); exit();
			}

			$clean = array_map('trim', $_POST);
			$clean['dest'] = $location;

			addProduct($conn, $clean);
			echo "File added successfully";

			redirect("view_products.php");

		}
	}

?>

<div class="wrapper">
		
		<hr>
		<form id="register"  action ="add_products.php" method ="POST" enctype="multipart/form-data">
			<div>
				<?php $data = displayErrors($errors, 'title');
						echo $data;

				  ?>
				<label>Title:</label>
				<input type="text" name="title" placeholder="title">
			</div>
			<div>
				<?php $data = displayErrors($errors, 'author');
						echo $data;

				?>
				<label>Author:</label>	
				<input type="text" name="author" placeholder="author">
			</div>

			<div>
				<?php $data = displayErrors($errors, 'price');
						echo $data;

				?>
				<label>Price:</label>
				<input type="text" name="price" placeholder="price">
			</div>
			<div>
				<?php $data = displayErrors($errors, 'year');
						echo $data;

				?>
				<label>Year:</label>
				<input type="text" name="year" placeholder="Year">
			</div>


			<div>
				<?php
					$data = displayErrors($errors, 'cat');
						echo $data;				

				?>

				<label>Category:</label>
				<select name="cat">
					<option>Categories</option>
						<?php
							$data = fetchCategory($conn);
							echo $data;

						?>

				</select>

			</div>

			<div>
				<?php
					$data = displayErrors($errors, 'flag');
						echo $data;				

				?>

				<label>Flag:</label>
				<select name="flag">
						<option name="">Select Flag</option>
						<?php
						  foreach ($flag as $f1) { ?>
						  	<option value="<?php echo $f1; ?>"><?php echo $f1; ?></option>
						<?php } ?>

				</select>

			</div>

			 
			<div>
				<?php $data = displayErrors($errors, 'images');
						echo $data;

				?>
				<label>Book Image:</label>	
				<input type="file" name="images">
			</div>

			<input type="submit" name="add" value="Add Product">
		</form>

	</div>

<?php

    include "include/footer.php";

?>