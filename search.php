<?php include('site_template.php'); ?>
						<!-- <div class="singlecolumn">
							 <form action="/action_page.php">
						      <input type="text" placeholder="Search.." name="search">
						      <button type="submit">Search</button>
						    </form>
						</div> -->
						<div class="doublecolumn">
							<a href="product.php?pid=1">
								<img class="fullwidth" src="productimgs/profusion_pastel_eyeshadow_palette.png">
							</a>
								<p>Profusion pastel eyeshadow palette<br><?php echo $str[$lang]["exp_date"]; ?> (YYYY,mm,dd): 2026-01-01 00:00:00<br><?php echo $str[$lang]["price"]; ?>: 5000 CLP<br><?php echo $str[$lang]["stock"]; ?>: 10</p>
							
						</div>
						<div class="doublecolumn">
							<a href="product.php?pid=2">
								<img class="squareimage" src="productimgs/love_liner_cinnamoroll_liquid_eyeliner.jpg">
							</a>
								<p>Love Liner Cinnamoroll liquid eyeliner<br><?php echo $str[$lang]["exp_date"]; ?> (YYYY,mm,dd): 2027-01-01 00:00:00<br><?php echo $str[$lang]["price"]; ?>: 4000 CLP<br><?php echo $str[$lang]["stock"]; ?>: 20</p>
						</div>
						
						<!--
						
						<div class="productrow">
							<div class="doublecolumn">
							<a href="product.php?pid=1">
								<img class="fullwidth" src="productimgs/profusion_pastel_eyeshadow_palette.png">
							</a>
								<p>Profusion pastel eyeshadow palette<br><?php echo $str[$lang]["exp_date"]; ?> (YYYY,mm,dd): 2026-01-01 00:00:00<br><?php echo $str[$lang]["price"]; ?>: 5000 CLP<br><?php echo $str[$lang]["stock"]; ?>: 10</p>
							
						</div>
						<div class="doublecolumn">
							<a href="product.php?pid=2">
								<img class="squareimage" src="productimgs/love_liner_cinnamoroll_liquid_eyeliner.jpg">
							</a>
								<p>Love Liner Cinnamoroll liquid eyeliner<br><?php echo $str[$lang]["exp_date"]; ?> (YYYY,mm,dd): 2027-01-01 00:00:00<br><?php echo $str[$lang]["price"]; ?>: 4000 CLP<br><?php echo $str[$lang]["stock"]; ?>: 20</p>
						</div>
						</div> -->

<?php echo "$footer"; ?>

