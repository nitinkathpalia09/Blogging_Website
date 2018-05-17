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
  $dbid=$row['UserId'];
}
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="slide.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="button.css">

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

  #left_div{
      flex: 1;
      overflow:hidden;
      background-color: #111;
      height: 200px;
      color: #fff;
      height: 580px;
      width: 330px;
      float: left;
      margin-top: 0px;
      position: fixed;
  }
  .post{
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 15px;
    padding-bottom: 15px;
    height: auto;
    width: 500px;
    margin-left: 400px;
    background-color: #808080;
    word-wrap: break-word;
    margin-top: 20px;
    float: center;
    position:relative;
    color: #fff;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
}




    .comment
    {
    padding-left: 5px;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    background-color: #333;
    margin-top: 10px;
    height: auto;
    margin-left: 0;
    margin-right: 0;


    }
    textarea {
      padding: 10px;
      vertical-align: top;
      width: 410px;
      background-color: #C0C0C0	;
      font-size: 13px;
    }
    textarea:focus {
      outline-style: solid;
      outline-width: 2px;
    }



.container {
	width: 45px;
	height: 45px;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

.btn {
	width: 45px;
	height: 45px;
    border: none;
    color: inherit;
    background: black;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 300;
    outline: none;
    position: absolute;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.btn img{
    top: 0;
    bottom: 0;
    left: 0;
    right: 5px;

}

.btn:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.bg {
    height: 32px;
    width: 32px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.btn-boarder {
    border: 1.4px solid #fff;
    border-radius: 50%;
}

.animation {
    -webkit-transform: translate(50px, -50px);
    -moz-transform: translate(50px, -50px);
    -o-transform: translate(50px, -50px);
    -ms-transform: translate(50px, -50px);
    transform: translate(50px, -50px);
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    opacity: 0;
}

.animation2 {
    -webkit-animation: fadeIn 0.4s ease-out;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-fill-mode: forwards;
    -webkit-animation-delay: 0.4s;
    -moz-animation: fadeIn 0.4s ease-out;
    -moz-animation-iteration-count: 1;
    -moz-animation-fill-mode: forwards;
    -moz-animation-delay: 0.4s;
    animation: fadeIn 0.4s ease-out;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    animation-delay: 0.4s;
}


@keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}
.around {
    width: 51px;
    height: 51px;
    border: none;
    color: inherit;
    background: none;
    cursor: pointer;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 300;
    outline: none;
    position: absolute;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.around:after {
    content: '';
    position: absolute;
    z-index: -1;
}
#proname{
  color:#BBBBBB;
  font-size: 30px;

}

.newpost{
  padding-left: 15px;
  padding-right: 15px;
  padding-top: 15px;
  padding-bottom: 15px;
  height: auto;
  width: 500px;
  margin-left: 400px;
  background-color: #aaaaaa;
  word-wrap: break-word;
  margin-top: 20px;
  float: center;
  position:relative;

}
.newpost textarea{
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  font-size: 18px;
  background:#aaaaaa;
  width: 90%;



}


#myInput {
  background-position: 1px 1px;
  background-repeat: no-repeat;
  width: 70%;
  font-size: 16px;
  margin-top: 0px;
  padding: 10px 20px 12px 0px;
  margin-bottom: 0px;
  background: #aaaaaa;
  outline: none;
  border: 0px;
  position:relative;



}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
  background: #aaaaaa;
  position: absolute;
  display: none;
  max-height: 100px;
  overflow: scroll;
  width: 70%;
  outline: none;
  border: 0px;
  margin-left:25px;
}

#myUL li a {
  border: 0px solid #ddd;
  margin-top: -1px;
  background-color: #808080;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  width: 350px;
  float:center;
  z-index: 3;
  margin-right: 100px;

}
.intext
{
  font-family: "Courier New", Courier, monospace;
  font-size: 20px;
  color:#999999;
  margin-left: 10px;

}



#myUL li a:hover:not(.header) {
  background-color: #eee;
}


.heart {
  cursor: pointer;
  height: 70px;
  width: 70px;
  background-image:url( 'images/heart.png');
  background-position: left;
  background-repeat:no-repeat;
  background-size:2900%;
  border-radius: 100%;
}

