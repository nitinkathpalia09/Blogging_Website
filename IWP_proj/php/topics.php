<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:signin.php");
} else {
$host='localhost';
$username='root';
$password='';
$connect=mysql_connect($host,$username,$password);

if(!mysql_connect($host,$username,$password) || !mysql_select_db('Vista'))
{
	die("Could Not Connect");
}
else{
  $query=mysql_query("SELECT * FROM signup WHERE UserId='".$_SESSION["sess_user"]."' ");
  while($row=mysql_fetch_assoc($query))
  {
  $dbusername=$row['Username'];
  $dbpassword=$row['Password'];
  $dbfname=$row['FirstName'];
  $dblname=$row['LastName'];
  $dbdp=$row['DP'];
  $dbid=$row['UserId'];
}
}


	$connect=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('Vista') or die("cannot select DB");


	if(isset($_POST['submit']))
{
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t4=$_POST['t4'];
	$t5=$_POST['t5'];
	$t6=$_POST['t6'];
	$t7=$_POST['t7'];
	$t8=$_POST['t8'];
	$t9=$_POST['t9'];
	$t10=$_POST['t10'];
	$t11=$_POST['t11'];
	$t12=$_POST['t12'];
	$t13=$_POST['t13'];
	$t14=$_POST['t14'];
	$t15=$_POST['t15'];
	$t16=$_POST['t16'];
	$t17=$_POST['t17'];
	$t18=$_POST['t18'];
	$t19=$_POST['t19'];
	$t20=$_POST['t20'];
	$t21=$_POST['t21'];
	$t22=$_POST['t22'];
	$t23=$_POST['t23'];
	$t24=$_POST['t24'];
	$t25=$_POST['t25'];
  $connect=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('Vista') or die("cannot select DB");
  $sql="INSERT INTO topic(UserId,Actors,Books,Gaming,Fitness,Food,Business,Auto,Music,Nature,Movies,Sports,Technology,Travel,Science,Culture,Photography,Art,Television,News,Politics,History,Beauty,Programming,Quotes,Comics) VALUES('$dbid','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t20','$t21','$t22','$t23','$t24','$t25') ";

  if(mysql_query($sql))
  {
  header("Location: timeline.php");
  }
   else {
    echo  "<script type='text/javascript'>alert('Invalid username/password.  Please try again');</script>";
  }



}
}
?>


<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="header.css">
  <link href="button.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/.min.js"> </script>
  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
  }

  /* Set the width of the side navigation to 0 */
  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }

  </script>
  <style>

  body{

    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;

  }

  .text {

    color: black;
    font-size: 70px;
    text-align: center;
    margin-top: 0px;
    margin-bottom: 10px;

    font-family:Comic Sans MS;
  }

  .font {
  font-size:20px;
    font-family: Comic Sans MS;
  }


    div.gallery {
        margin-left: 10px;
        border: 1px solid #ccc;
        float: left;
        width: auto;
        margin-bottom: 10px;

    }

    div.gallery:hover {
        border: 1px solid #777;
        opacity: 0.7;
				cursor:pointer;
    }

    div.gallery img {
        width: 250px;
        height: 150px;
    }

    div.desc {
        padding: 5px;
        text-align: center;
    	background: #555;
    	font-family:Comic Sans MS;
    	color:white;
    }
    input:invalid {
        border-color:red;
        border-width: 3px;
}
input[type=checkbox] {
   position: absolute;
   width:250px;
   height:150px;
   opacity:0;


   /* For mobile, it's typically better to position checkbox on top of clickable
      area and turn opacity to 0 instead. */
}



input[type=checkbox]:checked ~ div.gallery {
   opacity:0.5;
}

.get_value{
height: 150px;
width:250px;

}

#proname{
  color:#BBBBBB;
  font-size: 30px;

}

</style>

<title > Topics</title>
<link rel="stylesheet" href="slide.css">
</head>


<body  bgcolor="#555"  >

    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <center><img src="<?php echo $dbdp; ?>" alt="pro" height=120 width=120 style="border-radius:100%"></center>
    <br>
    <br>
    <center><span id="proname" ><?php echo $dbfname ?></span></center>

    <a href="profile.php">Profile</a>
    <a href="settings.php">Settings</a>
    <a href="contact.php">Contact</a>
    <b><a href="logout.php">Log Out</a></b>
  </div>


<header>
   <ul>
    <a href="hgfd"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

    <li class="name">

   <form method="get" action="/search" id="searchbox5">
      <input id="search5" name="q" type="text" size="40" placeholder="Search..." />

   </form>

    </li>
