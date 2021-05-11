<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Covid19 Report</title>
	<style type="text/css">

.state {
  background-image: url('cool-background3.png');
  width: 70%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
 border-radius: 20px;
 background-size: auto;
}
.name {
  background-image: url('cool2.png');
  width: 60%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
 border-radius: 20px;
 background-size: auto;
}
.name2 {
  background-color: #ffff00;
  width: 100%;
  text-align: center;
 border-top-left-radius: 20px;
 border-top-right-radius: 20px;
 background-size: auto;
}
.name3 {
 background-color: #0066ff;
  width: 100%;
  text-align: center;
 border-top-left-radius: 20px;
 border-top-right-radius: 20px;
 background-size: auto;
}
.name5 {
  background-image: url('cool-background.png');
  width: 100%;
  text-align: center;
   border-top-left-radius: 20px;
 border-top-right-radius: 20px;
 background-size: auto;
}
.name1 {
  background-color: #2eb8b8;
  width: 100%;
  text-align: center;
 border-top-left-radius: 20px;
 border-top-right-radius: 20px;
 background-size: auto;
}
.name4 {
  background-color:#ff9900 ;
  width: 100%;
  text-align: center;
 border-top-left-radius: 20px;
 border-top-right-radius: 20px;
 background-size: auto;
}
.button {
  background-color: #33cc33;
  border: none;
  border-radius :40%;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
body {
  background-image: url('cool.png');
  background-size: auto;
}
@media (max-width: 480px) {
    body {
        background-image: url('cool.png');
    }
}

@media (min-width: 481px) and (max-width: 1024px) {
    body {
        background-image: url('cool.png');
    }
}

	</style>
</head>
<body>
<center>
<?php

$place = $_POST['place'];
$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive =json_decode($data,true);
//echo $coronalive['statewise'][1]['state'];

$satecount = count($coronalive['statewise']);
if ($place=='Maharashtra')
$i=1;
elseif ($place=='Kerala') {
	$i=2;
}
elseif ($place=='Karnataka') {
	$i=3;
}
elseif ($place=='Andhra Pradesh') {
	$i=4;
}
elseif ($place=='Tamil Nadu') {
	$i=5;
}
elseif ($place=='Delhi') {
	$i=6;
}
elseif ($place=='Uttar Pradesh') {
	$i=7;
}
elseif ($place=='West Bengal') {
	$i=8;
}
elseif ($place=='Odisha') {
	$i=9;
}
elseif ($place=='Rajasthan') {
	$i=10;
}
elseif ($place=='Chhattisgarh') {
	$i=11;
}
elseif ($place=='Telangana') {
	$i=12;
}
elseif ($place=='Haryana') {
	$i=13;
}
elseif ($place=='Gujarat') {
	$i=14;
}
elseif ($place=='Bihar') {
	$i=15;
}
elseif ($place=='Madhya Pradesh') {
	$i=16;
}
elseif ($place=='Assam') {
	$i=17;
}
elseif ($place=='Punjab') {
	$i=18;
}
elseif ($place=='Jammu and Kashmir') {
	$i=19;
}
elseif ($place=='Jharkhand') {
	$i=20;
}
elseif ($place=='Uttarakhand') {
	$i=21;
}
elseif ($place=='Himachal Pradesh') {
	$i=22;
}
elseif ($place=='Goa') {
	$i=23;
}
elseif ($place=='Puducherry') {
	$i=24;
}
elseif ($place=='Tripura') {
	$i=25;
}
elseif ($place=='Manipur') {
	$i=26;
}
elseif ($place=='Chandigarh') {
	$i=27;
}
elseif ($place=='Arunachal Pradesh') {
	$i=28;
}
elseif ($place=='Meghalaya') {
	$i=29;
}
elseif ($place=='Nagaland') {
	$i=30;
}
elseif ($place=='Ladakh') {
	$i=31;
}
elseif ($place=='Sikkim') {
	$i=32;
}
elseif ($place=='Andaman and Nicobar Islands') {
	$i=33;
}
elseif ($place=='Mizoram') {
	$i=34;
}
elseif ($place=='Dadra and Nagar Haveli and Daman and Diu') {
	$i=35;
}
elseif ($place=='Lakshadweep') {
	$i=36;
}
	
	 echo "<div class='state' >"."<br>"."<h1>".$coronalive['statewise'][$i]['state']."</h1>"."<br>"."</div>";
	
	echo "<br>"."<div class='name' >"."<center>"."<div class='name3' >"."<br>"."<h3>"."Last Updated "."</h3>"."<br>"."</div>"."</center>";
	echo "<h3>"."Date Time "."</h3>"."<br>";
	echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>"."<br>"."</div>";
	
	
	echo "<br>"."<div class='name' >"."<center>"."<div class='name1' >"."<br>"."<h3>"."Confirmed Cases"."<br>"."</h3>"."<br>"."</div>"."</center>";
	echo $coronalive['statewise'][$i]['confirmed']."<br>"."<br>"."</div>";
	
	echo "<br>"."<div class='name' >"."<center>"."<div class='name2' >"."<br>"."<h3>"."Active Cases"."<br>"."</h3>"."<br>"."</div>"."</center>";
	
	echo $coronalive['statewise'][$i]['active']."<br>"."<br>"."</div>";
	echo "<br>"."<div class='name' >"."<center>"."<div class='name4' >"."<br>"."<h3>"."Recoverd Cases"."<br>"."</h3>"."<br>"."</div>"."</center>";
	
	echo $coronalive['statewise'][$i]['recovered']."<br>"."<br>"."</div>";

	echo "<br>"."<div class='name' >"."<center>"."<div class='name5' >"."<br>"."<h3>"."Deaths"."<br>"."</h3>"."<br>"."</div>"."</center>";
	
	echo $coronalive['statewise'][$i]['deaths']."<br>"."<br>"."</div>";
	

?>
<br>
<a href="Covid Page.php" class="button">Back to Home</a>
</center>
</body>
</html>
