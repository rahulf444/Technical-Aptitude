<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	 <link type="text/css" href="../css/bootstrap.css" rel="stylesheet" />
	 <link type="text/css" href="../css/style.css" rel="stylesheet" />
	 <script type="text/javascript" src="../validate.js" ></script>
</head>
<body background="../images/back/2.png">
<?php

        if($_GLOBALS['message'])
        {
         echo "<div class=\"\">".$_GLOBALS['message']."</div>";
        }
      ?>
	<!--Header--> 
		<nav class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
		      <div class="navbar-header">
		           <span class="navbar-brand" style="color:#ffffff; font-size:x-large;">Tech Apt</span>
		       </div>
		       <?php if(isset($_SESSION['admname'])){ ?>
		      <ul class="nav navbar-nav">
			    <li class="active"><a href="admwelcome.php">Home</a></li>
		        
		      </ul>
			  
		    <ul class="nav navbar-nav navbar-right">
		      
		      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
			  
		    </ul>
		<p class="navbar-text navbar-right">Signed in as <b><?php echo " ".$_SESSION['admname']." "; ?></b></p>
		<?php } ?>
		  </div>
		</nav>
<!--End of Header-->