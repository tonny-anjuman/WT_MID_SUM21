<?php 
	include 'controlers/CategoryController.php';
	$categories=getAllCategories();
?>
<!--all categories status-->
<div class="center">
	<h3 class="text">All Categories</h3>
	<input type="text" placeholder="Search...." onkeyup="searchProduct(this)">
	<div id="suggesstion"></div>
	<table class="table table-stripad">
		<thead>
			<th>S1#</th>
			<th>Name</th>
			<th>Product count</th>
			<th></th>
			<th></th>
		</thead>
		</tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="editcategory.php?id='.$c["id"].'"class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
</div>
<!--All Categories ends-->
<script src="products.js"></script>
			
			
			