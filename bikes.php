<!DOCTYPE html>

<head>
	<title>Bikes you can rent</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:bold,regular,extra-bold" rel="stylesheet">

<style>
.navbar{
	box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
  background-color: #363636;
   overflow: hidden;
}

a{
  font-family: "Montserrat";
  color:white;
  font-size: 12px;
}

.nav-item{
  margin:20px;
}

.logo{
 position: relative;
  bottom: 10px;
    margin-left: 20px;
}

#logo_text{
  color:white;
  font-family: 'Montserrat', sans-serif;
  font-size: 22px;
  display: inline-block;
  font-weight:normal;
  line-height: 20px;
  margin:5px;
  position: relative;
  top:5px;
}

.navbar-nav{
 position: absolute;
    right: 0px;
}

.choose-city{
  color:white;
  font-size:12px;
  margin: 20px;
}

/*------Sign Up|Login------*/
span.nav-item{
  display:inline;
  color:white;
  margin:0px;
  font-size:12px;
  font-family:"Montserrat";
  text-align: center;
}

.member{
  border: 1px solid white;
  color: white;
  padding-top: 2px;
  padding-right: 10px;
  padding-left: 10px;
  padding-bottom: 3px;
  margin: 20px;
}
/*-----------------------------*/

/*-------------------- Vehicle Card deck style starts here ----------------*/

.card-text{
  font-family: "Montserrat";
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin:20px;
}

.card-title{
	text-align: center;
	padding-top: 14px;
}

h6{
	font-size:14px;
	font-weight: bolder;
}

.card-deck{
   margin-bottom: 50px;
}

.card-body{
	border-top:5px solid #f6f6f6;
	text-align: center;
  font-family:"Montserrat";

}

.card-footer{
	background-color:#f9d757;
	border-top:5px solid #f6f6f6;
  max-height: 60px;
}

#card-body-2{
	border-left: 3px solid #fbe281;
  max-height: 90px;
}

#card-body-1{
	border-left: 3px solid #fdefb5;
  max-height: 70px;
  color:#377d22;
}

.card-img{
	border-left: 3px solid #fef7da;	
	text-align:center;	
}

.button {
   background-color: white;
   height:30px;
   width:160px;
   cursor:pointer;
   text-align: center;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.button:hover {
   background-color: grey;
   color:white;
}

.circle {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  font-size: 14px;
  color: #fff;
  text-align: center;
  background: #212121;
  float:center;
  position: absolute;
    left: 45%;
    top: 75%;
 
}

#fromTime{
  float:left;
  font-size: 14px;
  font-weight: bolder;

}
#toTime{
  float:right;
  font-size:14px;
  font-weight: :bolder;
}

#fromDate{
  font-size:14px;
  float:left;
}
#toDate{
  float:right;
  font-size:14px;
}

/*-------------------- Vehicle Card deck style ends here ----------------*/

#reference{
	background-color: #4a4a4a;
}


strong{
  font-size: 14px;
  padding-left:70px;
}
footer {
  margin-top:30px;
   bottom:0;
   width:100%;
/* Height of the footer */
   background:#363636;
   clear:both;
   padding-top: 20px;
   padding-left: 50px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   padding-bottom: 30px;
}

h5{
  color:white;
  padding-left:40px;
}

ul{
  list-style-type:none;
}

li a{
  font-size:12px;
   margin: 0;
   line-height: 1px;
  font-family: "Montserrat";
}

.padding_top_bottom{
  padding: 0;
}


.fa .fa-phone{
color: white;
font-size: 12px;
}

.fa .fa-inr{
font-size:14px;
}

.fa-chevron-down{
  color:white;
  font-size:12px;
}
</style>

<body>

		<div style="font-family:'Montserrat';background-color:#4a4a4a;color:white;width:100%;float:left;margin:0;font-size:14px;text-align:right;padding:5px;">Refer friends &nbsp;<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;9678546710/8976543212
		</div>
	

<nav class="navbar navbar-expand-lg">
 <div class="row">

  <div class="navbar-brand">
    <img class="logo" src="https://d36g7qg6pk2cm7.cloudfront.net/royalbrothers_logo.png" height="50px" width="50px"/>
    <span id="logo_text">
        Royal<br>Brothers
      </span>
    </div>

  <p class="choose-city">Bikes in Bangalore&nbsp;<i class="fa fa-chevron-down"></i></p>
   </div>
 
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Tariff</a>
      <a class="nav-item nav-link" href="#">Package</a>
      <a class="nav-item nav-link" href="http://localhost/~prakruthishetty/RoyalBrothersTask/AddOrEdit.php">Bikes</a>
      <a class="nav-item nav-link" href="#">Menu&nbsp;<i class="fa fa-chevron-down"></i></a>
      <div class="member">
        <span class="nav-item nav-link" href="#">Sign Up</span>|<span class="nav-item nav-link" href="#">Log in</span>
      </div>
    </div>
