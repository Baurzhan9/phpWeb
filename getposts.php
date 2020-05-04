<?php
session_start();
if(isset($_SESSION['user'])){
	require_once 'db.php';
?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
	<div class="content">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="col-md-12">
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Post number</th>
						      <th scope="col">Post</th>
						      <th scope="col">Date of post</th>
						      <th scope="col">Author</th>
						      <th scope="col">More</th>
						    </tr>
						  </thead>
						  <tbody id = "result"></tbody>
						</table>		
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php } include('footer.php'); ?>