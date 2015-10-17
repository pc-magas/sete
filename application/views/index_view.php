<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

$this->load->view('page_heade.php');
?>

<div style="width:1100px; margin:auto; height:600px;" >

<?php if(!isset($_GET['s']))
{  ?>
		<div style="margin:auto; width:260px; margin-top:10%;" >
					<a href="index.php" ><img src="logo.png" /></a>

								</div>
							<form method="GET" action="index.php" style=" width:500px; margin:auto; margin-top:30px;" >
							<input name="s" placeholder="What do you want to do?" type="text" style="height:35px; outline:none; padding: 0px 0px 0px 10px; width:400px;"  />
							<button style="height:35px; width:80px; outline:none; margin-left:10px; background:#fff; border:none; cursor:pointer;" >Search</button>
					</form>
					<?php }else { ?>
						<div style="width:1100px; height:1100px; margin:auto; background:#fff; position:relative;" > 
						<h3 style="text-align:center;" >Αποτελέσματα: </h3>
						<div style="width:530px; position:relative; margin:auto; " >

						<div style="width:530px; box-shadow: 0px 0px 0px 1px #000; border-radius:2px; margin-top:10px; margin-bottom:10px; height:220px; float:left; background:#fff;" >
								<h2 style="padding: 10px 0px 0px 10px;" >Τίτλος Προσφοράς</h2>
							<div style="width:400px; float:left; position:relative; height:130px;" >
								<img src="" style="width:130px; margin-left:10px; height:130px; float:left;" />
								<div style="position:relative; float:left; position:relative;" >
										<p style="margin-left:10px;">Περιοχή: </p>
										<p style="margin-left:10px;">Περιγραφή: </p>
										
									
								</div>
							</div>
							<a href="offers.php?id=1" ><div style="width:120px; cursor:pointer; background:#00FF00; float:left;  position:relative; height:130px;" >
								<h3 style="text-align:center;" >Τιμή</h3>
								<h4 style="text-align:center;">50 Ευρώ</h4>
							</div></a>
						</div>
					<div style="width:530px; box-shadow: 0px 0px 0px 1px #000; border-radius:2px; margin-top:10px; margin-bottom:10px; height:220px; float:left; background:#fff;" >
								<h2 style="padding: 10px 0px 0px 10px;" >Τίτλος Προσφοράς</h2>
							<div style="width:400px; float:left; position:relative; height:130px;" >
								<img src="" style="width:130px; margin-left:10px; height:130px; float:left;" />
								<div style="position:relative; float:left; position:relative;" >
										<p style="margin-left:10px;">Περιοχή: </p>
										<p style="margin-left:10px;">Περιγραφή: </p>
										
									
								</div>
							</div>
							<div style="width:120px; background:#00FF00; float:left;  position:relative; height:130px;" >
								<h3 style="text-align:center;" >Τιμή</h3>
								<h4 style="text-align:center;">50 Ευρώ</h4>
							</div>
						</div>
							<div style="width:530px; box-shadow: 0px 0px 0px 1px #000; border-radius:2px; margin-top:10px; margin-bottom:10px; height:220px; float:left; background:#fff;" >
								<h2 style="padding: 10px 0px 0px 10px;" >Τίτλος Προσφοράς</h2>
							<div style="width:400px; float:left; position:relative; height:130px;" >
								<img src="" style="width:130px; margin-left:10px; height:130px; float:left;" />
								<div style="position:relative; float:left; position:relative;" >
										<p style="margin-left:10px;">Περιοχή: </p>
										<p style="margin-left:10px;">Περιγραφή: </p>
										
									
								</div>
							</div>
							<div style="width:120px; background:#00FF00; float:left;  position:relative; height:130px;" >
								<h3 style="text-align:center;" >Τιμή</h3>
								<h4 style="text-align:center;">50 Ευρώ</h4>
							</div>
						</div>
							<div style="width:530px; box-shadow: 0px 0px 0px 1px #000; border-radius:2px; margin-top:10px; margin-bottom:10px; height:220px; float:left; background:#fff;" >
								<h2 style="padding: 10px 0px 0px 10px;" >Τίτλος Προσφοράς</h2>
							<div style="width:400px; float:left; position:relative; height:130px;" >
								<img src="" style="width:130px; margin-left:10px; height:130px; float:left;" />
								<div style="position:relative; float:left; position:relative;" >
										<p style="margin-left:10px;">Περιοχή: </p>
										<p style="margin-left:10px;">Περιγραφή: </p>
										
									
								</div>
							</div>
							<div style="width:120px; background:#00FF00; float:left;  position:relative; height:130px;" >
								<h3 style="text-align:center;" >Τιμή</h3>
								<h4 style="text-align:center;">50 Ευρώ</h4>
							</div>
						</div>
 						</div>
 							</div>
					<?php } ?>
				</div>


<?php
$this->load->footer('page_footer.php');
?>