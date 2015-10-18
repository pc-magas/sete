<?php 

include('db.php');


if(isset($_POST['loginaccess']) && isset($_POST['email']) && isset($_POST['pass']))
		{

					$email=$_POST['email'];
					$pass=$_POST['pass'];
 $query = mysql_query("SELECT name, surname, id  FROM `users` WHERE email='$email' AND password='$pass' ");
  $nums=mysql_num_rows($query);
   if($nums==1) {
  while($row=mysql_fetch_array($query)) { 
$user_id=$row['id'];
$user_name=$row['name'];
$user_surname=$row['surname'];

}
  $session_name = 'loginacces';   // Set a custom session name
    $secure = false;
    // This stops JavaScript being able to access the session id.
    $httponly = false;
    // Forces sessions to only use cookies.
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params( $cookieParams['lifetime'],
        $cookieParams['path'], 
        $cookieParams['domain'], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();        
      $_SESSION['user_id']=$user_id;
      $_SESSION['user_name']=$user_name;
      $_SESSION['user_surname']=$user_surname;
      header('location: index.php');
}else {
    header('location: index.php');
}

		}

     $session_name = 'loginacces';   // Set a custom session name
    $secure = false;
    // This stops JavaScript being able to access the session id.
    $httponly = false;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params( $cookieParams['lifetime'],
        $cookieParams['path'], 
        $cookieParams['domain'], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id(true);    // regenerated the session, delete the old one. 
    if(isset($_SESSION['user_id'])){
     $user_id=$_SESSION['user_id'];
     $user_name=$_SESSION['user_name'];
     $user_surname=$_SESSION['user_surname'];
 }

?>
<html style="width:100%; height:100%;" >

<head>
<meta charset="UTF-8">
	<title>Dream Planner</title></head>
<body style="background:url('background1.jpg') no-repeat; background-size:100% 100%; width:100%; height:100%; background-attachment: fixed; padding:0; margin:0;" >
			
				<div style="width:1100px; margin:auto; height:600px;" >
					<?php if(isset($_SESSION['user_id']))
{

 ?>		
 		<div style="width:300px; height:20px; margin-left:60%; color:#fff;" ><span ><?php echo $user_name; ?></span>&nbsp;<span><?php echo $user_surname; ?></span>&nbsp;<a href="logout.php" style="color:#fff;" >Logout</a></div>

					<?php if(!isset($_GET['s'])){  ?>
							<div style="margin:auto; width:260px; margin-top:10%;" >
							

					<a href="index.php" ><img src="logo.png" style="margin-left:-150px;" /></a>

								</div>
							<form method="GET" action="index.php" style=" width:500px; margin:auto; margin-top:30px;" >
							<input name="s" placeholder="I dream to do..." type="text" style="height:35px; outline:none; padding: 0px 0px 0px 10px; width:400px;"  />
							<button style="height:35px; width:80px; outline:none; margin-left:10px; background:#fff; border:none; cursor:pointer;" >Search</button>
					</form>
					<?php }else { ?>
						<div style="width:1100px; height:1100px; margin:auto; position:relative;" > 
									<div style="margin-left:500px;" >
							<p style="color:#fff;" >Διαθέσιμο Ποσό</p>
							<input type="range" min="0" max="500" oninput="updateprice(this.value);" /><span id="upprice" style="color:#fff; position:relative; top:-5px; margin-left:5px;" >30 €</span>
						</div>
						<h3 style="text-align:center; color:#fff;" >Αποτελέσματα: </h3>

						<div style="width:830px; position:relative; margin:auto; " >
<?php if(isset($_GET['s'])){ $name=$_GET['s']; $query = mysql_query("SELECT name, description, business_id, price, id, src FROM `offers` WHERE name='$name' ");
  while($row=mysql_fetch_array($query)) { $desc=$row['description']; $price=$row['price'];  $id=$row['id']; $src=$row['src']; ?>
						<div style="width:830px; box-shadow: 0px 0px 0px 1px #d3d3d3; border-radius:2px; margin-top:10px; margin-bottom:10px; height:240px; float:left; background:#fff;" >
								<h2 style="padding: 10px 0px 0px 10px; font-family:gr;" ><?php echo $row['name']; ?></h2>
							<div style="width:650px; float:left; position:relative; height:130px; " >
								<img src="<?php echo $src; ?>" style="width:130px; margin-left:10px; height:130px; float:left;" />
								<div style="position:relative; float:left; position:relative; width:240px; margin-left:20px; " >
										<p style="margin-left:10px;">Όν. Επιχ.: <?php $business_id=$row['business_id']; $query1 = mysql_query("SELECT name, place_id FROM `business` WHERE id='$business_id' ");
  while($row=mysql_fetch_array($query1)) { echo $bus_name=$row['name']; $place_id=$row['place_id'];  } ?></p>
  									<p style="margin-left:10px;" >Περιοχή: <?php $query2 = mysql_query("SELECT name FROM `places` WHERE id='$place_id' ");
  while($row=mysql_fetch_array($query2)) { echo $row['name']; } ?></p>
										<p style="margin-left:10px;">Περιγραφή: <?php echo $desc; ?></p>
										
									
								</div>
							</div>
							<a href="offers.php?id=<?php echo $id; ?>" ><div style="width:120px; cursor:pointer; background:#92c0ea; float:left;  position:relative; height:130px;" >
							
								<img src="tick.png" style="height:30px; margin-top:50px; margin-left:40px;"/>
							</div></a>
						</div>
						<?php } } ?>

 						</div>
 							</div>
					<?php } ?>

</div>
					<?php  }else { ?> 
					<div id="Login" style="width:500px; display:none; height:300px; background:#fff; box-shadow: 0px 0px 0px 2px #d3d3d3; position:fixed; margin-left:300px; margin-top:-30px;" >
													<a href="Javascript:;" onclick="document.getElementById('Login').style.display='none';" ><img src="x.png" style="margin-left:470px; cursor:pointer; height:30px;" /></a>
												<h3 style="text-align:center;" >Sign in </h3>
												<form method="POST" action="index.php" style="margin-left:20px;" >
 												<label>Email:</label>
												<input type="email" name="email" style="width:400px; height:30px; padding: 0px 0px 0px 10px; outline:none; border:none;" />
												<label>Password:</label>
												<input type="password" name="pass" style="width:380px; height:30px; margin-top:20px; padding: 0px 0px 0px 10px; outline:none; border:none;" />
												<input type="submit" name="loginaccess" style="width:450px; cursor:pointer; height:35px; margin-top:30px;" style="" value="Login" />
											</form>
		</div>
		<div id="Register" style="width:500px; display:none; height:460px; background:#fff; box-shadow: 0px 0px 0px 2px #d3d3d3; position:fixed; margin-left:300px; margin-top:-90px;" >
													<a href="Javascript:;" onclick="document.getElementById('Register').style.display='none';" ><img src="x.png" style="margin-left:470px; cursor:pointer; height:30px;" /></a>
												<h3 style="text-align:center;" >Register</h3>
												<form style="margin-left:20px;" >
 												<label>Name:</label>
												<input type="name" name="email" style="width:400px; box-shadow: 0px 0px 0px 1px #d3d3d3; height:30px; padding: 0px 0px 0px 10px; outline:none; border:none;" />
												<label>Surname:</label>
												<input type="name" name="pass" style="width:380px; box-shadow: 0px 0px 0px 1px #d3d3d3; height:30px; margin-top:20px; padding: 0px 0px 0px 10px; outline:none; border:none;" />
												<label>Age:</label>
												<input type="age" name="pass" style="width:50px; box-shadow: 0px 0px 0px 1px #d3d3d3; height:30px; margin-top:20px; padding: 0px 0px 0px 10px; outline:none; border:none;" />
													</br><label>Gender:</label>
												<select style="width:380px; height:30px; margin-top:20px;" >
													<option>-</option>
													<option>Female</option>
													<option>Male</option>
												</select>
												<label>City:</label>
												<select style="width:370px; height:30px; margin-top:20px;" ><option>-</option>
														<option>London</option>
														<option>Paris</option>
														<option>Athens</option>
												</select>
												<label>Handicap <img src="handicap.png"  style="height:20px;" />:</label>
												<select style="width:350px; height:30px; margin-top:20px;" ><option>-</option>
														<option>Yes</option>
														<option>No</option>
													
												</select>
												<input type="submit" style="width:450px; cursor:pointer; height:35px; margin-top:30px;" style="" value="Register" />
											</form>
		</div>
<div style="width:300px; height:23px; margin:auto; margin-top:20%;" ><button href="Javascript:;" onclick="Login();" style="width:100px; height:35px; outline:none; cursor:pointer; background:#fff; border:none; box-shadow: 0px 0px 0px 1px #d3d3d3;" >Login</button>&nbsp;<button href="Javascript:;" onclick="Register();" style="width:150px; height:35px; cursor:pointer; margin-left:10px; outline:none;  background:#fff; border:none; box-shadow: 0px 0px 0px 1px #d3d3d3;"  >Register</button></div>


					<?php } ?>
				
				</div>


</body>
<script>
function Login(){
	document.getElementById('Login').style.display='block';
}
function Register(){
	document.getElementById('Register').style.display='block';
}
function updateprice(typeid){
	document.getElementById('upprice').innerHTML=typeid+'€';
}
</script>
<style type="text/css">
@font-face {
  font-family: "gr";
  src: url(01.ttf) format("truetype");
} 
</style>

</html>