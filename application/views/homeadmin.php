 <?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Venture Cafe Rotterdam- Talent Portal - HOME Admin</title>
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
<br>
<br>
                <div> 
                    <?php $loginfoadmin = $this->session->all_userdata(); ?>
                    <div>
                    <h1 style="color:darkorange; font-weight:700; border: solid 2px; border-radius:4px; width:50%; text-align:center; margin:auto;"
>Welcome:
                    <?= $loginfoadmin['admin_name']   ?> &nbsp; &nbsp;		

                </div>

<div style="color:white; background-color:#FFA500; width:50%; border-radius:8px;"> <?= isset($error) ? $error : '' ?> </div> <!--this to echo the validation errors -->
<div style="color:white; background-color:#3CB371; width:50%; border-radius:8px;"> <?= isset($noerror) ? $noerror : '' ?> </div> <!--this to echo the successful entry -->
                <div>
                <?php if ( $this->session->userdata('admin_level')==1) {?>
                  <div class="div">
                <h2 style="color:gray;">Add a new admin</h2>
                        <form action="registeradmin" method="POST"> 
                                <input class='inputadmin' type="text" name="name" placeholder="name">
                                <br>
                                <input class='inputadmin' type="email" name="email" placeholder="email">
                                <br>
                                <input class='inputadmin' type="password" name="password" placeholder="password">
                                <br>
                                <input class='inputadmin' type="password" name="passwordConfirm" placeholder="Retype your password">
                                <br>
                                    <lable style="color:orange;">Chose your adminstrator level</lable><br>
                                    <select class='inputadmin' name="level">
                                    <option value="0">Normal Admin</option>
                                    <option value="1">Super Admin</option>
                                    </select>
                                <br>
                                <input class='buttonreg' type="submit" name="Create" value="Create">
                        </form>
                </div>
                <?php }?>
                </div>
 <br>     <!--we need to fix this-->
          <?php if ($this->session->userdata('status')=='pending') {?>         
          <h2 style="color:#ff3232; text-align:center; border: solid 2px #ff3232; border-radius:10px; width:30%; margin:auto;"><?="You have pending posts"?></h2>
          <?php }?>
<br>
<?php
 if (isset($message)) {
    echo $message;
}
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
			<table>
			<tr>
    
			<th style='text-align:center;'>Image</th>
			<th style='text-align:center;'>Post title</th>
      <th style='text-align:center;'>Post description</th>
      <th style='text-align:center;'>Action</th>
      <input type='hidden' value=<?= $key['id']?>>

      </tr>
      <tr>
          <td><?= $key['image']?></td>
          <td><?= $key['title']?></td>
          <td><?= $key['description']?></td>
          <td>
          <a href="editpost/<?= $key['id'] ?>"><button class='buttonview' type="edit">Edit</button></a>
          <a href="approvepost/<?= $key['id'] ?>"><button class='buttonlogin' type="Aprove">Approve</button></a>
          <a href="rejectpost/<?= $key['id'] ?>"><button class='buttondel' type="reject">Reject</button></a>
          </td>
        </tr>
			</table>
<?php			
		}
	}	?>	
<div class='div'>
            <a href="viewcompanies"><button class='buttonreg' type="view">View Companies and Partners</button></a>
            <a href="viewposts"><button class='buttonreg' type="view">View All posts</button></a><br>
            <a href="logoutcp"><button class='buttonout' type="submit">Logout</button></a>	
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




					
					