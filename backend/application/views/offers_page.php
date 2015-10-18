<?php defined('BASEPATH') OR exit('No direct script access allowed');

foreach($data as $d)
{
?>
<div style="width:530px; box-shadow: 0px 0px 0px 1px #000; border-radius:2px; margin-top:10px; margin-bottom:10px; height:220px; float:left; background:#fff;" >
	<h2 style="padding: 10px 0px 0px 10px;" ><?=$d['offer_name']?></h2>
	<div style="width:400px; float:left; position:relative; height:130px;" >
			<img src="image.jpg" style="width:130px; margin-left:10px; height:130px; float:left;" />
				<div style="position:relative; float:left; position:relative;" >
					<p style="margin-left:10px;">Όν. Επιχ.:<?=$d['business_name']?>  </p>
  					<p style="margin-left:10px;" >Περιοχή: <?=$d['place_name']?></p>
					<p style="margin-left:10px;">Περιγραφή: <?=$d['description']?></p>								
				</div>
	</div>
	<a href="offers.php?id=?" >
		<div style="width:120px; cursor:pointer; background:#00FF00; float:left;  position:relative; height:130px;" >							
			<img src="tick.png" style="height:30px; margin-top:50px; margin-left:40px;"/>
		</div>
	</a>
</div>
<?php
}
?>