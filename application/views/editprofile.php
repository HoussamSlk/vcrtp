<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<title>Venture Cafe - Talent Portal</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
	</head>

<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal- Edit Profile</div>
	 <img src="<?php echo base_url(); ?>assets\images\vc.png" alt="vc.png">
    <div class="list">
    <ul>
    <li class="dropdown">
    <a href="https://venturecaferotterdam.org/thursday-gatherings/future/" class="dropbtn">Thursday Gatherings</a>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">International</a>
    <div class="dropdown-content">
      <a href="https://venturecaferotterdam.org/innovation-visitor-bureau/">Innovation Visitor Bureau</a>
      <a href="https://venturecaferotterdam.org/startup-visa/">Startup Visa</a>
      <a href="https://venturecaferotterdam.org/venture-cafe-global-network/">Venture Cafe Global<br>Network</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Community</a>
    <div class="dropdown-content">
      <a href="https://venturecaferotterdam.org/news/">News</a>
      <a href="https://venturecaferotterdam.org/launchtime-podcast/">Launchtime Podcast</a>
      <a href="https://venturecaferotterdam.org/startup-celebrations/">Startup Celebrations</a>
      <a href="https://venturecaferotterdam.org/get-involved/">Get Involved</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="https://venturecaferotterdam.org/who-we-are/">About Us</a>
      <a href="https://venturecaferotterdam.org/team/">Team</a>
      <a href="https://venturecaferotterdam.org/credo/">Credo</a>
      <a href="https://venturecaferotterdam.org/sponsor/">Support Venture Cafe</a>
      <a href="https://venturecaferotterdam.org/contact/">Contact</a>
    </div>
   
  </li>
</ul>
</div>

</header>


	<body background="<?php echo base_url(); ?>assets\images\ddd.png" alt="ddd.jpg" style='opacity:0.9;'>
	
			 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->

			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange; text-align:center;">Welcome: <?=$this->session->userdata('name')?></h1>	
					<?php }?>
                    <h3 style="color:gray; text-align:center;">Your current profile information:</h3>
                    <div class="div">
                    <?php
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
			<table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td><?= $key['name']?></td>
			<td><?= $key['email']?></td>
			<td><?= $key['address']?></td>
            <td><?= $key['contact']?></td>
            <td><?= $key['about']?></td>
			</tr>
			</table>

			<form action='editnewinfo' method='post'>
			<h3 style="color:gray; text-align:center;">Edit your profile information:</h3>
			<input class='input' type="text" name="email" value=<?= $key['email']?>>
			<input class='input' type="text" name="address" value=<?= $key['address']?>>
			<input class='input' type="text" name="contact" value=<?= $key['contact']?>>
			<input class='input' type="text" name="about" value=<?= $key['about']?>>
			<br>
            <button class='buttonreg' type="submit">Edit</button>
			</form>
        <?php }} ?>
        </div>
					<?php if (NULL !== $this->session->userdata('id')) {?>
					<a href="logout"><button class='buttonout' type="submit">Logout</button></a>	
          <?php }?>
          
	<br><br>


	</body>

	<footer class="footer">
<p>© Copyright 2018</p>
<a href="gotologregpage">Companies and Orgnizations</a>
<a href="https://venturecaferotterdam.org/credo/">Credo</a>
<a href="https://venturecaferotterdam.org/sponsor/">Support</a>
<a href="https://venturecaferotterdam.org/contact/">Contact</a>
<a href="https://twitter.com/VentureCafeRdam">
    <span class="fa fa-twitter"></span>
  </a>
  <a href="https://www.facebook.com/VentureCafeRotterdam/">
    <span class="fa fa-facebook"></span>
  </a>
  <a href="https://www.linkedin.com/company/venturecaferotterdam">
    <span class="fa fa-linkedin"></span>
  </a>
  <a href="https://www.instagram.com/venturecaferotterdam/">
    <span class="fa fa-instagram"></span>
  </a>
</footer>

	</html>