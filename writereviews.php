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
<script src="jquery.backstretch.js"></script>
      
  <link href="bootstrap.css" rel="stylesheet">      
   <style type="text/css">
    
.welcome{
display:block;
font-size:20px;
font-weight:200;
color: #ff0000;
  
}co
    
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
      right: 200px;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px;
      /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      width: 1000px;
      height: 70px;
      margin-left:-40px;
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
<?php
			if($_SESSION["valid_id"])
			{

			?>

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width: 100%; z-index: -999999; position: fixed;"><img style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-width: none; z-index: -999999; left: 0px; top: 0px;" src="cream_dust_@2X.png"
></div>


    <!-- NAVBAR
    ================================================== -->
    
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
	    
            <a class="brand" href="dreamtrip.php"><img src="DreamTripLogo.jpg" width='140' height='170'></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          
	   <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="dreamtrip.php"><h4>Home</h4></a></li>
                <li><a href="tripideas.php"><h4>Trip Ideas</h4></a></li>
                <li class="active"><a href="writereviews.php"><h4>Add a Review</h4></a></li>
		  <li><a href="addphotos.php"><h4>Add Photos</h4></a></li>
                <li><a href="wishlist.php"><h4>Wishlist</h4></a></li>


                <!--Logged in Vs logged out-->
		  
		                    <li><a href="logout.php"><h4>Sign out, <?php echo $_SESSION["valid_user"] ?></h4></a></li>
</ul>
</div>
</div>
</div>
</div>
      
		  

            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
     <!--   <link href="bootstrap.min.css" rel="stylesheet"  media="screen"> -->
    <script>
        $(function() {
            
            var availableTags=new Array();
		var x=0;
		<?php
            
            include 'dbCon.php';
            $query="SELECT DISTINCT City FROM `Locations` ORDER BY City";
            $runQuery=mysql_query($query);
           
            while($row=mysql_fetch_assoc($runQuery)){
?>
                availableTags[x]="<?php echo $row['City']; ?>"  ;
                x++;
         <?php   }
		
            ?>

		
            $("#cities").autocomplete({
                source: availableTags
            });
        });
    </script>
<style type="text/css">
    #rateStatus{float:left; clear:both; width:100%; height:20px;}
    #rateMe{float:left; clear:both; width:100%; height:auto; padding:0px; margin:0px;}
    #rateMe li{float:left;list-style:none;}
    #rateMe li a:hover,
    #rateMe .on{background:url(star_on.gif) no-repeat;}
    #rateMe a{float:left;background:url(star_off.gif) no-repeat;width:12px; height:12px;}
    #ratingSaved{display:none;}
    .saved{color:red; }
</style>  
           
        
                    
            <?php
          
            include 'dbCon.php';
            if ($_GET["op"]=="submit")
            {
		
                if (!$_POST["city"]||!$_POST["review"])
                {
                    echo "<script>
alert('Please fill in all the fields');
</script>";
                } else {
$post=mysql_real_escape_string($_POST["review"]);
			if (!$_POST["r"]){
                    $query ="INSERT INTO `Reviews` (`Name`, `City`, `Review`) VALUES ('".$_SESSION["valid_user"]."', '".$_POST["city"]."', '$post')";
			$runQuery=mysql_query($query) or die("err");
		} else{
			$query ="INSERT INTO `Reviews` (`Name`, `City`, `Review`,`Rating`) VALUES ('".$_SESSION["valid_user"]."', '".$_POST["city"]."', '$post','".$_POST["r"]."')";
			$runQuery=mysql_query($query) or die("err");

}
                if (!mysql_insert_id())
                {
                    die("error: try again");
                }else {
                    echo "<script>
alert('Thanks for your review!');
</script>";
                }
	if($_POST["r"]){
		
		$q="UPDATE Locations SET userRating=('".$_POST["r"]."'+userRating)/(ratingscount+1.0) WHERE City='".$_POST["city"]."'" ;
		$q1="UPDATE Locations SET ratingscount=ratingscount+1 WHERE City='".$_POST["city"]."'";

		$r=mysql_query($q) or die("e");
		$r1=mysql_query($q1);
                }
		            
            }

}


            ?>
        
        
        <div>
	  <div class="container">
        <form method="post" action="?op=submit" name="myform">
            <fieldset>
	      
                <legend><h3>Write your valuable reviews here!</h3></legend>
		<div class="ui-widget">
                <label for"cities"><h4>Select City</h4></label>
                <input id="cities" name="city" type="text" placeholder="City">
	</div>
                <label><h4>Write  review</h4></label>
                <textarea name="review" rows="10" class="input-xxlarge" placeholder="Type here"></textarea><br/>
<div>
<input type="hidden" name="r" >
</div>
                		 
            <span id="rateStatus"><h4>Rate your experience</h4></span>
	     <br>
            <span id="ratingSaved"><h4>Rating Saved!</h4></span>
	    <br>
            <div id="rateMe" title="<h4>Rate your experience</h4>" >
                <a onclick="rateIt(this)" id="_1" title="<h4>ehh...</h4>" onmouseover="rating(this)" onmouseout="off(this)" ></a>
                <a onclick="rateIt(this)" id="_2" title="<h4>Not Bad</h4>" onmouseover="rating(this)" onmouseout="off(this)" ></a>
                <a onclick="rateIt(this)" id="_3" title="<h4>Pretty Good</h4>" onmouseover="rating(this)" onmouseout="off(this)" ></a>
                <a onclick="rateIt(this)" id="_4" title="<h4>Out Standing</h4>" onmouseover="rating(this)" onmouseout="off(this)" ></a>
                <a onclick="rateIt(this)" id="_5" title="<h4>Freakin' Awesome</h4>" onmouseover="rating(this)" onmouseout="off(this)" > </a>
            </div>

<script type="text/javascript" language="javascript" src="rating.js"></script>
	<br>
	 <button type="submit" class="btn">Submit</button> 
 
            </fieldset>
        </form>
</div>
	  </div>
<div class="container marketing">


<hr class="featurette-divider">
<!-- FOOTER -->
      
      
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>For more details and support, <a href="mailto: DreamTrip6.470@gmail.com">Contact Us</a></p>
	<p>Dream Trip is a MIT 6.470 project</p>

      
</div>
<?php
} else{
echo "<script>window.top.location='dreamtrip.php?op=signin&&from=reviews'</script>";
}  ?>



          </body>
</html>