<li class="name"  style="float:right;"><a onclick="openNav()" style="cursor:pointer" >&#9776;</a></li>
    <li class="name"style="float:right" ><a href="timeline.php">Home</a></li>


    </ul>
  </header>

  <div style="background:url('images/back.png');">


      <center >
        <p class=text >Vista.</p>
        <p class=font>
          Come for what you love.<br>
          Stay for what you discover.<br>
         </p>
       <p class=font>
       Tell us what you like.We'll bring it to you.<br>
     </p></center>
  <center>
       <script>



function abc(id){
a=document.getElementById(id);
if(a.style.opacity==1){
a.style.opacity='0.99';
a.style.filter='sepia(200%)';

}
else{
a.style.opacity='1';
a.style.filter='';



}
}

</script>
<form action="" method="POST">
    	 <div class="gallery" style="opacity:1" id="1" onclick=abc(id)>
		 <input type="checkbox" name="t1"  value="Actors"/>
        <img src="images/actor.jpg" alt="actors" width="300" height="200" >

      <div class="desc">Actors</div>
    </div>

	<div class="gallery" style="opacity:1" id="2" onclick=abc(id)>
       <input type="checkbox" name="t2" class="get_value" value="Books" />
        <img src="images/books.jpg" alt="books" width="300" height="200">
      <div class="desc">Books</div>
    </div>
     <div class="gallery" style="opacity:1" id="3" onclick=abc(id)>
      <input type="checkbox"  name="t3" class="get_value" value="Gaming"/>
        <img src="images/gaming.jpg" alt="gaming" width="300" height="200">

      <div class="desc">Gaming</div>
    </div>
    <div class="gallery" id="4" style="opacity:1"  onclick=abc(id)>
       <input type="checkbox"  name="t4" class="get_value" value="Fitness"/>
        <img src="images/fitness.jpg" alt="fitness" width="300" height="200">

      <div class="desc">Fitness</div>
    </div>
     <div class="gallery" id="5" style="opacity:1" onclick=abc(id)>
      <input type="checkbox"  name="t5" class="get_value" value="Food"/>
        <img src="images/food.jpg" alt="food" width="300" height="200">

      <div class="desc">Food</div>
    </div>
     <div class="gallery" id="6" onclick=abc(id) style="opacity:1">
      <input type="checkbox"  name="t6" class="get_value" value="Business"/>
        <img src="images/business.jpg" alt="business" width="300" height="200">

      <div class="desc">Business</div>
    </div>
     <div class="gallery" style="opacity:1" id="7" onclick=abc(id)>
      <input type="checkbox"  name="t7" class="get_value" value="Auto"/>
        <img src="images/auto.jpg" alt="auto" width="300" height="200">

      <div class="desc">Auto</div>
    </div>
     <div class="gallery" style="opacity:1" id="8" onclick=abc(id)>
      <input type="checkbox"  name="t8" class="get_value" value="Music"/>
        <img src="images/music.jpg" alt="music" width="300" height="200">

      <div class="desc">Music</div>
    </div>
     <div class="gallery" style="opacity:1" id="9" onclick=abc(id)>
      <input type="checkbox"  name="t9" class="get_value" value="Nature"/>
        <img src="images/nature.jpg" alt="nature" width="300" height="200">

      <div class="desc">Nature</div>
    </div>
     <div class="gallery" style="opacity:1"  id="10" onclick=abc(id)>
      <input type="checkbox"  name="t10" class="get_value" value="Movies"/>
        <img src="images/movies.jpg" alt="movies" width="300" height="200">

      <div class="desc">Movies</div>
    </div>
     <div class="gallery" style="opacity:1" id="11" onclick=abc(id)>
      <input type="checkbox"  name="t11" class="get_value" value="Sports"/>
        <img src="images/sports.jpg" alt="sports" width="300" height="200">

      <div class="desc">Sports</div>
    </div>
     <div class="gallery" style="opacity:1" id="12" onclick=abc(id) >
      <input type="checkbox"  name="t12" class="get_value" value="Technology"/>
        <img src="images/tech.jpg" alt="tech" width="300" height="200">

      <div class="desc">Technology</div>
    </div>
     <div class="gallery" style="opacity:1" id="13" onclick=abc(id)>
      <input type="checkbox"  name="t13" class="get_value" value="Travel"/>
        <img src="images/travel.jpg" alt="travel" width="300" height="200">

      <div class="desc">Travel</div>
    </div>
     <div class="gallery" style="opacity:1" id="14" onclick=abc(id)>
      <input type="checkbox"  name="t14" class="get_value" value="Science"/>
        <img src="images/science.jpg" alt="science" width="300" height="200">

      <div class="desc">Science</div>
    </div>
     <div class="gallery" style="opacity:1" id="15" onclick=abc(id)>
      <input type="checkbox"  name="t15" class="get_value" value="Culture"/>
        <img src="images/culture.jpg" alt="culture" width="300" height="200">

      <div class="desc">Culture</div>
    </div>
     <div class="gallery" style="opacity:1" id="16" onclick=abc(id)>
      <input type="checkbox"  name="t16" class="get_value" value="Photography"/>
        <img src="images/photo.jpg" alt="photo" width="300" height="200">

      <div class="desc">Photography</div>
    </div>
     <div class="gallery" style="opacity:1" id="17" onclick=abc(id)>
      <input type="checkbox"  name="t17" class="get_value" value="Art"/>
        <img src="images/art.jpg" alt="art" width="300" height="200">

      <div class="desc">Art</div>
    </div>
     <div class="gallery" style="opacity:1" id="18" onclick=abc(id)>
      <input type="checkbox"  name="t18" class="get_value" value="Television"/>
        <img src="images/tele.jpg" alt="tele" width="300" height="200">

      <div class="desc">Television</div>
    </div>
     <div class="gallery" style="opacity:1" id="19" onclick=abc(id)>
      <input type="checkbox"  name="t19" class="get_value" value="News"/>
        <img src="images/news.jpg" alt="news" width="300" height="200">

      <div class="desc">News</div>
    </div>
     <div class="gallery" style="opacity:1" id="20" onclick=abc(id)>
      <input type="checkbox"  name="t20" class="get_value" value="Politics"/>
        <img src="images/politics.jpg" alt="politics" width="300" height="200">

      <div class="desc">Politics</div>
    </div>
     <div class="gallery" style="opacity:1" id="21" onclick=abc(id)>
      <input type="checkbox"  name="t21" class="get_value" value="History"/>
        <img src="images/history.jpg" alt="history" width="300" height="200">

      <div class="desc">History</div>
    </div>
     <div class="gallery" style="opacity:1" id="22" onclick=abc(id)>
      <input type="checkbox"  name="t22" class="get_value" value="Beauty"/>
        <img src="images/beauty.jpg" alt="beauty" width="300" height="200">

      <div class="desc">Beauty</div>
    </div>
     <div class="gallery" style="opacity:1" id="23" onclick=abc(id)>
       <input type="checkbox"   name="t23" class="get_value" value="Programming"/>
        <img src="images/code.jpg" alt="code" width="300" height="200">

      <div class="desc">Programming</div>
    </div>
     <div class="gallery" style="opacity:1" id="24" onclick=abc(id)>
      <input type="checkbox"  name="t24" class="get_value" value="Quotes"/>
        <img src="images/quotes.jpg" alt="quotes" width="300" height="200">

      <div class="desc">Quotes</div>
    </div>
     <div class="gallery" style="opacity:1"  id="25" onclick=abc(id)>
      <input type="checkbox"  name="t25"  class="get_value" value="Comics"/>
        <img src="images/comics.jpg" alt="comics" width="300" height="200">

      <div class="desc">Comics</div>
    </div>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



    <button  type="submit" name="submit" class="button"  style="height:60px">
      <span class="shift">Start Exploring ›</span>
      <div class="mask"></div>
    </button>

    </form>
            <br>
          </center>

  </div>





  <footer class="footer-distributed">
  <div class="footer-left">
       <a href="hgfd"><img src="images/logo.png"height="60" width="230" align="left" id="logo" ></a><br><br><br><br><br>
       <p class="footer-links">
         <a href="main.html">Home</a>
         ·
         <a href="terms.html">Terms of Service</a>
         ·
         <a href="aboutus.html">About</a>
         ·
         <a href="faq.html">FaQ</a>
         ·
         <a href="privacy.html">Privacy</a>
       </p>
       <p class="footer-company-name">VISTA &copy; 2017</p>
     </div>
  <div class="footer-center">
       <div>
         <i class="fa fa-map-marker"></i>
         <p><span>K-608,VIT University</span> Vellore, Tamil Nadu</p>
       </div>
       <div>
         <i class="fa fa-phone"></i>
         <p>+91-9585438508<br>+91-9790097468<br>+91-9585371755</p>
       </div>

       <div>
         <i class="fa fa-envelope"></i>
         <p><a href="mailto:support@company.com">help@vista.com</a></p>
       </div>
     </div>
  <div class="footer-right">

       <p class="footer-company-about">
         <span>About the company</span>
         Write |
         Read |
         Share <br>
         <br>
       </p>
       <p class="footer-company-about">
       <span> Follow us on:</span>
       <div class="footer-icons">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-linkedin"></i></a>
         <a href="#"><i class="fa fa-github"></i></a>
       </div>
  </div>
  </footer>
</body>
</html>
