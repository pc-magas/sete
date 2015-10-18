<?php
include('db.php');

if(isset($_GET['byhotels']) && isset($_GET['short'])){

			$nums=$_GET['byhotels'];

		 $query1 = mysql_query("SELECT name, src , id FROM `hotels` WHERE type_id='$nums' ");
  while($row=mysql_fetch_array($query1)) { $h_name=$row['name']; $src=$row['src'];  $id=$row['id'];
?>
   <div id="h<?php echo $id;  ?>" onclick="document.getElementById('h<?php echo $id; ?>').style.borderColor='blue'; " style="width:160px; cursor:pointer; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >
   	<img src="<?php echo $src; ?>" style="height:150px; width:160px; " />
   	<div style="position:relative; background:#000; opacity:0.7; height:65px; margin-top:-80px; z-index:100px;" >
   		<p style="color:#fff; margin-left:10px;" ><?php echo $h_name; ?> </br> Τιμή:<span id="price_up" > </span></p>
   	</div></div> 
  <?php  }

}
if(isset($_GET['bypersons']) && isset($_GET['byhotels2']) && isset($_GET['short'])){

			$nums=$_GET['bypersons'];
			$nums2=$_GET['byhotels2'];

		 $query1 = mysql_query("SELECT  price FROM `diamoni_types` WHERE hotel_id='$nums2' AND persons='$nums' ");
  while($row=mysql_fetch_array($query1)) { $price=$row['price'];  echo $price;  }


}
if(isset($_GET['byfoods']) && isset($_GET['short'])){

			$nums=$_GET['byfoods'];

		$query = mysql_query("SELECT name, src, id FROM `foods` WHERE type_id='$nums' ");
  while($row=mysql_fetch_array($query)) { $f_name=$row['name']; $src=$row['src']; $id=$row['id'];
?>
 <div id="f<?php echo $id; ?>" style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" ><img src="<?php echo $src; ?>" style="height:150px; width:160px; " /><div style="position:relative; background:#000; opacity:0.7; height:65px; margin-top:-80px; z-index:100px;" ><p style="color:#fff; margin-left:10px;" ><?php echo $f_name; ?> </br> Τιμή:<span id="price_up" > </span></p></div></div> 

<?php
}
}
if(isset($_GET['bypolitistics']) && isset($_GET['short'])){

			$nums=$_GET['bypolitistics'];

		$query = mysql_query("SELECT name, price, src, id FROM `politistics` WHERE type_id='$nums' ");
  while($row=mysql_fetch_array($query)) { $p_price=$row['price']; $p_name=$row['name']; $src=$row['src']; $id=$row['id'];   ?>

  <div id="p<?php echo $id; ?>" style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" ><img src="<?php echo $src; ?>" style="height:150px; width:160px; " /><div style="position:relative; background:#000; opacity:0.7; height:65px; margin-top:-80px; z-index:100px;" ><p style="color:#fff; margin-left:10px;" ><?php echo $p_name; ?> </br> Τιμή:<span id="price_up" > </span></p></div></div>
<?php
}
}
if(isset($_GET['byenter']) && isset($_GET['short'])){

			$nums=$_GET['byenter'];

		$query = mysql_query("SELECT name, price, src FROM `enterntainment` WHERE type_id='$nums' ");
  while($row=mysql_fetch_array($query)) { $e_name=$row['name']; $src=$row['src']; ?>

   <div id="e<?php echo $row['id']; ?>" style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" ><img src="<?php echo $src; ?>" style="height:150px; width:160px; " /><div style="position:relative; background:#000; opacity:0.7; height:65px; margin-top:-80px; z-index:100px;" ><p style="color:#fff; margin-left:10px;" ><?php echo $e_name; ?> </br> Τιμή:<span id="price_up" > </span></p></div></div>
<?php
}
}
if(isset($_GET['bynightlife']) && isset($_GET['short'])){

			$nums=$_GET['bynightlife'];

		$query = mysql_query("SELECT name, src, id FROM `nightlife` WHERE type_id='$nums' ");
  while($row=mysql_fetch_array($query)) { $n_name=$row['name']; $src=$row['src']; ?>
   <div id="n<?php echo $row['id']; ?>" style="width:160px; cursor:pointer; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" ><img src="<?php echo $src; ?>" style="height:150px; width:160px; " /><div style="position:relative; background:#000; opacity:0.7; height:65px; margin-top:-80px; z-index:100px;" ><p style="color:#fff; margin-left:10px;" ><?php echo $n_name; ?> </br> Τιμή:<span id="price_up" > </span></p></div></div>
<?php
}
}


?>