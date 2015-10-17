<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<!DOCTYPE html>
<html>
<head>
	<metaa charset="UTF-8"/>
	<title>Dream Planner</title>
	<script type="text-javascript" src="<?=base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
	<script type="text-javascript" src="<?=base_url('assets/js/knockout-3.3.0.js')?>"></script>
	<script type="text-javascript" src="<?=base_url('assets/js/ajax_calls.js')?>"></script>
	<?php
		if(isset($js))
		{
			foreach($js as $j)
			{
	?>
				<script src="<?=base_url($j)?>"></script>
	<?php			
			}
		}
	?>
</head>
<body style="background:url('back.jpg') repeat;" >