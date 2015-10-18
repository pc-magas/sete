<?php

include('db.php');
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
<html>

<head><title>Dream Planner</title></head>
<body style="background:url('background2.jpg') no-repeat; background-size:100% 100%; width:100%; height:100%; background-attachment: fixed; padding:0; margin:0;" >
 		<div style="width:300px; height:20px; margin-left:60%;" ><span style="  font-family:gr; "><?php echo $user_name; ?></span>&nbsp;<span style="  font-family:gr;" ><?php echo $user_surname; ?></span>&nbsp;<a href="logout.php" >Logout</a></div>

	<div style="width:800px; background:#fff; position:relative; margin:auto; height:2100px;" >
		<?php if(isset($_GET['id'])){ $idp=$_GET['id']; $query = mysql_query("SELECT name, description, business_id, price FROM `offers` WHERE id='$idp' ");
  while($row=mysql_fetch_array($query)) { $b_id=$row['business_id']; $desc=$row['description']; ?>
	<h2 style="text-align:center; font-size:2.5em; font-family:gr; position:relative; top:7px;" ><?php echo $row['name']; ?></h2>
	<div style="width:100%; height:200px;" >
			<img src="rafting.jpg" style="width:230px; height:200px; margin-left:20px; float:left;" />
			<div style="float:left; width:400px; " >
			<p style="margin-left:10px;  font-family:gr;" >Περιοχή: <?php $query = mysql_query("SELECT name, place_id FROM `business` WHERE id='$b_id' ");
  while($row=mysql_fetch_array($query)) {  $p_id=$row['place_id']; $query2 = mysql_query("SELECT name FROM `places` WHERE id='$p_id' ");
  while($row=mysql_fetch_array($query2)) {  echo $row['name']; } } ?>
			</p>
			<p style="margin-left:10px;  font-family:gr;" >Όνομα Επιχείρησης: <?php $query = mysql_query("SELECT name FROM `business` WHERE id='$b_id' ");
  while($row=mysql_fetch_array($query)) {  echo $row['name']; } ?>
			</p>
			<p style="margin-left:10px;  font-family:gr;" >Περιγραφή: <?php echo $desc; ?></p>
	</div>
	<div style="float:left; cursor:pointer; width:130px; background:#92c0ea; height:130px;" >

					<h2 style="text-align:center; color:#fff;  font-family:gr;" >Τιμή</h4>
							<h3 style="text-align:center; color:#fff;  font-family:gr;" >50 Ευρώ</h3>
	</div>

	</div>

	<?php  } } ?>
	<div style="width:100%; height:200px; margin-top:20px;" > 

			<div style="width:800px; height:50px; " ><span style="float:left;  font-family:gr;">&nbsp;&nbsp;&nbsp;Διαμονή: </span><select onchange="update_hotels(this.value); document.getElementById('persons').style.display='block';" style="width:150px; float:left; height:25px; box-shadow: 0px 0px 0px 2px #d3d3d3; border:none;" ><option>-</option><option value="1" >Hotel</option><option value="2" >Hostel</option><option value="3" >Airbnb</option></select></h2>
			 <div  id="persons" style="display:none; float:left; " ><span style="font-size:15px; font-family:gr;" >Άτομα</span><select  onchange="update_persons(this.value);" ><option>-</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option></select></div>	<div style=" height:40px; float:left; margin-left:30px; margin-top:-10px;" > &nbsp; &nbsp; <span>Διαθέσιμο Ποσό</span></br><input type="range" id="yourpice" name="yourprice" value="50" min="0" max="500" oninput="yourprice(this.value);" style="margin-left:10px;"  /><span name="rshow" id="rshow" style="top:-5px; position:relative;" >50 €</span> <button style="margin-left:50px; height:35px; position:relative; outline:none; cursor:pointer; top:-20px; background:#fff; border:none; box-shadow: 0px 0px 0px 2px #d3d3d3;" ><span style="position:relative; top:-5px;" >Ενδιαφέρομαι</span>&nbsp;<img src="hart.png" style="height:20px;" /></button> </div>
		</div>
					<div id="hotels" style="width:100%;" >

			</div>
	</div>
		<div style="width:100%; height:220px; border-bottom:1px solid; border-color:#ccc;" > 
				<div style="width:800px; height:50px; margin-top:50px;" ><span style="float:left;  font-family:gr;">&nbsp;&nbsp;&nbsp;Εστίαση: </span><select onchange="update_foods(this.value); document.getElementById('persons').style.display='block';" style="width:150px; float:left; height:25px; box-shadow: 0px 0px 0px 2px #d3d3d3; border:none;" ><option>-</option><option value="1" >Εστιάτοριο</option><option value="2" >Ταβέρνα</option></select></h2>
			 <div  id="persons" style="display:none; float:left; " ><span style="font-size:15px;  font-family:gr;" >Άτομα</span><select  onchange="update_persons(this.value);" ><option>-</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option></select></div>	
		</div>	<div id="foods" style="width:100%;" >

			</div>

          	</div>
	<div style="width:100%; height:220px; border-bottom:1px solid; border-color:#ccc;" > 
				<div style="width:800px; height:50px; margin-top:50px;" ><span style="float:left;">&nbsp;&nbsp;&nbsp;Πολιτισμός: </span><select onchange="update_politistics(this.value); document.getElementById('persons').style.display='block';" style="width:150px; float:left; height:25px; box-shadow: 0px 0px 0px 2px #d3d3d3; border:none;" ><option>-</option><option value="1" >Αξιοθέατρα</option>
					<option value="2" >Μουσεία</option>
			<option value="2" >Αρχαιολογικοί Χώροι</option>
			<option value="2" >Παραδοσιακές Εκδηλώσεις</option>
				</select></div>	<div id="politistics" style="width:100%;" >

		
			</div>
	</div>
		<div style="width:100%; height:220px; border-bottom:1px solid; border-color:#ccc;" > 
			<div style="width:800px; height:50px; margin-top:50px;" ><span style="float:left;">&nbsp;&nbsp;&nbsp;Ψυχαγωγία: </span><select onchange="update_enter(this.value); document.getElementById('persons').style.display='block';" style="width:150px; float:left; height:25px; box-shadow: 0px 0px 0px 2px #d3d3d3; border:none;" ><option>-</option>
				<option value="1" >Κινηματογράφοι</option>
					<option value="2" >Θέατρα</option>
			<option value="3" >Πολυχώροι</option>

				</select>
			</div><div id="enters" style="width:100%;" >

		
			</div>
	</div>
		<div style="width:100%; height:220px; border-bottom:1px solid; border-color:#ccc;" > 
		<div style="width:800px; height:50px; margin-top:50px;" ><span style="float:left;">&nbsp;&nbsp;&nbsp;Nightlife: </span><select onchange="update_nightlife(this.value); document.getElementById('persons').style.display='block';" style="width:150px; float:left; height:25px; box-shadow: 0px 0px 0px 2px #d3d3d3; border:none;" ><option>-</option>
			<option value="1" >Clubs</option>
					<option value="2" >Bars</option>
			<option value="3" >Μουσικές Σκηνές</option>

				</select>
			</div>	
            <div id="nightlife" style="width:100%;" >

		
			</div>
	</div>
    <div id="enal" style="width:100%; display:none; height:270px; margin-top:50px;  font-family:gr;" >
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(!) Εναλλακτική Επιλογή:</h3> 
                <div style="width:150px; height:200px; margin-left:30px; float:left;" >
                        <h3>Διαμονή</h3>
                        <img src=" " style="height:100px; width:100px;" />
                            <p>Τιμή:</p>
                </div>
                 <div style="width:150px; height:200px; float:left;" >
           <h3>Εστίαση</h3>
                        <img src=" " style="height:100px; width:100px;" />
                            <p>Τιμή:</p>

                </div>
                <div style="width:150px; height:200px; float:left;" >
           <h3>Πολιτισμός</h3>
                        <img src=" " style="height:100px; width:100px;" />
                            <p>Τιμή:</p>

                </div>
                <div style="width:150px; height:200px; float:left;" >
           <h3>Ψυχαγωγία</h3>
                        <img src=" " style="height:100px; width:100px;" />
                            <p>Τιμή:</p>

                </div>
          <div style="width:150px; height:200px; float:left;" >
           <h3>NightLife</h3>
                        <img src=" " style="height:100px; width:100px;" />
                            <p>Τιμή:</p>

                </div>
    </div>
	<div style="width:300px; height:200px; margin-top:30px; margin-left:auto; " >
				<h3>Τελική Τιμή:</h3>
                    <button onclick="document.getElementById('enal').style.display='block';" style="margin-bottom:30px; border:none; background:#fff; box-shadow: 0px 0px 0px 2px #ccc; height:25px; outline:none; margin-left:120px; cursor:pointer;" >Δώσε μου άλλες Επιλογές</button>

				<button style="width:300px; margin-left:-10px; height:40px;" >Κράτηση</button>
	</div>
	<input type="text" style="display:none;" id="previus"  />
