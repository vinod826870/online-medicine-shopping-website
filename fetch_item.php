<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM `pro_products`";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
      
	foreach($result as $row)
	{
		$output .= '
            <div class="item item-carousel">
                  <div class="products">
                        
      <div class="product">
		
            	<img src="admin/img/'.$row["product_image"].'" class="img-fluid" width="200"
                  height="180" /><br />
            	<h4 class="text-info">'.$row["product_name"].'</h4>
            	<h4 class="text-danger">$ '.$row["product_price"] .'</h4>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["product_name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["product_price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />

                  </div>
                  </div>
                  </div>
            
		';
	}
	echo $output;
}
?>