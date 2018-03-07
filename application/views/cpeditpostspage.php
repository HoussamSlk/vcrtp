<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta charset="utf-8">
		<title>Venture Cafe Rotterdam- Talent Portal - Admin Edit a post</title>
	</head>

<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal</div>
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
        <h1>Edit <?= $post['title'] ?></h1>
		<div id="container">
			<form action="editing/<?= $post['id'] ?>" method="post">
			<div class="form-group">
				<label>Title</label>
                <input type="text"   value="<?= $post['title'] ?>"  name="title" class="form-control" id="name" placeholder="Post Title">
                <input type="hidden" name="id" value="<?= $post['id'] ?>">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input type="text"  value="<?= $post['description'] ?>" name="description" class="form-control" id="description" placeholder="description">
			</div>
			<div class="form-group">
				<label>language</label>
				<input type="text"  value="<?= $post['language'] ?>" name="language" class="form-control" id="language" placeholder="language">
			</div>
			<button type="submit" class="btn btn-primary my-1">Submit</button>
			<a class="btn btn-primary" href="/" role="button">Back</a>
		</form>

           
		</div>

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