<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:signin.php");
} else {
  if(!mysql_connect('localhost','root','') || !mysql_select_db('Vista'))
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
  $dbemail=$row['Email'];
  $dbdob1=$row['DOB'];
  $dbdob=date('d-M-Y',strtotime($dbdob1));
  $dbid=$row['UserId'];
}
          if(isset($_POST['updateall'])){

            if(isset($_POST['upusername']) && isset($_POST['uppassword']) && isset($_POST['upfname']) && isset($_POST['uplname'])) {
                      $fname=$_POST['upfname'];
                      $lname=$_POST['uplname'];
                      $user=$_POST['upusername'];
                      $pass=$_POST['uppassword'];
                      mysql_connect('localhost','root','') or die(mysql_error());
                      mysql_select_db('Vista') or die("cannot select DB");

                          if(!empty($_FILES['photo']['name'])){

                                    $fileName = $_FILES['photo']['name'];
                                    $tmpName  = $_FILES['photo']['tmp_name'];
                                    $filePath = "images/". $fileName;
                                    $result = move_uploaded_file($tmpName, $filePath);
                                    $query = "UPDATE signup SET FirstName='$fname',LastName='$lname',Username='$user',Password='$pass',DP='$filePath' WHERE Username='$dbusername'";
                                    mysql_query($query) or die('Error, query failed');


                                  }
                            else{
                              $query = "UPDATE signup SET FirstName='$fname',LastName='$lname',Username='$user',Password='$pass' WHERE UserId='$dbid'";
                              mysql_query($query) or die('Error, query failed');
                            }
                            header("Refresh:0");

                    }






          }
}

?>
<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="slide.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="button.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <title>
    Settings
  </title>
</head>
<style>
body{

  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
}
.head
{
  font-family: "Courier New", Courier, monospace;
  font-size: 50px;
  color:#696969;

}
.prop{
  height: 30px;
  width:300px;

  float:left;
  margin-left: 50px;
  margin-right: 30px;
  text-align: left;
  font-size: 25px;
  font-family: Comic Sans MS ;
  color: #696969;

}
.val{
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

  input:invalid {
      border-color:red;
      border-width: 3px;
  }
  .imageupload{
    height:27%;
    width: 15%;
    float: right;
    margin-right: 80px;
    background: #567899;
    border-radius: 100%;
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
  .imageupload:hover .imageupload1 {
    opacity: 0.3;
  }

  .imageupload:hover .middle {
    opacity: 1;
  }
  /* The Modal (background) */
.modal {
    display: none;
    position: fixed;
    z-index: 1; /* Sit on top */
    padding-top: 30px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
.upload-wrap {
    position: relative;
}

.upload-btn {
    position: absolute;
    left: 0;
    opacity: 0;
    margin-left: 70%;
    margin-top: -21%;
    height: 100%;
    width: 30%;
    float: center;
    position: absolute;
    cursor: pointer;
}
.button2 {
	position: relative;
	display: block;
	background:		#3d3c3c;
	background-size: cover;
	border: 2px solid #2e2e2e;
	text-transform: uppercase;
	letter-spacing: .3rem;
	padding: 15px 2px 25px 2px;
	text-align: center;
	width: 140px;
  height: 25px;
	cursor: pointer;
	overflow: hidden;
  border-radius: 5%;
  outline: none;
	font-family: 'Varela Round';
	color: #FFFFFF;
	-webkit-transition: border 1s cubic-bezier(0.19,1,.22,1),color .6s cubic-bezier(0.19,1,.22,1);
	transition: border 1s cubic-bezier(0.19,1,.22,1), color .6s cubic-bezier(0.19,1,.22,1), background 5s cubic-bezier(0.19,1,.22,1);

}
#proname{
  color:#BBBBBB;
  font-size: 30px;

}
.editbut{

  height:30px;
  width:30px;
  padding:0px 0px 0px 0px;
  border-radius: 10px 10px;
  border: 1px black solid;
  box-shadow:2px 2px 1px #888888;
}
.editbut:hover {
  box-shadow: 0px 0px 0px 0px;
}
</style>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
</head>
<body bgcolor="#555">


  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <center><img src="<?php echo $dbdp;?>" alt="pro" height=120 width=120 style="border-radius:100%"></center>
  <br>
  <br>
  <center><span id="proname" ><?php echo $dbfname ?></span></center>

  <a href="profile.php">Profile</a>
  <a href="#">Topics</a>
  <a href="settings.php">Settings</a>
  <a href="contact.php">Contact</a>
  <b><a href="logout.php">Log Out</a></b>
</div>
  <!--------------------------------------------------------------------------------------------------->
<header>
<ul>
  <a href="timeline.php"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

  <li class="name">

<form method="get" action="/search" id="searchbox5">
    <input id="search5" name="q" type="text" size="50" placeholder="Search..." />

</form>

  </li>
  <li class="name"  style="float:right;"><a onclick="openNav()" style="cursor:pointer" >&#9776;</a></li>
  <li class="name" style="float:right;"><a href="timeline.php">Home</a></li>


</ul>
</header>
<!--------------------------------------------------------------------------------------------------->
<div style="background-color:#FFFFFF;">
  <br>
  <br>
  <br>
<center>
  <p class="head">-Edit Your Profile-</p>
</center>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>
<div class="imageupload">
  <center><img src="<?php echo $dbdp;?>" alt="pro" id="imgdp" style="border-radius:100%;height:100%;width:100%;"class="imageupload1"></center>
  <div class="middle">
    <button class="button2" name="update" id="viewimg" style="height:-2%;width:30%;margin-left:70%;margin-bottom:10%;margin-top:18%">
      <span class="shift"> View</span></a>

    </button>


  <script>
var modal = document.getElementById('myModal');
var dp=document.getElementById('imgdp');
var img = document.getElementById('viewimg');
var modalImg = document.getElementById("img01");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src =dp.src;
}


var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}
</script>


