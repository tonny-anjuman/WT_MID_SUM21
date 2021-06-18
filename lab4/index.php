<?php
	$name="";
	$err_name="";
	$user_name="";
	$err_user_name="";
	$password="";
	$err_password="";
	$confirm_Password="";
	$err_confirm_password="";
	$email="";
	$err_email="";
	$phone="";
    $err_phone="";
	$phone_code="";
	$address="";
	$err_address="";
	$city="";
	$state="";
	$err_city_state="";
	$postal_code="";
	$err_postal_code="";
	$input_day="";
	$input_month="";
	$input_year="";
	$err_input_birthday="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$abouts=[];
	$err_abouts="";
	$bio="";
	$err_bio="";
	
	
	$hasError=false;
	$year=array(2001,2002,2003,2004,2005,2006,2007,2008,2009,2010);
	$month=array("January","February","March","April","May","June","July","August","September","Octobeer","November","December");
	$day= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	
	
	
	function aboutExist($about){
		global $abouts;
		foreach($abouts as $a){
			if($a == $about) return true;
		}
		return false;
	}
	
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="name required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["user_name"])){
			$hasError = true;
			$err_user_name="username required";
		}
		else if(strlen($_POST["user_name"]) <= 5){
			$hasError = true;
			$err_user_name="user_name must contain >5 character";
		}
		else if(strpos($_POST["user_name"],' ') !==false){
			$err_user_name="space not allow";
		}
		
		else{
			$user_name = $_POST["user_name"];
		}
		
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="password required";
		}
		else if(strlen($_POST["password"]) <= 7){
			$hasError = true;
			$err_password="password must contain >7 character";
		}
		else{
			 if(strpos($_POST["password"],"#") ==false){
				$err_password="must contain at least # character";
			}
			else if(strpos($_POST["password"],"?") ==false){
				$err_password="must contain at least ? character";
			}
			else{
				$password = $_POST["password"];
			}
		}
		if(empty($_POST["confirm_Password"])){
			$hasError = true;
			$err_confirm_password="confirm Password required";
		}
		else{
				$confirm_Password = $_POST["confirm_Password"];
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email="email Required";
		}
        else if(strpos($_POST["email"],"@") == false){
            $hasError = true;
			$err_email="Email must contain @ character";
        }
        else if(strpos($_POST["email"],".") == false){
            $hasError = true;
			$err_email="Email must contain . character";
        }
        else{
            $email=$_POST["email"];
        }
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="phone required";
		}
		else if(empty($_POST["phone_code"])){
			$hasError = true;
			$err_phone="code required";
		}
		else if(is_numeric($_POST["phone"]) == false){
            $hasError = true;
			$err_phone="phone must contain number";
        }
		else if(is_numeric($_POST["phone_code"]) == false){
            $hasError = true;
			$err_phone="code must contain number";
        }
		else{
            $phone=$_POST["phone"];
			$phone_code=$_POST["phone_code"];
        }
		if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address=$_POST["address"];
		}
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city_state="Required";
		}
		else if(empty($_POST["state"])){
			$hasError = true;
			$err_city_state="Required";
		}
		else{
			$city=$_POST["city"];
			$state=$_POST["state"];
		}
		if(empty($_POST["postal_code"])){
			$hasError = true;
			$err_postal_code="Postal Code Required";
		}
		else if(is_numeric($_POST["postal_code"]) == false){
            $hasError = true;
			$err_postal_code="Postal Code must contain number";
        }
		else{
			$postal_code=$_POST["postal_code"];
		}
		if (!isset($_POST["input_day"])){
			$hasError = true;
			$err_input_birthday="birth date not select";
		}
		if (!isset($_POST["input_month"])){
			$hasError = true;
			$err_input_birthday="birth date not select";
		}
		if (!isset($_POST["input_year"])){
			$hasError = true;
			$err_input_birthday="birth date not select";
		}
		else{
			$input_day = $_POST["input_day"];
			$input_month = $_POST["input_month"];
			$input_year = $_POST["input_year"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender not select";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["abouts"])){
			$hasError = true;
			$err_abouts="not select";
		}
		else{
			$abouts = $_POST["abouts"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio empty";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["profession"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["hobbies"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
		//we will otherwise DB CRUD or authenticate
		///header("Location: index.php");
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				<tr>
					<td align="right">Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>"> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>: <input type="text" name="user_name" value="<?php echo $user_name; ?>"></td>
					<td><span> <?php echo $err_user_name;?> </span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>"></td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				
				<tr>
					<td align="right">Confirm Password</td>
					<td>: <input type="Password" name="confirm_Password" value="<?php echo $confirm_Password; ?>"></td>
					<td><span> <?php echo $err_confirm_password;?> </span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
                <tr>
					<td align="right">Phone</td>
					<td>: <input style="width: 55px" type="text" placeholder="code" name="phone_code" value="<?php echo $phone_code; ?>"> - <input placeholder="Number" style="width:109px" type="text" name="phone" value="<?php echo $phone; ?>"></td>
					<td><span> <?php echo $err_phone;?> </span></td>
				</tr>
				<tr>
					<td align="right">Address</td>
					<td>: <input type="text" name="address" placeholder="Street Address" value="<?php echo $address; ?>"></td>
					<td><span> <?php echo $err_address;?> </span></td>
				</tr>
				<tr>
					<td></td>
					<td> <input style="width: 70px" type="text" name="city" placeholder="City" value="<?php echo $city; ?>"> - <input style="width:95px" type="text" name="state" placeholder="State" value="<?php echo $state; ?>"></td>
					<td><span> <?php echo $err_city_state;?> </span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="postal_code" placeholder="Postal/Zip Code" value="<?php echo $postal_code; ?>"></td>
					<td><span> <?php echo $err_postal_code;?> </span></td>
				</tr>
				<tr>
					<td align="right">Birth Date</td>
					<td>: <select name="input_day">
							<option disabled selected>Day</option>
							<?php 
								foreach($day as $d){
									if($d == $input_day) 
										echo "<option selected>$d</option>"; 
									else 
										echo "<option>$d</option>";}
							?>
						</select>
						<select name="input_month">
							<option disabled selected>Month</option>
								<?php 
									foreach($month as $m){
										if($m == $input_month) 
											echo "<option selected>$m</option>"; 
										else  
											echo "<option>$m</option>";}
								?>
							</select>
							<select name="input_year">
							<option disabled selected>Year</option>
								<?php 
									foreach($year as $y){
										if($y == $input_year) 
											echo "<option selected>$y</option>"; 
										else  
											echo "<option>$y</option>";}
								?>
							</select></td>   
					<td><span> <?php echo $err_input_birthday;?> </span></td>
				</tr>
				
				<tr>
					<td align="right">Gender</td>
					<td>: <input type="radio" name="gender" value="Male" 
						<?php 
							if($gender=="Male") 
								echo "checked"; 
							?>> Male 
						<input type="radio" name="gender" value="Female"
						<?php 
							if($gender=="Female") 
								echo "checked"; 
							?>> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td align="right">Where did you hear<br>about us?</td>
					<td><input type="checkbox" name="abouts[]" value="A Friend or Colleague"
						<?php if(aboutExist("A Friend or Colleague")) 
							echo "checked";
						?>> A Friend or Colleague<br>
					<input type="checkbox" name="abouts[]" value="Google"
						<?php if(aboutExist("Google")) 
							echo "checked";
						?>> Google<br>
					<input type="checkbox" name="abouts[]" value="Blog Post"
						<?php if(aboutExist("Blog Post")) 
							echo "checked";
						?>> Blog Post<br>
					<input type="checkbox" name="abouts[]" value="News Article"
						<?php if(aboutExist("News Article")) 
							echo "checked";
						?>> News Article
					</td>
					<td><span> <?php echo $err_abouts;?> </span></td>
				</tr>
				<tr>
					<td align="right">Bio :</td>
					<td><textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="register"></td>
				</tr>
			</table>	
		</fieldset>
		</form>
	</body>
</html>