</body>
<script type="text/javascript">

function update_hotels(typeid) {
  var action='update';

      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('hotels').innerHTML = xmlhttp.responseText;;
            }
        }
        xmlhttp.open("GET","realtime.php?byhotels="+typeid+"&short="+action,true);
        xmlhttp.send();
       
}
function update_foods(typeid) {
  var action='update';

      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('foods').innerHTML = xmlhttp.responseText;;
            }
        }
        xmlhttp.open("GET","realtime.php?byfoods="+typeid+"&short="+action,true);
        xmlhttp.send();
       
}
function update_politistics(typeid) {
  var action='update';

      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('politistics').innerHTML = xmlhttp.responseText;;
            }
        }
        xmlhttp.open("GET","realtime.php?bypolitistics="+typeid+"&short="+action,true);
        xmlhttp.send();
       
}

function update_enter(typeid) {
  var action='update';

      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('enters').innerHTML = xmlhttp.responseText;;
            }
        }
        xmlhttp.open("GET","realtime.php?byenter="+typeid+"&short="+action,true);
        xmlhttp.send();
       
}
function update_persons(typeid) {
	hotel_id=document.getElementById('hotels22').value;
  var action='update';

      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('price_up').innerHTML = xmlhttp.responseText;;
            }
        }
        xmlhttp.open("GET","realtime.php?byhotels2="+hotel_id+"&bypersons="+typeid+"&short="+action,true);
        xmlhttp.send();
       
}
function update_nightlife(typeid) {
  var action='update';

      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('nightlife').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","realtime.php?bynightlife="+typeid+"&short="+action,true);
        xmlhttp.send();

       
}
function yourprice(typeid) {
document.getElementById('rshow').innerHTML=typeid+'€';
       
}
function fprice(typeid) {
document.getElementById('fshow').innerHTML=typeid+'€';
       
}
function eprice(typeid) {
document.getElementById('eshow').innerHTML=typeid+'€';
       
}
function pprice(typeid) {
document.getElementById('pshow').innerHTML=typeid+'€';
       
}

</script>
<style type="text/css">

@font-face {
  font-family: "gr";
  src: url(01.ttf) format("truetype");
} 

</style>
</html>