<div class="upload-wrap">
  <button name="uploadedimage" type="file" class="button" style=" color: #FFFFFF;height:-2%;width:30%;margin-left:70%;">
    <span class="shift"> Edit</span></a>
    <div class="mask"></div>
  </button>
  <form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="photo" class="upload-btn" >

</div>
  </div>
</div>
<div class="prop">
<b> First Name</b>
</div>

<div style="height:30px;width=100px;">
  <input type="text" class="val" name="upfname" id="fn" readonly pattern="[A-Za-z]{1,20}" value="<?php echo $dbfname?>">
<div style="margin-top:3px;position:relative;float:right;margin-right:18%;">
  <div  class="editbut" name="butfname" onclick="enable1()" ><img src="images/edit.png" height="30" width="30" style="border-radius: 10px 10px;"></div>
  <script>
  function enable1()
  {
    document.getElementById('fn').readOnly=false;
  }
  </script>
</div>
</div>
<br>
<div class="prop">
<b>  Last Name</b>
</div>

<div style="height:30px;width=100px;">
  <input type="text" class="val"  name="uplname" id="ln" readonly pattern="[A-Za-z]{1,20}" value="<?php echo $dblname?>">

  <div style="margin-top:3px;position:relative;float:right;margin-right:18%;">
    <div  class="editbut" onclick="enable2()"><img src="images/edit.png" height="30" width="30" style="border-radius: 10px 10px;"></div>
    <script>
    function enable2()
    {
      document.getElementById('ln').readOnly=false;
    }
    </script>

  </div>

</div>
<br>
<div class="prop">
<b> Username</b>
</div>

<div style="height:30px;width=100px;">
  <input  type ="text" class="val" id="un" name="upusername" readonly pattern="^[A-Za-z0-9_]{1,32}$" value="<?php echo $dbusername?>">

  <div style="margin-top:3px;position:relative;float:right;margin-right:18%;">
    <div  class="editbut" onclick="enable3()"><img src="images/edit.png" height="30" width="30" style="border-radius: 10px 10px;"></div>
    <script>
    function enable3()
    {
      document.getElementById('un').readOnly=false;
    }
    </script>
  </div>


</div>
<br>
<div class="prop">
<b> Password</b>
</div>

<div style="height:30px;width=100px;">
  <input type="text" class="val" name="uppassword" value="<?php echo $dbpassword?>" readonly id="pwd" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">

  <div style="margin-top:3px;position:relative;float:right;margin-right:18%;">
    <div  class="editbut" onclick="enable4()" ><img src="images/edit.png" height="30" width="30" style="border-radius: 10px 10px;"></div>
    <script>
    function enable4()
    { prompt(" Current Password")
      document.getElementById('pwd').readOnly=false;
      document.getElementById('pwd1').readOnly=false;
    }
    </script>
  </div>

</div>
<br>
<div class="prop">
<b> Confirm Password</b>
</div>

<div style="height:30px;width=100px;">
  <input type="text" class="val" id="pwd1" readonly pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" onkeyup="check_pass()">

  <script>
  function check_pass() {
    if (document.getElementById('pwd').value !=document.getElementById('pwd1').value) {
        document.getElementById('error').innerHTML=" <img src='images/false.png' height=15 width=15>  Password doesn't match";
        document.getElementById('error').style.color="#e82727";
    }
    else {
        document.getElementById('error').innerHTML="<img src='images/true.png' height=15 width=15> Matched ";
        document.getElementById('error').style.color="#42c428";
    }
}
  </script>
<b><span id="error" > </span></b>

</div>




<br>
<br>
<center>
<button class="button" type="submit" name="updateall">
  <span class="shift"> Update ›</span></a>
  <div class="mask"></div>
</button>
</form>
</center>
<br>
<br>
<br>

</div>









<!--------------------------------------------------------------------------------------------------->
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
</body>
<?php
}
?>
