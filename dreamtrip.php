<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    	
    <meta charset="utf-8">
    <title>Welcome to DreamTrip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    
        <link rel="stylesheet" href="font-awesome.min.css">

      
  <link href="bootstrap.css" rel="stylesheet">      
   <style type="text/css">
    
.welcome{
display:block;
font-size:20px;
font-weight:200;
color: #ff0000;
  
}
    
.navbar {
  overflow: visible;
  margin-bottom: 20px;
  color: #555555;
  position: relative;
  z-index: 2;
}

navbar .brand {
  float: left;
  display: block;
  padding-top: 0;
  padding-bottom:0px;
  overflow: visible;
  font-size: 20px;
  font-weight: 200;
  color: #ff0000;
  text-shadow: 0 1px 0 #ffffff;
}

dropdown-menu {
    background-clip: padding-box;
    background-color: white;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 6px 6px 6px 6px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    display: none;
    float: left;
    left: 0;
    list-style: none outside none;
    margin: 2px 0 0;
    min-width: 160px;
    padding: 5px 0;
    position: absolute;
    top: 100%;
    z-index: 1000;
}

.btn-group.open .btn.dropdown-toggle {
  background-color: white;
}

.btn-group.open .btn.dropdown-toggle {
  background-color:lime;
}

.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
  color:white;
  background-color:black;
}

.navbar .nav > li > a {
    color: white;
    float: none;
    padding: 10px 15px;
    text-decoration: none;
    text-shadow: 0 0px 0 #ffffff;
}



.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
  color: white;
  text-decoration: none;
  background-color: transparent;
}

.navbar-text {
  margin-bottom: 0;
  line-height: 40px;
  color: white;
}

.dropdown-menu li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 20px;
  color: white;
  white-space: nowrap;
}

.navbar-link {
  color: white;
}

.navbar-link:hover {
  color: white;
}


   
  

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
     position: absolute;
      top: -20px;
      left: 0px;
      right: 67px;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      width: 1000px;
      height: 70px;
      background-color: #ff0000;
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      
      padding: 3px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }


    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>


    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
	    
            <a class="brand" href="dreamtrip.php"><img src="DreamTripLogo.jpg" width='140' height='170';></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          
	    <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="dreamtrip.php"><h4> Home</h4></a></li>
                <li><a href="tripideas.php"><h4>Trip Ideas</h4></a></li>
                <li><a href="writereviews.php"><h4>Add a Review</h4></a></li>
		  <li><a href="addphotos.php"><h4>Add Photos</h4></a></li>
                <li><a href="wishlist.php"><h4>Wishlist</h4></a></li>
			<!-- session_set_cookie_params( 7200, "http://jinala.scripts.mit.edu/" ); -->	
		<?php
            		
            		
			if($_SESSION["valid_user"])
			{
          
			?>
				<li><a href="logout.php"><h4>Sign out, <?php echo $_SESSION["valid_user"] ?></h4></a></li>                          
<?php }
			else {
                ?>

                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
		   <div class="nav pull-right">
         <!-- <li><a href="#myModal" data-toggle="modal"><h4>Sign Up</h4></a></li> -->

<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown"><h4>Sign Up</h4> <strong class="caret"></strong></a>
<div class ="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
<form action="?op=reg" method="post" accept-charset="UTF-8">
Username:<input id="user_username" style="margin-bottom: 15px;" type="text" name="username" placeholder="Username" size="30"/>
Password: <input id="user_password" style="margin-bottom: 15px;" type="password" name="password" placeholder="Password" size="30" />
E-Mail: <input id="user_email" style="margin-bottom: 15px;" type="text" name="email" placeholder="E-Mail" size="30" />

<input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign Up" />
</form>
</div>
</li> 

          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><h4>Sign In</h4> <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
	     
		<!-- form for login -->	
              <form action="?op=login&&from=<?php echo $_GET['from']; ?>" method="post" accept-charset="UTF-8">
  Username: <input id="user_username" style="margin-bottom: 15px;" type="text" name="username" placeholder="Username" size="30" />
  Password: <input id="user_password" style="margin-bottom: 15px;" type="password" name="password" placeholder="Password" size="30" />
   
  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
</form>
	     <?php } ?>

	      <!-- Login form here -->
            </div>
</li>
		   </div>
          
        
          <!--        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

<div class="welcome">

<!-- PHP code for login -->
		<?php


