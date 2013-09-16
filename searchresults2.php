<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    	 
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

   
    <title>Welcome to DreamTrip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
          <script src="bootstrap.js"></script>
     <script src="bootstrap-dropdown.js"></script>
      <script src="bootstrap-modal.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
     <script src="bootstrap-collapse.js"></script>
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
 <script src="jquery.backstretch.js"></script>
 
  <script>
  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  });
  </script>

  </script>
        <link rel="stylesheet" href="font-awesome.min.css">

      
  <link href="bootstrap.css" rel="stylesheet">      
   <style type="text/css">
    

a {
	color: #0254EB
}
a:visited {
	color: #0254EB
}

.comment {
	width: 800px;
	
	margin: 10px;
}
a.morelink {
	text-decoration:none;
	outline: none;
}
.morecontent span {
	display: none;

}

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
                <li class="active"><a href="dreamtrip.php"><h4>Home</h4></a></li>
                <li><a href="tripideas.php"><h4>Trip Ideas</h4></a></li>
                <li><a href="writereviews.php"><h4>Add a Review</h4></a></li>
		  <li><a href="addphotos.php"><h4>Add Photos</h4></a></li>
                <li><a href="wishlist.php"><h4>Wishlist</h4></a></li>
                <!--Logged in Vs logged out-->
		  
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
         

<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown"><h4>Sign Up</h4> <strong class="caret"></strong></a>
<div class ="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
<form action="?op=reg&country=<?php echo $_GET['country']; ?>&themes=<?php echo $_GET['themes']; ?>" method="post" accept-charset="UTF-8">
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
              <form action="?op=login&country=<?php echo $_GET['country']; ?>&themes=<?php echo $_GET['themes']; ?>" method="post" accept-charset="UTF-8">
  Username: <input id="user_username" style="margin-bottom: 15px;" type="text" name="username" placeholder="Username" size="30" />
  Password: <input id="user_password" style="margin-bottom: 15px;" type="password" name="password" placeholder="Password" size="30" />
   
  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
</form>
	   <?php } ?>  
	      <!-- Login form here -->
            </div>
		   </div>
          </li>
        
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
window.location.href='tripideas.php';
</script>";
  
    
}else{

$query = "SELECT * FROM Users "
  ."WHERE username='".$_POST["username"]."' "
  ."AND password=PASSWORD('".$_POST["password"]."') "
  ."LIMIT 1";

$runQuery=mysql_query($query) ;
$obj=mysql_fetch_object($runQuery) ;


if($obj)
{
    $_SESSION["valid_id"]=$obj->id;
    $_SESSION["valid_user"]= $_POST["username"];
    $_SESSION["valid_time"]=time();
   $name = $_SESSION["valid_user"];
     echo "<script>
alert('Welcome $name!');
window.location.href='tripideas.php';
</script>";
}
else
{
    echo '<div class="row">'; 
  echo '<div class="span11 offset1">';
    echo '<div class="alert alert-error">';
    echo "<h4>Sorry, username or password is incorrect</h4>";
    echo "</div>";
  echo "</div>";
echo "</div>";
    
}
}
} else if ($_GET["op"] == "signin")
{
  echo '<div class="row">'; 
  echo '<div class="span11 offset1">';
    echo '<div class="alert alert-error">';
   echo "<h4>Please log in</h4>";
    echo "</div>";
  echo "</div>";
echo "</div>";

?>
<script>$().dropdown('toggle')</script>
<?php }

?> 

</div>


      </div> <!-- /.container -->
    <!-- /.navbar-wrapper -->
<!--signup php code-->
<div class="welcome">
<?
include 'dbCon.php';
if($_GET["op"]=="reg")
{

if (!$_POST["username"]||!$_POST["password"]||!$_POST["email"])
{
    echo '<div class="row">'; 
  echo '<div class="span11 offset3">';
    echo '<div class="alert alert-error">';
    echo "<h4>Please fill in all the entries</h4>";
    echo "</div>";
  echo "</div>";
echo "</div>";
    

}
else{
$query ="INSERT INTO `srinidhi+DreamTrip`.`Users` (`username`, `password`, `email`) VALUES ('".$_POST["username"]."', PASSWORD('".$_POST["password"]."'), '".$_POST["email"]."')";

  
$runQuery=mysql_query($query) ;



if(!mysql_insert_id())
{
     echo '<div class="row">'; 
  echo '<div class="span11 offset1">';
    echo '<div class="alert alert-error">';
    echo "<h4>Sorry, username already exists.</h4>";
    echo "</div>";
  echo "</div>";
echo "</div>";
    

}
else
{
 echo '<div class="row">'; 
  echo '<div class="span11 offset3">';
    echo '<div class="alert alert-success">';
    echo "<h4>Thanks for registering!</h4>";
    echo "</div>";
  echo "</div>";
echo "</div>";
     
}
}
}
?>

</div>
<!-- sign up modal-->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<h3 id="myModalLabel">Sign Up</h3>
</div>
<div class="modal-body">

