<?php

	session_start();

	$page_title= "view category";
	include "include/db.php";
	include "include/function.php";
	include "include/dashboard_header.php";


	checkLogin();



?>

	<div class="wrapper">
		<div id="stream">
			<table id="tab">
				<thead>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Price</th>
						<th>Category</th>
						<th>Image</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
				</thead>
				<tbody>
					<?php

						
					?>
					

          		</tbody>
			</table>
		</div>

		<div class="paginated">
			<a href="#">1</a>
			<a href="#">2</a>
			<span>3</span>
			<a href="#">2</a>
		</div>
	</div>


<?php

 include "include/footer.php";

 ?>