<?php
$host='localhost';
$username='root';
$password='';


if(!mysql_connect($host,$username,$password) || !mysql_select_db('Vista'))
{
	die("Could Not Connect");
}
else{
  if(isset($_POST["sign"])){

	echo 'dksdnjhbhjbfjwfjke';
  if(isset($_POST['username'])&& isset($_POST['password'])){
  if(!empty($_POST['username']) && !empty($_POST['password'])) {


  	$date=date('Y-m-d',strtotime($_POST['dob']));
  	$fname=$_POST['fname'];
  	$lname=$_POST['lname'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];
  	$username=$_POST['username'];
      $con=mysql_connect('localhost','root','') or die(mysql_error());
      mysql_select_db('Vista') or die("cannot select DB");




      $sql="INSERT INTO signup(First_Name,Last_Name,DOB,Email,Password,Username) VALUES('$fname','$lname','$date','$email','$password','$username')";

      $result=mysql_query($sql);
          if($result){
      echo "Account Successfully Created";
      } else {
      echo "Failure!";
  	echo $result;
      }



  } else {
      echo "All fields are required!";
  }
  }
}
}

?>




<!DOCTYPE html>
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
  <style>

  body{

    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
  }


  /* Slideshow container */
  .slideshow-container {
    width: auto;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
  }

  /* Position the "next button" to the right */
  .next {
    right: 8px;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }






  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
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

  .up
  {
    background: url(signup.png);

  }
  .TextBox{
   padding: 0;
      height: 40px;
      width: 350px;
  	border-radius: 5px;
      position: relative;
      left: 0;
      outline: none;
      border: 1px solid #cdcdcd;
      border-color: rgba(0,0,0,.15);
      background-color: #34495E;
      font-size: 20px;
  	color: #cdcdcd;
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

</style>

<title > Sign Up</title>
</head>
<!--------------------------------------------------------------------------------------------------->
<body  bgcolor="#555"  >


<header>
   <ul>
    <a href="hgfd"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

    <li class="name">

   <form method="get" action="/search" id="searchbox5">
      <input id="search5" name="q" type="text" size="40" placeholder="Search..." />

   </form>

    </li>

    <li class="name"style="margin-left:8.4em;" ><a href="signin.html">Sign In</a></li>

    </ul>
  </header>




<div class="slideshow-container" >
  <div class="mySlides fade" name="1" style="background:url('images/signup.png');">

    <div class="up">

      <center >
        <p class=text >Vista.</p>
        <p class=font>
          Come for what you love.<br>
          Stay for what you discover.<br>
         </p>
    	 <p class=font>
    	 Tell us about yourself.<br>
    	 </p>

    	 <br>

	<form action="signup.php" method="POST">
    <p align="center" style="color:black;font-size: 20px;font-weight: normal;">
    <input style="margin-left:1em;" type="text" class="TextBox" placeholder="First Name" name="fname" id="fname" pattern="[A-Za-z]{1,20}"><br>
     <input style="margin-left:1em;" type="text" class="TextBox" placeholder="Last Name" name="lname" id="lname" pattern="[A-Za-z]{1,20}"><br>
     <input style="margin-left:1em;" type="date" class="TextBox" placeholder="Date of Birth" name="dob" id="age"><br>
    </p><br>


    <div class="button" onclick="plusSlides(1)">
      <a href="#2" >Next<span class="shift">›</span></a>
      <div class="mask"></div>
    </div>

      </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    </div>


  </div>

  <div class="mySlides fade" name="2" style="background:url('images/signup.png');">

    <div class="up">

      <center >
        <p class=text >Vista.</p>
        <p class=font>
          Come for what you love.<br>
          Stay for what you discover.<br>
         </p>

    	 <br>

     <p align="center" style="color:black;font-size: 20px;font-weight: normal;">
     <input style="margin-left:1em;" type="email" class="TextBox"  placeholder="Email" name="email" id="email"><br>
     <input style="margin-left:1em;" type="text" class="TextBox"  placeholder="Password" name="password" id="pass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"><br>
     <input style="margin-left:1em;" type="text" class="TextBox" placeholder="Confirm Password" id="pass1" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" onkeyup="check_pass1()"><br>
     <input style="margin-left:1em;" type="text" class="TextBox"  placeholder="Username" name="username" id="uname" pattern="^[A-Za-z0-9_]{1,32}$" ></p><br>
     <script>
     function check_pass1() {
       if (document.getElementById('pass').value !=document.getElementById('pass1').value) {

           document.getElementById('pass1').style.backgroundImage = "url('images/false1.png')";
           document.getElementById('pass1').style.backgroundSize = "25px 25px";
           document.getElementById('pass1').style.backgroundPosition="right";
           document.getElementById('pass1').style.backgroundRepeat = "no-repeat";

       }
       else {
         document.getElementById('pass1').style.backgroundImage = "url('images/true1.png')";
         document.getElementById('pass1').style.backgroundSize = "25px 25px";
         document.getElementById('pass1').style.backgroundPosition="right";
         document.getElementById('pass1').style.backgroundRepeat = "no-repeat";
       }
   }
     </script>


      	<button class="button" name="sign"onclick="plusSlides(1)">
		<span class="shift">Sign Up › </span>
		<div class="mask"></div>
		</button>
	</form>
      </center>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    </div>

  </div>

  <div class="mySlides fade" name="3" style="background:url('images/back.png');">


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
    	 <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/actor.jpg" alt="actors" width="300" height="200">
      </a>
      <div class="desc">Actors</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="forest.jpg">
        <img src="images/books.jpg" alt="books" width="300" height="200">
      </a>
      <div class="desc">Books</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/gaming.jpg" alt="gaming" width="300" height="200">
      </a>
      <div class="desc">Gaming</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/fitness.jpg" alt="fitness" width="300" height="200">
      </a>
      <div class="desc">Fitness</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/food.jpg" alt="food" width="300" height="200">
      </a>
      <div class="desc">Food</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/business.jpg" alt="business" width="300" height="200">
      </a>
      <div class="desc">Business</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/auto.jpg" alt="auto" width="300" height="200">
      </a>
      <div class="desc">Auto</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/music.jpg" alt="music" width="300" height="200">
      </a>
      <div class="desc">Music</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/nature.jpg" alt="nature" width="300" height="200">
      </a>
      <div class="desc">Nature</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/movies.jpg" alt="movies" width="300" height="200">
      </a>
      <div class="desc">Movies</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/sports.jpg" alt="sports" width="300" height="200">
      </a>
      <div class="desc">Sports</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/tech.jpg" alt="tech" width="300" height="200">
      </a>
      <div class="desc">Technology</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/travel.jpg" alt="travel" width="300" height="200">
      </a>
      <div class="desc">Travel</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/science.jpg" alt="science" width="300" height="200">
      </a>
      <div class="desc">Science</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/culture.jpg" alt="culture" width="300" height="200">
      </a>
      <div class="desc">Culture</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/photo.jpg" alt="photo" width="300" height="200">
      </a>
      <div class="desc">Photography</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/art.jpg" alt="art" width="300" height="200">
      </a>
      <div class="desc">Art</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/tele.jpg" alt="tele" width="300" height="200">
      </a>
      <div class="desc">Television</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/news.jpg" alt="news" width="300" height="200">
      </a>
      <div class="desc">News</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/politics.jpg" alt="politics" width="300" height="200">
      </a>
      <div class="desc">Politics</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/history.jpg" alt="history" width="300" height="200">
      </a>
      <div class="desc">History</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/beauty.jpg" alt="beauty" width="300" height="200">
      </a>
      <div class="desc">Beauty</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/code.jpg" alt="code" width="300" height="200">
      </a>
      <div class="desc">Programming</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/quotes.jpg" alt="quotes" width="300" height="200">
      </a>
      <div class="desc">Quotes</div>
    </div>
     <div class="gallery">
      <a target="_blank" href="fjords.jpg">
        <img src="images/comics.jpg" alt="comics" width="300" height="200">
      </a>
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



            <div class="button" style="padding-bottom:30px;padding-top:5px;padding-left:5px;margin-right:200px; " >
              <a href="timeline.html"> Start Exploring<span class="shift">›</span></a>
              <div class="mask"></div>
            </div>
            <br>
          </center>

  </div>




</div>




<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>




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

<script>
var slideIndex =1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


	</body>
</html>