<div id="register" >
        
            <form class="form-horizontal" method="post" action="?op=reg" target="SHOW">
                
                <div class="control-group">
                    <label class="control-label" for="inputUserName" >UserName</label>
                    <div class="controls">
                       <input type="text" id="inputUserName" placeholder="UserName" name="username">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword" >Password</label>
                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password" name="password">       
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for ="inputEmail">Email</label>
                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email" name="email">
                        
                        <button type="submit" class="btn">Sign Up</button>
            
                        
                    </div>
                    
                </div>
            </form>
        
        

        </div>

	
</div>
<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	<button class="btn btn-primary">Submit</button>
	
</div>
</div>


      <!-- Main Container -->        
        <?php
	echo '<div class="row-fluid">';
	echo '<div class="span12 offset1">';
       echo "<h2>Popular destinations in " . $_GET["country"] . "</h2>";
       echo "</div>";
       echo "</div>";
        ?>
  
        
	
	<div class="row-fluid">    
	<div class="span8 offset1"> 
        <form class="form-inline" method="get" action="searchresults2.php">
            
                
                    <!-- start of drop down country selection list -->
<!-- generated via http://javascript.about.com/ Script Generator -->
<select name="country" size="1" >
<?php

include 'dbCon.php';
       
        
        
           $query= "SELECT DISTINCT Country FROM `Locations` ORDER BY Country";
           $runQuery=mysql_query($query) or die("error");
        
        
        while ($row=mysql_fetch_assoc($runQuery)){
			if ($row['Country']==$_GET["country"]){
			    ?>
			<option selected="selected" ><?php echo $row['Country']; ?></option>
			<?php }
			else {
			    ?>
			    <option ><?php echo $row['Country']; ?></option>
			    
			<?php } }
                    ?>
		    </select>     

                
                    <select name="themes">
                        <option selected="selected"><?php echo $_GET["themes"]; ?></option>
                        <option >All</option><option>Adventure</option><option>Entertainment</option><option>Family Fun</option><option>History and Culture</option><option>Night life</option><option>Shopping</option>                
                    </select>
                
                    
                    <button type="submit" class="btn">Inspire me!</button>
                
        </form>
        </div>
	<div class="span1" >
    <p><i class="icon-arrow-down icon-2x"></i> 
  </div>
  <div class="span3">
     <p><h4>Click the city inside the description to view the list of attractions!<h4></a></p> 
  </div>
	</div>
	<div
        <div id="#results">
            
        </div>
	</div>
	</div>
        <?php
        include 'dbCon.php';
if($_GET["op"]=="more"){
$query1="SELECT * FROM `Locations` WHERE Country='".$_GET["country"]."' ORDER BY wishes DESC";
$runQuery1= mysql_query($query1) or die("error");;
} else{
	
	
                  
	  $query1= "SELECT * FROM `Locations` WHERE Country='".$_GET["country"]."' ORDER BY wishes DESC LIMIT 5";
           $runQuery1=mysql_query($query1) or die("error");
		$n=mysql_num_rows($runQuery1);

         }       
        echo "<div class='container-fluid'>";
        echo "<div id=\"accordion\">";
        while ($row1=mysql_fetch_assoc($runQuery1))
        {
if($_GET["themes"]!="All"){

                $q="SELECT * FROM  `Attractions` WHERE City='".$row1['City']."' AND Theme='".$_GET["themes"]."'" ;
                $r=mysql_query($q) ;
		if(mysql_num_rows($r)==0){
		$n--;
		}
		if ($n==0&&$_GET['country']!=USA) {
		?>
	<div class="alert alert-error">
	  <h4><b>Sorry!</b> There are no results matching your search criteria.</h4>
	</div>
	
	<?php
	}
	

}
                if (mysql_fetch_assoc($r) OR $_GET["themes"]=="All"){
		  
                $city = $row1['City'];
                $image = $row1['smallImage'];
                echo "<h3>$city</h3>"; 
                echo "<div>";
                echo "<p>";
                echo "<img src=$image width='400' height= '300' align= 'left' hspace='25'>";
                ?>     


                <a href="accordian.php?city=<?php echo $city;?>&theme=<?php echo $_GET["themes"]; ?>"><?php echo "<h4><b>$city</b></h4>"?></a>
                <?php
                echo "<br>";
		echo "<div class='span4'>";
		echo "<div class='comment more'>";
		$newdesc = str_replace("\"", "&quot;", $row1['Description']);
		$newdesc = str_replace("Ð", "&ndash;", $newdesc);
                echo $newdesc; 
		echo "</div>";
		echo "</div>";
		echo "</p>";
		echo "</div>";
		
		
               
        }
}

        ?>
</div>
</div>
<div class="span3 offset1">
<?php if($_GET["country"]=="USA"&&$_GET["op"]!="more"){ ?>

       <a href="?op=more&&country=<?php echo $_GET["country"]; ?>&&themes=<?php echo $_GET["themes"]; ?>"><h4> View all cities</h4></a><br/>
<?php } ?>
</div>
</div>


<div class="container marketing">


<hr class="featurette-divider">
<!-- FOOTER -->
      
      
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>For more details and support, <a href="mailto: DreamTrip6.470@gmail.com">Contact Us</a></p>
	<p>Dream Trip is a MIT 6.470 project.</p>

      
</div>


<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

     
       
	
       

    </body>
  <SCRIPT>
$(document).ready(function() {
	var showChar = 300;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);

			var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
</SCRIPT>
</html>