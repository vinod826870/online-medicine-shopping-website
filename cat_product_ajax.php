<?php

//fetch_item.php

$id = $_GET['cat_product'];


include('database_connection.php');

$query = "SELECT * FROM `pro_products` WHERE cat_id=".$id;

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';



 

      
	foreach($result as $row)
	{

		$output .= '
            <div class="col-md-3">
            <a href="product_details.php?pid='.$row["id"].'" >
            	<img src="admin/img/'.$row["product_image"].'" class="img-fluid" width="200"
                  height="200" /><br />
                  </a>
            	<p class="text-info">'.$row["product_name"].'</p>
            	<h2 class="text-danger">Rs '.$row["product_price"] .'</h2>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["product_name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["product_price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />

                  </div>
		';
	}
	echo $output;
      //echo $row['id'];
}
?>