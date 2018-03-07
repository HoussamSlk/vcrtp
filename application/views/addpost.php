<?php

defined('BASEPATH')
or exit('No direct script access allowed');

?>



    <!DOCTYPE html>

    <html>



    <head>

        <meta charset="utf-8" />

        <title>Venture Cafe Rotterdam- Talent Portal</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\main.css"> <!--this is for adding css file to the porject-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--this is for adding css file to the porject-->
<!--this is for adding css file to the porject-->

        

    </head>


<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal- Add vaccancie</div>
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

      

<br>

<!--this is for adding image to the porject-->





     <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; ">
<?= isset($errorlogin)
? $errorlogin
: '' 
?> </div>
<!--this to echo the validation errors -->

<div style="color:white; background-color:#FFA500; width:50%; border-radius:8px;">
<?= isset($error)
? $error
: '' 
?> </div>
<!--this to echo the validation errors -->

<div style="color:white; background-color:#3CB371; width:50%; border-radius:8px;">
<?= isset($noerror)
? $noerror
: '' 
?> </div>
<!--this to echo the successful entry -->

            <div> 

            <?php 
if (NULL 
!== $this->session->userdata('id'))

 {?>

<h1 style="color:darkorange; font-weight:700; border: solid 2px; border-radius:4px; width:50%; text-align:center; margin:auto;">Welcome: <?=$this->session->userdata('name')?></h1>   

                    <?php }?>


<form class='form' action='insertingpost' method='post' enctype='multipart/form-data'>

<label style="color:white;  font-weight: bold;">Post Title</label><br>

<input class='input' type="text" name="title"
 placeholder="Post Title">
<br>
<label style="color:white;  font-weight: bold;">Description</label><br>

<input class='textarea' type="text" name="description"
 placeholder="Description">
<br>
<label style="color:white;  font-weight: bold;">Tag</label><br>


<select class='input' name="tag">

<option value="na">N/A</option>

<option value="growth">Growth</option>

<option value="international">International</option>

<option value="talent">Talent</option>

<option value="city">City</option>

<option value="culture">Culture</option>

<option value="digital">Digital</option>

<option value="community">Community</option>

</select>

<br>



<label style="color:white;  font-weight: bold;">Language</label><br>

<input class='input' type="text" name="language"
 placeholder="Language">
<br>
<label style="color:white;  font-weight: bold;">Start Date</label><br>

<input class='input' type="date" name="startdate"
 placeholder="Start Date">
<br>
<label style="color:white;  font-weight: bold;">End Date</label><br>

<input class='input' type="date" name="enddate"
 placeholder="End Date">
<br>
<label style="color:white;  font-weight: bold;">Link</label><br>

<input class='input' type="text" name="link"
 placeholder="Link">
<br>
<label style="color:white;  font-weight: bold;">Number of vacancies</label><br>

<input class='input' type="number" name="vacanciesnum"
 min="1" placeholder="Number of available vacancies ">
<br>
<label style="color:white;  font-weight: bold;">Filled positions</label><br>

<input class='input' type="number" name="filledposition"
 min="1" placeholder="Filled Positions"><br>

<br>
<div style="color:white;  font-weight: bold;">Image should not excceed 8MB, and the name should not contain charecters or spaces </div>
<br>
<input class="buttonreg" type="file"
 name="image"><br>

<input class='buttonreg' type="submit"
 name="add vaccancie" value="Add vaccancie"><br>

</from>

</div>

<div style="text-align:center; pading:10px;">
<a href="logout"><button class='buttonout' type="submit">Logout</button></a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class='buttonout' href="gobacktoyourprofile">Back to your profile</a>
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