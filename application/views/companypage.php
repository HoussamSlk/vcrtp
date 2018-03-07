<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Venture Cafe - Talent Portal</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\main.css"> <!--this is for adding css file to the porject-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--this is for adding css file to the porject-->
        
    </head>



<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal - Company Profile</div>
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

           <div style="text-align:center; margin:auto; ">
           <?php if (NULL !== $this->session->userdata('id')) {?>
               <h1 style="color:darkorange;">Welcome: <?=$this->session->userdata('name')?></h1>  
             <div class='logo'>
                <?php echo  '<img alt="CompanyLogo" src=uploads/' .$this->session->userdata('image') .'>' ;  ?> </div> <!--adding logo to the company home page-->
                   <?php }?>
           </div>
           
            <h3 style="font-weight:600; color:white; margin:auto;">Your recent activities:</h3>
    <?php
    if (isset($listings)){
        
        foreach ($listings as $key ) {
            ?>
           
          <table>
            <tr>
             <th style="color:white">image</th>
             <th style="color:white">Post title</th>
             <th style="color:white">Post description</th>
             <th style="color:white">Post status</th>
             <th style="color:white">Created at</th>
            <br>
            </tr>
            <tr>
             <td><?='<img alt="Postphoto" height="50" width="50" src=uploads/' . $key['image'] .'>';?></td>
             <td><?= $key['title']?></td>
             <td><?= $key['description']?></td>
             <td><?= $key['status']?></td>
             <td><?= $key['created_at']?></td>
            </tr>
          </table>
<?php            
        }
    }    ?>
   


                <div style="text-align:center; margin:auto; ">
                        <a href="addpost" class='buttonreg'>Add a vaccancie</a>
                        <br>
                        <a href="editprofile" class='buttonreg'>Edit your profile</a>
                        <br>
                        <?php if (NULL !== $this->session->userdata('id')) {?>
                        <a href="logout"><button class='buttonout' type="submit">Logout   </button></a>    
                        <?php }?>
                        <br><br>
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