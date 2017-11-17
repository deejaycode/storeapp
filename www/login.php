<?php
	
	session_start();
	$page_title = "Login";
	include 'include/header.php';
	include 'include/db.php';
	include 'include/function.php';

			$error = [];

		if(array_key_exists('register', $_POST)){

				

				if(empty($_POST['email'])){
					$error['email'] = "Please enter email";
				}
				if(empty($_POST['password'])){
					$error['password'] = "Please enter password";
				}
				if(empty($error)){

					#do login stuff
					$removeSpace = array_map('trim',$_POST);
					$stmt = $conn->prepare("SELECT * FROM admin WHERE :e= email AND :h= password");
					$data = [
						":e"=> $_POST['email'],
						":h"=> $_POST['password'],

					];

					$stmt->execute($data);

					$count = $stmt->rowCount();

					if($count = 1){

						$result = array_values($count);

						$_SESSION['admin_id']= $result['admin_id'];
						$_SESSION['email'] = $result['email'];

						$message = "congratulations";

						header("location:home.php?message=$message");
						}
					else{

						$message = "invalid username and password";

						header("location:login.php?message=$message");
						}

					}

				}
				else{

					foreach ($error as $error){
						# code...
						echo $error.'</br>';
					}
				}
		

?>



<div class="wrapper">
		<h1 id="register-label">Admin Login</h1>
		<hr>
		<form id="register"  action ="login.php" method ="POST">
			<div>
				<?php if(isset($_POST['email'])){ echo '<span class=err>'.$error['email'].'</span>'; } ?>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<?php if(isset($_POST['password'])){ echo '<span class=err>'.$error['password'].'</span>'; } ?>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>

			<input type="submit" name="register" value="login">
		</form>

		<h4 class="jumpto">Don't have an account? <a href="register.php">register</a></h4>
	</div>

<?php

	include 'include/footer.php';

?>