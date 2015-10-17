<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<script type="text/javascript" src="<?=base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/knockout-3.3.0.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/ajax_calls.js')?>"></script>
<?php
		if(isset($js))
		{
			foreach($js as $j)
			{
?>
				<script type="text/javascript" src="<?=base_url('assets/js'.$j)?>"></script>
<?php			
			}
		}
?>
</body>
</html>