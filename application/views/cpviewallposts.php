<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Venture Cafe Rotterdam - Talent Portal - View All Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal - Home page for the admin</div>
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
 <h3 style="font-family:arial; color:#E06926">VCR CP/View All Posts</h3>
 <?php
if (isset($listings)){
foreach ($listings as $key)  { 
    ?> 
    <table>
			<tr>
			<th style='text-align:center;'>image</th>
			<th style='text-align:center;'>Post title</th>
			<th style='text-align:center;'>Post description</th>
      <th style='text-align:center;'>Post status</th>
      <th style='text-align:center;'>Action</th>
            </tr>
            <tr>
            <td><?='<img alt="Postphoto" class="imgpost" src=uploads/' . $key['image'] .'>';?></td>
            <td> <?= $key['title']?></td>
            <td> <?= $key['description']?></td>
            <td> <?= $key['status']?></td>
            <td style='text-align:center;'><a href="deletepost/<?= $key['id']?>"><button class='buttondel'>Delete this record</button></a></td>
            
            </tr>
            <input type='hidden' value=<?= $key['id']?>>
            
			
			</table>
<?php

}

}
?>


<a class='buttonout' href='http://localhost'>Back to profile</a>
</body>

<br>
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