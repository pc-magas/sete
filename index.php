<?php
//include('db.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF8">
	<title>Dream Planner</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="./knockout-3.3.0.js"></script>
<script>

var url="./backend/index.php/offers/get/json";

var get_offers=function(keyword,price,success_cb,error_cb,alwayscb)
{
	var postdata={'s':keyword};

	if(typeof price !=='undefined' ) postdata['price'];
	$.get(url,postdata)
	.done(function(data)
	{
		data=data.data;

		if(typeof success_cb==='function') success_cb(data);
	})
	.always(function(data)
	{
		if(typeof alwayscb==='fuunction') alwayscb(data);
	})
	.error(function(data)
	{
		if(typeof error_cb === 'function') error_cb(data);
	});
};

function Offer(data,clickCB)
{
	var self=this;
	self.order_name=ko.observable(data.offer_name);
	self.business=ko.observable(data.business_name);
	self.price=ko.observable(data.price);
	self.description=ko.observable(data.description);
	self.place_id=ko.observable(parseInt(data.place_id));
	self.place_name=ko.observable(parseInt(data.place_name));
	self.g_long=ko.observable(data['long']);
	self.g_lat=ko.observable(data['lat']);

	self.clickAction=function(self)
	{
		if(typeof clickCB === 'function') clickCB(self);
	}

};


function IndexViewmodel()
{
	var self=this;

	self.searchTerm=ko.observable();
	self.offers=ko.observableArray();

	self.searchTerm.subscribe(function(data)
	{
		console.log("Changed")
		get_offers(data,null,
		function(data)
		{
			var offers=[];
			ko.utils.arrayForEach(data,function(d)
			{
				var last_offer=new Offer(d,function(offer)
				{
					self.searchTerm(offer.order_name());
				});
				offers.push(last_offer);
			});
			self.offers(offers);
		},
		null,
		function(data)
		{

		});
	});


}

$(document).ready(function()
{
	var indexVm=new IndexViewmodel();
	ko.applyBindings(indexVm);
});
</script>

</head>
<body style="background:url('back.jpg') repeat;" >

<div style="width:1100px; margin:auto; height:600px;" >

					<?php //if(!isset($_GET['s']))
					      //{
					?>
							<div style="margin:auto; width:260px; margintop:10%;" >
					<a href="index.php" ><img src="logo.png" /></a>

								</div>
							<form method="GET" action="index.php" style=" width:500px; margin:auto; margintop:30px;" >
							<input name="s" data-bind="value:searchTerm,valueUpdate:'keyup'" placeholder="What do you want to do?" type="text" style="height:35px; outline:none; padding: 0px 0px 0px 10px; width:400px;"  />
							<button style="height:35px; width:80px; outline:none; marginleft:10px; background:#fff; border:none; cursor:pointer;" >Search</button>
					</form>
					<ul data-bind="foreach:offers">
						<li>
							<a data-bind="click:clickAction"><span data-bind="text:order_name"></span></a>
						</li>
					</ul>
					<?php //}else { ?>
					<!--	<div style="width:1100px; height:1100px; margin:auto; background:#fff; position:relative;" > -->
					<!--	<h3 style="textalign:center;" >Αποτελέσματα: </h3>

						<div style="width:530px; position:relative; margin:auto; " >
<?php //if(isset($_GET['s'])){ $name=$_GET['s']; $query = mysql_query("SELECT name, description, business_id, price, id FROM `offers` WHERE name='$name' ");
  //while($row=mysql_fetch_array($query)) { $desc=$row['description']; $price=$row['price'];  $id=$row['id']; ?>
						<div style="width:530px; boxshadow: 0px 0px 0px 1px #000; borderradius:2px; margintop:10px; marginbottom:10px; height:220px; float:left; background:#fff;" >
								<h2 style="padding: 10px 0px 0px 10px;" ><?php //echo $row['name']; ?></h2>
							<div style="width:400px; float:left; position:relative; height:130px;" >
								<img src="image.jpg" style="width:130px; marginleft:10px; height:130px; float:left;" />
								<div style="position:relative; float:left; position:relative;" >
										<p style="marginleft:10px;">Όν. Επιχ.: <?php //$business_id=$row['business_id']; $query1 = mysql_query("SELECT name, place_id FROM `business` WHERE id='$business_id' ");
//  while($row=mysql_fetch_array($query1)) { echo $bus_name=$row['name']; $place_id=$row['place_id'];  } ?></p>
  									<p style="marginleft:10px;" >Περιοχή: <?php //$query2 = mysql_query("SELECT name FROM `places` WHERE id='$place_id' ");
  //while($row=mysql_fetch_array($query2)) { echo $row['name']; } ?></p>
										<p style="marginleft:10px;">Περιγραφή: <?php echo $desc; ?></p>


								</div>
							</div>
							<a href="offers.php?id=<?php echo $id; ?>" ><div style="width:120px; cursor:pointer; background:#00FF00; float:left;  position:relative; height:130px;" >

								<img src="tick.png" style="height:30px; margintop:50px; marginleft:40px;"/>
							</div></a>
						</div>
						<?php //} } ?>

 						</div>
 							</div>
					<?php //} ?>
				</div>-->


</body>

</html>
