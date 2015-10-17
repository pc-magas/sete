<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

$this->load->view('page_header.php')
?>

	<div style="width:800px; background:#fff; position:relative; margin:auto; height:1700px;" >
	<h2 style="text-align:center;" >Offer Title</h2>
	<div style="width:100%; height:200px;" >
			<img src=" " style="width:230px; height:200px; margin-left:20px; float:left;" />
			<div style="float:left; " >
			<p style="margin-left:10px;" >Περιοχή: 
			</p>
			<p style="margin-left:10px;" >Περιγραφή:</p>
	</div>
	</div>
	<div style="width:100%; height:200px;" > 
			<h2>&nbsp;&nbsp;&nbsp;Διαμονή: <select><option>Μονόκλινο</option><option>Δίκλινο</option><option>Τρικλινο</option></select></h2>
			<div style="width:100%;" >

				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
			</div>
	</div>
		<div style="width:100%; height:200px;" > 
			<h2>&nbsp;&nbsp;&nbsp;Φαγητό: <select><option>Fast Food</option><option>Εστιατόριο</option><option>Ταβέρνα</option></select></h2>
			<div style="width:100%;" >

				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
			</div>
	</div>
	<div style="width:100%; height:200px;" > 
			<h2>&nbsp;&nbsp;&nbsp;Πολιτισμός: <select><option>Αξιοθέατα</option><option>Μουσεία</option><option>Αρχαιολογική Χώροι</option><option>Παραδοσιακές Εκλοδηλώσεις</option></select></h2>
			<div style="width:100%;" >

				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
			</div>
	</div>
		<div style="width:100%; height:200px;" > 
			<h2>&nbsp;&nbsp;&nbsp;Ψυχαγωγία: <select><option>Κινηματογράφοι</option><option>Θέατρο</option><option>Πολυχοροι</option></select></h2>
			<div style="width:100%;" >

				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
			</div>
	</div>
		<div style="width:100%; height:200px;" > 
			<h2>&nbsp;&nbsp;&nbsp;Nightlife: <select><option>Clubs</option><option>Bars</option><option>Μουσικές Σκηνές</option></select></h2>
			<div style="width:100%;" >

				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
				<div style="width:160px; height:150px; border:2px solid; float:left; margin-left:15px; margin-right:15px;" >

				</div>
			</div>
	</div>
	<div style="width:300px; height:200px; margin-top:30px; margin-left:auto; " >
				<h3>Τελική Τιμή:</h3>

				<button style="width:300px; height:40px;" >Κράτηση</button>
	</div>

<?php
	$this->load->view('page_footer');
?>