.heart:hover {
  background-position:right;
}

.is_animating {
  animation: heart-burst 1s steps(28) 1;
}

@keyframes heart-burst {
  from {background-position:left;}
  to { background-position:right;}
}
div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

input.file {
	position: relative;
	text-align: right;
	-moz-opacity:0 ;
	filter:alpha(opacity: 0);
	opacity: 0;
	z-index: 2;
}
.upload-wrap {
    position: relative;
}
.upload-btn {
    position: absolute;
    left: 0;
    opacity: 0;
    margin-left: 0%;
    margin-top: -9%;
    height: 100%;
    width: 33%;
    cursor: pointer;
}
</style>
<title > Results</title>
</head>
<!--------------------------------------------------------------------------------------------------->
<body bgcolor="#555">


<!-------------------------------------------------------------------------------------------->

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <center><img src="<?php echo $dbdp; ?>" alt="pro" height=120 width=120 style="border-radius:100%"></center>
  <br>
  <br>
  <center><span id="proname" ><?php echo $dbfname ?></span></center>

  <a href="profile.php">Profile</a>
  <a href="topics.php">Topics</a>
  <a href="settings.php">Settings</a>
  <a href="contact.php">Contact</a>
  <b><a href="logout.php">Log Out</a></b>
</div>


<div id="main">
  <header  >
  <ul>
    <a href="hgfd"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

    <li class="name">

  <form method="get" action="search.php" id="searchbox5">
      <input id="search5" name="q" type="text" size="50" placeholder="Search..." />

  </form>

    </li>


    <li class="name"  style="float:right;"><a onclick="openNav()" style="cursor:pointer" >&#9776;</a></li>
  </ul>
  </header>
</div>


<div width="900">
<div id='left_div' >
  <center><p style='font-family:"Courier New", Courier, monospace; font-size:30px;'>  - Recent - </p>
    <?php  $sql = "SELECT * FROM post p WHERE Date = (SELECT max(Date) from post where p.TopicId =post.TopicId)  ORDER BY PostId DESC ";
    $result = mysql_query($sql);
    $i=0;
    while (($row = mysql_fetch_assoc($result)) && ($i<10) ){
      $dbtopicnew=$row['TopicId'];


  ?>
      <p class="intext"><?php echo $dbtopicnew ?></p>
<?php
  $i+=1;
    }
?>
  </center>
</div>


<script>
function Refresh()
{
  window.location.reload(true);

}
</script>
<?php
    $find =$_GET['q'];
  
    $sql = "SELECT * from post WHERE Content LIKE '%$find%' or TopicId LIKE '%$find%' ";
    $result = mysql_query($sql);
    while ( $row = mysql_fetch_assoc($result) ){
          $dbtopicnew=$row['TopicId'];
          $dbcontent=$row['Content'];
          $time=$row['Time'];
          $date=$row['Date'];
          $dbdate=date('d-M-Y', strtotime($date));
          $dbtime=date('h:i:ma', strtotime($time));
          $ID=$row['UserId'];
          $dbpostid=$row['PostId'];
          $dbimage=$row['Image'];
          $query=mysql_query("SELECT * FROM signup WHERE UserId=$ID ");
          while($row=mysql_fetch_assoc($query))
          {

          $dbfname=$row['FirstName'];
          $dblname=$row['LastName'];
          }


?>
<div class="post">
  <h3><?php echo $dbtopicnew ?></h3>
  <span style="color:#dcdcdc"><?php echo $dbdate?> <?php echo $dbtime ?></span><span style="margin-left:100px"> By: <?php echo $dbfname.' '.$dblname;?></span><br>
  <p>
    <?php echo $dbcontent ?>
  </p>



  <div id="container" style="width:100%;height:auto;">
  <img id="blah" src="<?php echo $dbimage ?>" alt="" style="opacity:1;width:100%;"/>
  </div>






</div>
<?php
}

 ?>

  <script>
      function ani(){
                  document.getElementById('plane').className ='animation';
              }
              function anitwo(){
                  document.getElementById('bg').className ='animation2';
              }


  </script>

<?php

 ?>




</body>
</html>
<?php
}
?>
