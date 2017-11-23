<?php

	session_start();


	$page_title = "Admin dashboard";

	include "include/db.php";
    include "include/function.php";
	include "include/dashboard_header";

	checkLogin();

	if($_GET['book_id']){

		$book_id = $_GET['book_id'];

	}

			$item = getProduct($conn, $book_id);


		$errors = [];


		if(array_key_exists(edit, $_POST)){

			if(empty($_POST['product_name'])){

				$errors[] = "Please enter product name";
			}

			if(empty($errors)){

				$clean = array_map('trim', $_POST);
				$clean['book_id'] = $book_id;

				updateProduct($conn, $clean);

				redirect("view_products.php");
			}

			else{

				redirect("edit_products.php");
			}


		}




?>

<div class="wrapper">
		<div id="stream">

			<form id="register"  action ="" method ="POST">
				<div>
					<?php 
						$info = displayErrors($errors,'product_name');
						echo $info;
					?>
					<label>product name:</label>
					<input type="text" name="product_name" placeholder="Product name" value="<?php echo $item[1]; ?>">
				</div>
			
			 <div>
			<input type="submit" name="edit" value="Edit">
			
			</form>

		</div>

	</div>

<?php

	include "include/footer.php";
?>