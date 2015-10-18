<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

<?php foreach($data as $d)
	  {
	  	foreach($d as $dd)
		{
?>
			<p><?=$dd?></p>
<?php
		}	  	
	  }
?>
</div>