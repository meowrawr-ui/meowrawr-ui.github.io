<?php include('site_template.php'); ?>
					
	<?php
		
		if (htmlspecialchars($_GET["pid"])) {
			$DB_USER = "meowrawr_db-products_r";
            $DB_PASSWORD ='password';
            $dbc1 = connect_to_db($DB_USER, $DB_PASSWORD);

            $pid = $dbc1 -> real_escape_string(htmlspecialchars($_GET["pid"]));

            $stmt = $dbc1->prepare("SELECT product_id, product_name, producttype_id, product_price, product_exp, product_stock, product_imgname FROM products WHERE product_id = ?");
            $stmt->bind_param("s", $pid);
            $stmt->execute();
            $stmt->bind_result($product_id, $product_name, $producttype_id, $product_price, $product_exp, $product_stock, $product_imgname);
            $stmt->fetch();
            $stmt->close();

			echo '
				<div class="doublecolumn">
					<img class="fullwidth" src="productimgs/' . $product_imgname . '">
					<p>' . $product_name . '</p>
				</div>
				<div class="doublecolumn">
					<p>' . $str[$lang]["exp_date"] . ' (YYYY,mm,dd): ' . $product_exp . '</p>
					<p>' . $str[$lang]["price"] . ': ' . $product_price . ' CLP</p>
					<p>' . $str[$lang]["stock"] . ': ' . $product_stock . '</p>
					<form method="post"> 
						<input type="submit" name="order_button" value="' . $str[$lang]["order"] . '" /> 
					</form>
				</div>
			';
		} else {
			echo '
				<div class="singlecolumn">
					<p>' . $str[$lang]["no_product_chosen_you_can_use_the_search_tab"] . '</p>
				</div>
			';
		}
	?>

<?php echo "$footer"; ?>

