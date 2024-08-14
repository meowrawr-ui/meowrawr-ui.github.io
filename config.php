<?php include('site_template.php'); ?>
					<div class="singlecolumn">
						<h1>Create account</h1>
							<form method="POST">
								<img src="sf3.gif"><label for="register_user"><?php echo $str[$lang]["username"]; ?>:</label><img src="sf.gif"><br>
								<input type="username" name="register_user" required="required"><br>
								<img src="sf2.gif"><label for="register_pass"><?php echo $str[$lang]["pass"]; ?>:</label><img src="sf4.gif"><br>
								<input type="password" name="register_pass" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="At least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
								<img src="sf5.gif"><label for="register_email"><?php echo $str[$lang]["email"]; ?>:</label><img src="sf6.gif"><br>
								<input type="email" name="register_email" required="required"><br>
								<input type="submit" value="Create account" name="register">
							</form>
						<h1><?php echo $str[$lang]["change_password"]; ?></h1>
							<form action="#">
								<img src="sf3.gif"><label for="oldpwd"><?php echo $str[$lang]["old_password"]; ?>:</label><img src="sf4.gif"><br>
								<input type="password" id="oldpwd" name="oldpwd"><br>
								<img src="sf2.gif"><label for="newpwd"><?php echo $str[$lang]["new_password"]; ?>:</label><img src="sf.gif"><br>
								<input type="password" id="newpwd" name="newpwd"><br>
								<input type="submit" value="<?php echo $str[$lang]["change_password"]; ?>">
							</form> 
						<h1><?php echo $str[$lang]["delete_account"]; ?></h1>
							<form action="#">
								<img src="sf5.gif"><label for="deluser"><?php echo $str[$lang]["account_to_delete"]; ?>:</label><img src="sf2.gif"><br>
								<input type="username" id="deluser" name="deluser"><br>
								<input type="submit" value="<?php echo $str[$lang]["delete_account"]; ?>">
							</form>
						<h1><?php echo $str[$lang]["change_campaign"]; ?></h1>
							<form action="#">
								<img src="sf2.gif"><label for="campaignimg1"><?php echo $str[$lang]["choose_left_column_campaign"]; ?></label><img src="sf4.gif"><br>
								<select name="leftcampaign" id="leftcampaign">
									<option value="sale1">Precious glitter makeup</option>
									<option value="sale2">Anniversary off</option>
									<option value="sale3">Nail paint</option>
									<option value="sale4">Christmas off</option>
								</select><br>
								<img src="sf6.gif"><label for="campaignimg2"><?php echo $str[$lang]["choose_right_column_campaign"]; ?></label><img src="sf3.gif"><br>
								<select name="rightcampaignimg2" id="rightcampaign">
									<option value="sale1">Precious glitter makeup</option>
									<option value="sale2">Anniversary off</option>
									<option value="sale3">Nail paint</option>
									<option value="sale4">Christmas off</option>
								</select><br>
								<input type="submit" value="<?php echo $str[$lang]["change_campaign"]; ?>">
							</form>
						<h1><?php echo $str[$lang]["create_campaign"]; ?></h1>
							<form action="/action_page.php">
								<img src="sf2.gif"><label for="campaignimg"><?php echo $str[$lang]["image_of_new_campaign"]; ?>:</label><img src="sf4.gif"><br>
								<input type="file" id="campaignimg" name="campaignimg"><br>
								<img src="sf6.gif"><label for="campaigntext"><?php echo $str[$lang]["text_of_new_campaign"]; ?>:</label><img src="sf.gif"><br>
								<input type="text" id="campaigntext" name="campaigntext"><br>
								<img src="sf4.gif"><label for="campaignname"><?php echo $str[$lang]["name_of_new_campaign"]; ?>:</label><img src="sf3.gif"><br>
								<input type="text" id="campaignname" name="campaignname"><br>
								<input type="submit" value="Submit campaign">
							</form>
						<h1><?php echo $str[$lang]["delete_campaign"]; ?></h1>
							<img src="sf4.gif"><label for="campaignimg2"><?php echo $str[$lang]["choose_campaign_to_delete"]; ?></label><img src="sf6.gif"><br>
							<form action="/action_page.php">
								<select name="delcampaign" id="delcampaign">
									<option value="sale1">Precious glitter makeup</option>
									<option value="sale2">Anniversary off</option>
									<option value="sale3">Nail paint</option>
									<option value="sale4">Christmas off</option>
								</select><br>
								<input type="submit" value="<?php echo $str[$lang]["delete_campaign"]; ?>">
							</form>
						<h1><?php echo $str[$lang]["logistics"]; ?></h1>
						<img src="sf2.gif"><table>
							<tr>
								<th>Order ID</th>
								<th>Product Name</th>
								<th>Product ID</th>
								<th>User Name</th>
								<th>User ID</th>
								<th>Tracking ID</th>
							</tr>
							<tr>
								<td>OID00000000</td>
								<td>Make up glitter pack</td>
								<td>PID00000000</td>
								<td>Test</td>
								<td>UID00000000</td>
								<td><form action="#">
								<input type="text" id="trackingid" name="trackingid">
								<input type="submit" value="Submit tracking ID"></td></form>
							</tr>
							</table><img src="sf5.gif">

						<h1><?php echo $str[$lang]["ban_account"]; ?></h1>
							<form action="#">
								<img src="sf6.gif"><label for="banuser"><?php echo $str[$lang]["account_to_ban"]; ?>:</label><img src="sf.gif"><br>
								<input type="username" id="banuser" name="banuser"><br>
								<input type="submit" value="<?php echo $str[$lang]["ban_account"]; ?>">
							</form>
						<h1><?php echo $str[$lang]["stock_of_products"]; ?></h1>
							<img src="sf3.gif"><table>
								<tr>
									<th>Product Name</th>
									<th>Product ID</th>
									<th>Product Codebar</th>
									<th>Product Exp. date</th>
									<th>Product Stock Nº</th>
									<th>Product IMG name</th>
								</tr>
								<tr>
									<td>Make up glitter pack</td>
									<td>PID00000000</td>
									<td>CODE000000000000</td>
									<td><input type="date" id="stocknumber" name="stocknumber" value="01/01/2025" style="width:125px;"><br>
										<input type="submit" value="Update"></td>
									<td><input type="number" id="stocknumber" name="stocknumber" value="20" style="width:50px;"><br>
										<input type="submit" value="Update"></td>
									<td>glitterpack.png</td>
								</tr>
							</table><img src="sf5.gif">
					</div>
<?php echo "$footer"; ?>