include 'dbCon.php';

if ($_GET["op"] == "login")
{

if(!$_POST["username"] || !$_POST["password"])
{
   echo "<script>
alert('Please provide a username and password.');
window.location.href='dreamtrip.php';
</script>";
    
}else{

$query = "SELECT * FROM Users "
  ."WHERE username='".$_POST["username"]."' "
  ."AND password= PASSWORD('".$_POST["password"]."') "
  ."LIMIT 1";

$runQuery=mysql_query($query) ;
$obj=mysql_fetch_object($runQuery) ;


if($obj)
{
    	
    $_SESSION["valid_id"]=$obj->id;
    $_SESSION["valid_user"]= $_POST["username"];
    $_SESSION["valid_time"]=time();
     $name = $_SESSION["valid_user"];
if($_GET['from']=="reviews"){
echo "<script>
alert('Welcome $name!');
window.location.href='writereviews.php';
</script>";
}else if($_GET['from']=="photos"){
echo "<script>
alert('Welcome $name!');
window.location.href='addphotos.php';
</script>";
} else if($_GET['from']=="wish"){
echo "<script>
alert('Welcome $name!');
window.location.href='wishlist.php';
</script>";
}else {

     echo "<script>
alert('Welcome $name!');
window.location.href='dreamtrip.php';
</script>";
}
}
else
{
     echo "<script>
alert('Sorry, username or password is incorrect.');
window.location.href='dreamtrip.php';
</script>";
}
}
} else if ($_GET["op"] == "signin")
{
 echo "<script>
alert('Please log in...');
window.location.href='dreamtrip.php?from=".$_GET['from']."';
</script>";
?>
<script>$().dropdown('toggle')</script>
<?php }

?> 

<?php
include 'dbCon.php';
if($_GET["op"]=="reg")
{

if (!$_POST["username"]||!$_POST["password"]||!$_POST["email"])
{
     echo "<script>
alert('Please fill in all entries.');
window.location.href='dreamtrip.php';
</script>";
} else {
$query ="INSERT INTO `srinidhi+DreamTrip`.`Users` (`username`, `password`, `email`) VALUES ('".$_POST["username"]."', PASSWORD('".$_POST["password"]."'), '".$_POST["email"]."')";

  
$runQuery=mysql_query($query) ;
mysql_insert_id() ;


if(!mysql_insert_id())
{
    echo "<script>
alert('Sorry, username already exists.');
window.location.href='dreamtrip.php';
</script>";

}
else
{
      echo "<script>
alert('Thanks for registering! Please Sign in now.');
window.location.href='dreamtrip.php';
</script>";

 }   
}
}
?>


</div>



      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="active item">
          <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Isle_of_Icacos_II.jpg/800px-Isle_of_Icacos_II.jpg">
          <div class="container">
            <div class="carousel-caption">
	      <h1>DreamTrip</h1>
              
              <p class="lead">Choose your perfect vacation destination based on your interests, and then document your vacation by uploading reviews and photos!</p>
              <a class="btn btn-large btn-primary" href="tripideas.php">Search today!</a>
	      </div>
          </div>
        </div>
        <div class="item">
          <img src="http://upload.wikimedia.org/wikipedia/commons/7/75/Send_dunes_in_death_valley_national_park.jpg">
            <div class="container">
            <div class="carousel-caption">		
              <h1>DreamTrip</h1>
              <p class="lead">Share your preferences via Facebook, Twitter, and Pinterest!</p>
             
	      </div>
          </div>
        </div>
        <div class="item">
          <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Machu_Picchu_early_morning.JPG/1024px-Machu_Picchu_early_morning.JPG">
           <div class="container">
            <div class="carousel-caption">		
              <h1>DreamTrip</h1>
              <p class="lead">Want to travel to a particular destination? Jot it down on your custom wishlist and use DreamTrip to make it a reality!</p>
	      </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->

<div class="container-fluid">
  <div class="row-fluid">
    <div class="row">
    <div class="span1">
       <p><i class="icon-plane icon-4x"></i>	
   </div>
    <div class="span5">
        <h2><strong>Theme-Based Search</strong></h2>
        <p><h4>Don't know exactly where you want to go, but are seeking an adventure? Use our theme-based search to discover travel destinations that exactly satisfy your criteria!</h4></a></p>
    </div>
    <div class="span1">
      <p><i class="icon-thumbs-up icon-3x"></i> 
