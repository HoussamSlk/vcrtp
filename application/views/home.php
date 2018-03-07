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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--this is for adding css file to the porject-->
		


	</head>
<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal</div>
	 <img  src="<?php echo base_url(); ?>assets\images\vc.png" alt="vc.png">
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
	<body background="<?php echo base_url(); ?>assets\images\vn.jpg " alt="vn.jpg">
		
<div class='filter'>
<ul>
<li><a style="color:orange; font-weight:800;" href="">Apply Filter: </a></li>
<li><a href="filter/growth">Growth</a></li>
<li><a href="filter/international">International</a></li>
<li><a href="filter/talent">Talent</a></li>
<li><a href="filter/city">City</a></li>
<li><a href="filter/culture">Culture</a></li>
<li><a href="filter/digital">Digital</a></li>
<li><a href="filter/community">Community</a></li>
</ul>
</div>


	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->
<br>
			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange; font-weight:700; border: solid 2px; border-radius:4px; width:50%; text-align:center; margin:auto;">Welcome: <?=$this->session->userdata('name')?> <a href="http://localhost/login"><button class='buttonview' type="submit">View your profile</button></a>  </h1>	
         
        <?php }?>
			</div>
			 
	<?php
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
			<table>
			<tr>
			<th>Post image</th>
      <th>Post title</th>
      <th>Link</th>
      <th>View post</th>
			</tr>
			<tr>
            <td><?='<img alt="Postphoto" class="imgpost" src=uploads/' . $key['image'] .'>';?></td>
            <br>
            <td><?= $key['title']?></td>
            <td><a href='http://<?= $key['link']?>'><?= $key['link']?></a></td>
            <td><button class='buttonview'>View this</button></td>
            </tr>
			</table>
		
<?php			
		}
	}	?>	
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