</nav>


<?php

// Establish Database Connection

$dbc=mysqli_connect("127.0.0.1","root","praks","RoyalBrothers")
or die('Error connecting to MySQL server.');

$sql = "select * from bikes";
$result = mysqli_query($dbc,$sql);
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0) {
  
  // output data of each row

for($i=$num_rows;$i>0;$i=$i-3){

   echo "<div class='container-fluid'>
  <div class='card-deck' style='margin-left:20px;float:left;'>";

  //Display cards based on number of vehicles in the database

for( $j=3; $j>0; $j=$j-1)
{
  if($num_rows > 0){
  $row = mysqli_fetch_assoc($result);
    $id = $row['bike_id'];

    echo "<div class='card' style='width:350px;'>

      <div class='card-img'>
      <h6 class='card-title'>".$row['bike_name']."</h6>
        <img class='card-img-top' src='bikePic.png' alt='Bike image'>
      </div>

      <div class='card-body' id='card-body-1'>";

      if($row['is_available'] == 1){echo "
        <p>Available</p>";}

      else{ echo "<p class='text-muted'>Not Available</p>";}
        
echo "</div>

      <div class='card-body' id='card-body-2'>
          <h6 class='card-text' id='fromTime'>".date("h:i a",strtotime($row['from_time']))."</h6>
          <h6 class='card-text' id='toTime'>".date("h:i a",strtotime($row['to_time']))."</h6><br>
         <div class='circle'><p style='padding-top:4px;'>to</div>
          <p class='card-text' id='fromDate'>".date("d M Y",strtotime($row['from_date']))."</p>
          <p class='card-text' id='toDate'>".date("d M Y",strtotime($row['to_date']))."</p>
           
      </div>".

    "<div class='card-footer'>
      <div style='float:left'>
      <strong><i class='fa fa-inr' aria-hidden='true'></i>&nbsp;".$row['price']."</strong><br><p style='font-size:10px;padding-left:50px;'>(".$row['km_limit']." km limit)</p>
    </div>
      <div class='button' style='float:right;'><p style='padding-top:6px;font-family:Montserrat;font-weight:80px;font-size:13px;'>BOOK</p></div>
    </div>

  </div>";
$num_rows = $num_rows - 1;
}
}
 echo "</div></div>";
}
}
  mysqli_close($dbc);

?>

<!-- End of vehicle card display -->

<br />
<br />


<!-- Footer Section starts here -->

  <footer class="page-footer">

  <div class="row footer_content">
        <a itemprop="url" title="Royal Brothers" href=" https://www.royalbrothers.com">
          <img src="RBLogo2.png" alt="Royal Brothers" class="responsive-img" width="282" height="100" title="Royal Brothers">
        </a>

    <div class="col m2 l2 s12 links1">
      <h5>COMPANY</h5>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="col m2 l2 s12 links2 hide-on-small-only">
      <ul>
        <li class="padding_top_bottom">
            <a href="https://www.royalbrothers.com/bangalore/bike-rentals/tariff">Tariff</a>
        </li>
        <li class="padding_top_bottom"><a href="#">Partner with us</a></li>
        <li class="padding_top_bottom"><a href="#">Reach Us</a></li>
        <li class="padding_top_bottom"><a href="#">About Us</a></li>
        <li class="padding_top_bottom"><a href="#">Sitemap</a></li>
      </ul>
    </div>

    <div class="col m2 l2 s12 links1">
      <h5>FOLLOW</h5>
      <ul>
        <li><a href="#" target="_blank">Facebook</a></li>
        <li><a href="#" target="_blank">Twitter</a></li>
        <li><a href="#" target="_blank">Instagram</a></li>
        <li><a href="#" target="_blank">Linkedin</a></li>
      </ul>
    </div>
  </div>
  <div class="row marbtm0">
    <div>
      <div class="col l10 s12 m10 offset-l1 offset-m1">
        <div class="footer_content">
            
        </div>
      </div>
    </div>
  </div>

  <div class="footer-copyright">
    <div class="col-lg-6 offset-lg-3" style="color:#bdb9b8;font-size:14px;font-family:Montserrat;">
      © Copyright 2017 Royalbison AutoRentals India Private Ltd. All rights reserved.
    </div>
  </div>

</footer>

<!-- Footer Section ends here -->


</body>

</html>
