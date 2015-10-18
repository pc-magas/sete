<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

<?php
 
	foreach($data as $d)
	{
?>
	<div>
		<p><?=$d['name']?></p>
		<p><?=$d['src']?></p>
	</div>
<?php
		  	
	}
?>
</div>