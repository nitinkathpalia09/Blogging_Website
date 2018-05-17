<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="header.css">
  <style>
  body{

    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
  }

.text {
  background-color: #6d7377;
  color: white;
  font-size: 26px;
  text-align: center;
  display: block;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 80%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.container {
    position: relative;
    height:400px;;
    width:100%;
}

.image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
  height:400px;
  width:100%;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}


.font {
  font-family: "Comic Sans MS", cursive, sans-serif;
  font-size: 35px;
text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
color: #191970;
}

.section
{
  font-family:"Lucida Console", Monaco, monospace;
  font-size: 20px;
}

header{
  width: 100%;
  position: fixed;
  overflow: visible;
  border-bottom: none;
  z-index: 4;
}

.splash-container {
    background-color: #66BBBA;
    background-size: cover;
    z-index: 1;
    overflow: hidden;
    /* The following styles are required for the "scroll-over" effect */
    width: 100%;
    height: 70%;
    top:9%;
    left: 0;
    position: fixed !important;
}

.splash {
    width: 80%;
    height: 80%;
    margin-left: 70px;
    position: absolute;
    top: 40px; left: 0; bottom: 0; right: 0;
    text-align: center;
    text-transform: uppercase;


}
.splash-img{
  background: url(images/main1.png);
  background-repeat: no-repeat;
  background-size:cover;
  width:150%;
  height: 100%;
  margin-left: -200px;
  background-position: center;
  opacity: 0.4;
  position: absolute;

}


.con{
  top:75%;
  position: absolute;
  z-index: 2;
}
</style>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
<link rel="stylesheet" href="css/layouts/marketing.css">
<title > Vista</title>
</head>
<!--------------------------------------------------------------------------------------------------->
<body bgcolor="#555">

  <!--------------------------------------------------------------------------------------------------->
<header>
<ul>
  <a href="main.php"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

  <li>

<form method="get" action="/search" id="searchbox5">
    <input id="search5" name="q" type="text"  placeholder="Search..." />

</form>

  </li>

  <li style="float:right;"><a href="signin.php">Sign In</a></li>
  <li style="float:right;" ><a href="signup.php">Sign Up</a></li>
</ul>
</header>
<!--------------------------------------------------------------------------------------------------->

  <div class="splash-container">
    <div class="splash-img"></div>
      <div class="splash">
          <h1 >Vista</h1>
          <p class="font">
            Come for what you love.
            Stay for what you discover.
          </p>


    </div>
  </div>


<!--------------------------------------------------------------------------------------------------->
<div class="con">
<section style="background-color:#98FB98;">
<table>
  <tr>
    <td width="700" class="section"><center>
  <h1 color:#fff >Know Your Audience</h1>
  <p>Find out which posts are a hit with Vista's<br>
       built-in analytics.You’ll see where your audience<br>
       is coming from and what they’re interested in.<br>
      </p><center></td>
    <td align="right" width=600><img src="images/sec1.png" height="450" width="480"></td>
  </tr>
</table>
</section>
<!--------------------------------------------------------------------------------------------------->
<section style="background-color:#E6E6FA;">
<table>
  <tr>
    <td align="left" width=600><img src="images/sec2.png" height="450" width="450"></td>
    <td width="700" class="section"><center>
  <h1 color:#fff >Move Thinking forward</h1>
  <p >Vista is a community of readers and writers<br>
       offfering unique perspectives on ideas large and small.<br>
     </p><center></td>

  </tr>
</table>
</section>
<!-------------------------------------------------------------------------------------------------->
<section style="background-color:#87CEFA;">
<table>
  <tr>
    <td width="700" class="section"><center>
  <h1 color:#fff>Vista is so easy to use that it’s hard to explain.</h1>
  <p>We made it really, really simple for people to <br>
       make a blog and put whatever they want on it. <br>
        Stories, photos,links, quips, dumb jokes, <br>
        smart jokes, videos, fashion, art, deep stuff.</p><center></td>
    <td align="right" width=600><img src="images/sec3.png" height="450" width="480"></td>
  </tr>
</table>
</section>

<!-------------------------------------------------------------------------------------------------->
<div class="container">
<img src="images/create.jpg" alt="Avatar" class="image">
<div class="middle">
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


  <ul >
  <li class="text"><a href="signin.php">Share Your Ideas</a></li>
  </ul>
</div>
</div>
<!-------------------------------------------------------------------------------------------------->
<footer class="footer-distributed">
  <div class="footer-left">
				<a href="hgfd"><img src="images/logo.png"height="60" width="230" align="left" id="logo" ></a><br><br><br><br><br>
				<p class="footer-links">
					<a href="terms.php">Terms of Service</a>
					·
					<a href="aboutus.php">About</a>
					·
					<a href="faq.php">FaQ</a>
					·
					<a href="privacy.php">Privacy</a>
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
					<span>About the Website</span>
					Write |
          Read |
          Share <br>
          <br>


				</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</footer>
  </div>
</body>
</html>
