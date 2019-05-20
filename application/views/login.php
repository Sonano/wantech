<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>WanTech</title>

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url(); ?>assets/frontend/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">

</head>
<body>

  <section class="login-sc">
                  <div class="breadcrumb-content">
                      <h2>Login</h2>
                  </div>

    <div class="section-heading">
        <h6 class="red"><?php echo $this->session->flashdata('msg'); ?></h6>
    </div>

    <form action="admin/auth/login" method="post">
        <div class="form-group">
            <input type="text" class="login-cont" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="login-cont" placeholder="Password" name="password">
        </div>
        <button type="submit" class="log-btn">Login</button>
    </form>
  </section>

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

</body>
</html>
