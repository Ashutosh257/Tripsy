<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
	background-color:powder blue;
	}
.mySlides {display:none;}
.text{
background-color:black
	padding:30px;
	color:#333;
	font-size:100px;
	font-style:Italic;
	font-weight:Bold;
	font-family:Brush Script MT;
	text-align: center;
	font-family:Gotham, "Helvetica Neue,Helvetica,Arial,sans-serif";	
}

.text1{
	color: black;
	text-align:center;
	font-size:50px;

}
.text2{
	color:black;
	text-align:center;
	font-size:50px;
}

</style>
<body>


<div class="text">Welcome!</div>
<body style="background-color:powder blue;">


<br><br>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="21.jpg" style="width:100%">
  <img class="mySlides" src="22.jpg" style="width:100%">
  <img class="mySlides" src="23.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<br><br>
<hr>

<div class="text1">Place Details</div>
<center><table border = 5 width = 800></center>
<tr>
	<th>Name: Goa</th>
</tr>
<tr>
	<th>Description: Goa with many beaches</th>
</tr>
<tr>
	<th>2 Days 1 Night</th>
</tr>
<tr>
	<th>Stay Rs: 2500</th>
</tr>
<tr>
	<th>Food:-
		<input type="radio" name="food" value="Yes">yes
		<input type="radio" name="food" value="No">No<br></th>
</tr>

<tr>
	<th>Travelling:-
	<input type="radio" name="food" value="Yes">Bus
	<input type="radio" name="food" value="Yes">Train
	<input type="radio" name="food" value="Yes">Flight</th>
</tr>
<tr>
	<th>Date:-</th>
</tr>
<tr>
	<th>Total:-6000</th>
</tr>
</table>
<br><br><br>


<div class="text2">Time Table</div>
<center><table border = 5 width = 800></center>
<tr>
	<th>Days</th>
	<th>9:30 to 12:30</th>
	<th>1:30 to 4</th>
	<th>5 to 9</th>
	<th>9 to 12</th>
</tr>
<tr>
	<th>Day 1</th>
	<th>abc</th>
	<th>tytp</th>
	<th>hvj</th>
	<th>cvgbhcgbv</th>
</tr>
<tr>
	<th>Day 2</th>
	<th>NASIK</th>
	<th>M.J </th>
	<th>February </th>
	<th>80%</th>

<tr>
	<th>Day 3</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 4</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 5</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 6</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 7</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 8</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 9</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
<tr>
	<th>Day 10</th>
	<th>Mumbai </th>
	<th>RAIT</th>
	<th>may 2018</th>
	<th>6.9 CGPA</th>
</tr>
</table>
<br><br><br>

<form>
<input type="button" value="Book Now" onclick="openWin()">
</form>
<script>
function openWin() {
    window.open("payment.php");
}
</script>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block"; 
}
</script>

</body>
</html>