</div>
        <div class="span5">
            <h2><strong>Social Foundation</strong></h2>
            <p><h4>DreamTrip is built on a social foundation, allowing you to get an honest and personalized perspective of destinations by reading reviews and viewing photos posted by fellow travelers.<h4></a></p>   
        </div>
     
    </div>
    <div class="row">
  <div class="span1">
       <p><i class="icon-camera-retro icon-3x"></i>	
   </div>
    <div class="span5">
        <h2><strong>Share your Photos</strong></h2>
        <p><h4>Don't fall for glossy government-sponsored tourism photos. View and upload your own photos of places you've visited!</h4></a></p>
    </div>
    <div class="span1">
      <p><i class="icon-cloud icon-3x"></i> 
</div>
        <div class="span5">
            <h2><strong>Wishlist</strong></h2>
            <p><h4>Track the cities you would like to visit, and view search results based on their occurrence on other peoples' wishlists.</h4></a></p>   
        </div>
<!-- /.row -->


      <!-- START THE FEATURETTES -->

     
    </div><!-- /.container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="http://code.jquery.com/jquery-latest.js"></script>
   
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap-transition.js"></script>
    <script src="bootstrap-alert.js"></script>
    <script src="bootstrap-modal.js"></script>
    <script src="bootstrap-dropdown.js"></script>
    <script src="bootstrap-scrollspy.js"></script>
    <script src="bootstrap-tab.js"></script>
    <script src="bootstrap-tooltip.js"></script>
    <script src="bootstrap-popover.js"></script>
    <script src="bootstrap-button.js"></script>
    <script src="bootstrap-collapse.js"></script>
    <script src="bootstrap-carousel.js"></script>
    <script src="bootstrap-typeahead.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script type="text/javascript">if (!NREUMQ.f) { NREUMQ.f=function() {
NREUMQ.push(["load",new Date().getTime()]);
var e=document.createElement("script");
e.type="text/javascript";
e.src=(("http:"===document.location.protocol)?"http:":"https:") + "//" +
  "d1ros97qkrwjf5.cloudfront.net/42/eum/rum.js";
document.body.appendChild(e);
if(NREUMQ.a)NREUMQ.a();
};
NREUMQ.a=window.onload;window.onload=NREUMQ.f;
};
NREUMQ.push(["nrfj","beacon-1.newrelic.com","fcf8d519de","13909,933593,716468","dA4NFkNbVV1URBcMRVIMTAREWFVuQlVKAFRZPhMQVEJQVEY=",8,44,new Date().getTime(),"","","","",""]);</script>
   
   <script type="text/javascript" src="http://d1ros97qkrwjf5.cloudfront.net/42/eum/rum.js"></script>
   <script type="text/javascript" src="http://beacon-1.newrelic.com/1/fcf8d519de?a=13909,933593,716468&amp;be=246&amp;qt=8&amp;ap=44&amp;dc=2&amp;fe=706&amp;to=dA4NFkNbVV1URBcMRVIMTAREWFVuQlVKAFRZPhMQVEJQVEY%3D&amp;v=40&amp;jsonp=NREUM.setToken&amp;perf=%7B%22timing%22%3A%7B%22of%22%3A1358887994476%2C%20%22n%22%3A0%2C%20%22dl%22%3A133%2C%20%22di%22%3A249%2C%20%22ds%22%3A249%2C%20%22de%22%3A254%2C%20%22dc%22%3A951%2C%20%22l%22%3A951%2C%20%22le%22%3A953%2C%20%22f%22%3A0%2C%20%22dn%22%3A0%2C%20%22dne%22%3A0%2C%20%22c%22%3A0%2C%20%22ce%22%3A0%2C%20%22rq%22%3A8%2C%20%22rp%22%3A132%2C%20%22rpe%22%3A134%7D%2C%20%22navigation%22%3A%7B%7D%7D"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
   <!--<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
          interval: 1000
        })
      }(window.jQuery)
    </script>-->
   <script>
  $('.carousel').carousel({
  interval: 2000
})
</script>
    <hr class="featurette-divider">

  


      <!-- FOOTER -->
      
      
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>For more details and support, <a href="mailto: DreamTrip6.470@gmail.com">Contact Us</a></p>
	<p>Dream Trip is an MIT 6.470 project.</p>

      </footer>

  </body>
</html>
