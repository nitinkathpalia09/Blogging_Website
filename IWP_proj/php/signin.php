<!DOCTYPE HTML>
<HTML>

<head>
  <title> Sign In </title>
  <link rel="shortcut icon" href="uplogo.ico" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link href="header.css" rel="stylesheet" type="text/css">
<link href="footer.css" rel="stylesheet" type="text/css">
<link href="button.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
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

  font-family:Comic Sans MS;
}

.font {
font-size:20px;
  font-family: Comic Sans MS;
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

.up
{
  background: url(signup.png);

}

</style>

</head>

<body bgcolor="#555">
<header>
<ul>
  <a href="main.php"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

<li  style="float:right"><a href="signup.php">Sign Up</a></li>

</ul>
</header>

<div class="up" style="background:url('images/signup.png');">
<br>
<br>
  <center >
    <p class=text >Vista.</p>
    <p class=font>
      Come for what you love.<br>
      Stay for what you discover.<br>
     </p>
	 <br>
	 <br>
	 <br>

<form method="POST" action="">
<p align="center" style="color:black;font-size: 20px;font-weight: normal;">
<input style="margin-left:1em;" type="text" class="TextBox"placeholder="Username" name="user" id="uname"><br>
 <input style="margin-left:1em;" type="text" class="TextBox" placeholder="Password" name="pass" id="pass"><br>
 </p>

 <br>
 <!---button---------------------------->

 <button class="button" name="submit">
   <span class="shift">Sign In ›</span>
   <div class="mask"></div>
 </button>

 </form>
 <!--------------------------------->
  </center>
  <?php
  if(isset($_POST["submit"])){

  if(!empty($_POST['user']) && !empty($_POST['pass'])) {
      $user=$_POST['user'];
      $pass=$_POST['pass'];

      $con=mysql_connect('localhost','root','') or die(mysql_error());
      mysql_select_db('Vista') or die("cannot select DB");

      $query=mysql_query("SELECT * FROM signup WHERE Username='".$user."' AND Password='".$pass."'");
      $numrows=mysql_num_rows($query);
      if($numrows!=0)
      {
      while($row=mysql_fetch_assoc($query))
      {
      $dbusername=$row['Username'];
      $dbpassword=$row['Password'];
      $dbid=$row['UserId'];
      }

      if($user == $dbusername && $pass == $dbpassword)
      {
      session_start();
      $_SESSION['sess_user']=$dbid;

      /* Redirect browser */
      header("Location: timeline.php");
      }
      } else {
        echo  "<script type='text/javascript'>alert('Invalid username/password.  Please try again');</script>";
      }

  } else {
      echo "<script type='text/javascript'>alert('All fields are required');</script>";
  }
  }
  ?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
