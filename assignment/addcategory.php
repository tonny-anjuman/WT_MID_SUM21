<?php 
	include 'controlers/CategoryController.php';
?>
<!--addproduct status-->
	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form_group">
				<h4 class="text">Name</h4>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group text-center">
			<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">
		</div>
	</form>
</div>

<!--addproduct ends-->
