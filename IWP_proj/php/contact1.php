<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="button.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <title>
    Contact Us
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
  margin-bottom: 0px;

}
.intext
{
  font-family: "Courier New", Courier, monospace;
  font-size: 15px;
  color:#999999;
  margin-left: 10px;

}

#googlemaps {
  height: 91%;
  width: 100%;
  position:absolute;
  opacity: 0.4;

  left: 0;
   /* Set z-index to 0 as it will be on a layer below the contact form */
}

#contactform {
  position: relative;
  z-index: 1; /* The z-index should be higher than Google Maps */
  width: 400px;
  margin: 60px auto 0;
  padding: 10px;
  background: black;
  height: auto;
  opacity: .8; /* Set the opacity for a slightly transparent Google Form */
  color: white;
  float: right;

}
#contactform1 {
  position: relative;
  z-index: 1; /* The z-index should be higher than Google Maps */
  width: 400px;
  margin: 60px auto 0;
  padding: 10px;
  background: black;
  height: auto;
  opacity: .8; /* Set the opacity for a slightly transparent Google Form */
  color: white;
  float: left;

}

.TextBox{
 padding: 0;
    height: 40px;
    width: 350px;
	   border-radius: 5px;
    position: relative;

    outline: none;
    border: 1px solid #cdcdcd;
    border-color: rgba(0,0,0,.15);
    background-color: #34495E;
    font-size: 20px;
	color: #cdcdcd;



	}


</style>
<body bgcolor="#555">
  <!--------------------------------------------------------------------------------------------------->
<header>
<ul>
  <a href="hgfd"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

  <li class="name">

<form method="get" action="/search" id="searchbox5">
    <input id="search5" name="q" type="text" size="50" placeholder="Search..." />

</form>

  </li>

  <li class="name" style="float:right;"><a href="signin.php">Sign In</a></li>
  <li class="name" style="float:right;"><a href="signup.php">Sign Up</a></li>
</ul>
</header>

  <!--------------------------------------------------------------------------------------------------->
  <div id="googlemaps"></div>
  <div id="contactform1">
<center>
<p class="head">-Contact Us- </p><br></center>
<p class="intext" style="margin-right:270px"><b>Email Us at-</b></p>

    <p class="intext">shivamgupta.2015@vit.ac.in</p>
    <p class="intext">ayush.kulshrestha2015@vit.ac.in</p>
    <p class="intext">nitin.kathpalia2015@vit.ac.in</p>
<br>
  <p class="intext" style="margin-right:270px"><b>Call Us-</b></p>

    <p class="intext">+91-9585438508</p>
    <p class="intext">+91-9765567767</p>
    <p class="intext">+91-8767768878</p>
<br><br>



  </div>








  <div id="contactform">
<center>
    <p class="head">-Queries- </p><br>

    <input  type="text" class="TextBox "placeholder="Name"  id="name" pattern="[A-Za-z]{1,20}" required="true"><span id="s1" style="color: red;" >  *</span><br><br>
     <input  type="email" class="TextBox" placeholder="E-mail" id="mail" required="true"><span id="s2" style="color: red;padding-right:0px;" >  *</span><br><br>
     <textarea class="TextBox" placeholder="Message" id="msg" style="resize:none; height:100px;margin-right:10px;"></textarea><br><br>
     <button class="button" style="opacity:100;">
      <span class="shift"> Submit ›</span>
       <div class="mask"></div>
     </button><br><br>
</center>
  </div>
  <script>



  }
  </script>

  <!------------------------------------------------------------------------->
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

  <script type="text/javascript">

  // The latitude and longitude of your business / place
  var position = [12.9716, 79.1588];

  function showGoogleMaps() {

      var latLng = new google.maps.LatLng(position[0], position[1]);

      var mapOptions = {
          zoom: 16, // initialize zoom level - the max value is 21
          streetViewControl: false, // hide the yellow Street View pegman
          scaleControl: true, // allow users to zoom the Google Map
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: latLng
      };

      map = new google.maps.Map(document.getElementById('googlemaps'),
          mapOptions);

      // Show the default red marker at the location
      marker = new google.maps.Marker({
          position: latLng,
          map: map,
          draggable: false,
          animation: google.maps.Animation.DROP
      });
  }

  google.maps.event.addDomListener(window, 'load', showGoogleMaps);
  </script>
    <!------------------------------------------------------------------------->
  <!--------------------------------------------------------------------------------------------------->


</body>
