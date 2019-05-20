<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>WanTech</title>

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/frontend/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">

  </head>
  <body>
  	<section class="wraper">
  		<header class="header">
  			<h1>WanTech</h1>
  			<h2>Pewarna berita teknologi anti luntur.</h2>
  		</header>

			<div class="classynav">
				<ul>
						<li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
				</ul>
			</div>

			<section id="header_section_wrapper" class="header_section_wrapper">

											<fieldset style="background-color: rgba(255,255,255,0.1);">
						    			<legend><h2><?php echo $row['title']; ?></h2></legend>

											<div class='konten'>
											<!-- <img class="img-konten" src="<?php echo base_url(); ?>assets/frontend/img/Procie.jpg"> -->
												<?php echo $row['content']; ?>
											</div>
						    			</fieldset>

<div class="entity_comments">
				 <h2>Add a Comment</h2>
		<section class="write-new">
				<form action="#" method="post">
						<textarea placeholder="Write your comment here" name="comment"></textarea>
						<div>
								<button type="submit">Submit</button>
						</div>
				</form>
		</section>
</div>


  <footer class="footer">

  	<section class="social-links">
  		<ul>
  			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  		</ul>
  	</section>

  	<ul class="copyright">
  		<li>&copy; WanTech. All rights reserved.</li>
  		<li>Design By : WTTeam</li>
  	</ul>

  </footer>
  	</section>

		<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-2.1.4.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/frontend/js/coundown-timer.js"></script>
  	<script src="<?php echo base_url(); ?>assets/frontend/js/scripts.js"></script>

  	</body>
</html>
