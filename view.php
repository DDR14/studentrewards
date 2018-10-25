<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Rewards-Design Library</title>
</head>
<?php include_once("assets.php"); ?>
<body>

	<?php include_once("header.php"); ?><br>
	
	<?php include_once("navbar.php"); ?>
	<br>
	<div class="container">
		<ol class="arrows">
		   <li><a href="index.php">Home</a></li>
		   <li><a href="design_library.php">Design Library</a></li>
		   <li><a href="#">View Design</a></li>
		</ol>
	</div>
	<div class="container">
		<div class="row">
		  <div class="col-sm-7" style="background-color: #b0f4ef;">
		  	<br><center><img src="https://placeholdit.co//i/272x300?bg=111111"></center>
			<br>
			<div id="banner" style="overflow: hidden; display: flex; justify-content:space-around;">
			  	<a target="_blank" href="https://placeholdit.co//i/250?bg=111111">
				  <img src="https://placeholdit.co//i/250x250?bg=111111" alt="Image" style="width:150px" class="img">
				</a>
				<a target="_blank" href="https://placeholdit.co//i/250x300?bg=111111">
				  <img src="https://placeholdit.co//i/250x250?bg=111111" alt="Image" style="width:150px" class="img">
				</a>
				<a target="_blank" href="https://placeholdit.co//i/250x300?bg=111111">
				  <img src="https://placeholdit.co//i/250x250?bg=111111" alt="Image" style="width:150px" class="img">
				</a>
			</div><br>
		  </div>
		  <div class="col-sm-5">
		  	<div class="container">
		  		<h2>PERFECT ATTENDANCE JANUARY</h2>
		  		<h6>AT-119-01</h6><br>
		  		<table border="1px" style="width: 450px">
		  			<tr>
				    <th scope="row" style="border-top: 1px solid white;border-bottom: 1px solid gray;">Quality : &nbsp;&nbsp;</th>
				    <td>25+</td>
				    <td>100+</td>
				    <td>250+</td>
				    <td>500+</td>
				    <td>750+</td>
				    <td>1000+</td>
				  </tr>
				  <tr>
				    <th scope="row" style="border-bottom: 1px solid white">Price : &nbsp;&nbsp;</th>
				    <td>$ 0.28</td>
				    <td>$ 0.21</td>
				    <td>$ 0.18</td>
				    <td>$ 0.15</td>
				    <td>$ 0.13</td>
				    <td>$ 0.12</td>
				  </tr>
		  		</table>
		  		<br><br>
		  		<a href="#" class="btn btn-sm animated-button thar-three">ADD TO CART</a>
		  	</div>
		  </div>
		</div>
	</div>
    <br>
	<?php include_once("footer.php"); ?>
</body>
</html>

<style>
@font-face {
  font-family: "Cooper Hewitt Bold";
  src: url("fonts/CooperHewitt-Bold.otf");
  font-family: "Cooper Hewitt Light";
  src: url("fonts/CooperHewitt-Light.otf");
  font-family: "Cooper Hewitt Semi Bold";
  src: url("fonts/CooperHewitt-Semibold.otf");
}

h1{
	font-family: "Cooper Hewitt Bold";
}
h2{
	font-family: "Cooper Hewitt Bold";
	color: #fc0c64;
}
.h6{
	font-family: "Cooper Hewitt Semi Bold";
}
h6{
	font-family: "Cooper Hewitt Light";
}

.img {
    border: 1px solid #ddd; /* Gray border */
    border-radius: 4px;  /* Rounded border */
    padding: 5px; /* Some padding */
    width: 150px; /* Set a small width */
}

/* Add a hover effect (blue shadow) */
.img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
td{
	text-align: center;
	width: 110px;
	font-family: "Cooper Hewitt Bold";
	font-size: 12px;
}
th{
	width: 200px;
	text-align: right;
	border-left: 1px solid white;
	border-right: 1px solid black;
	font-family: "Cooper Hewitt Light";
}
	

a.animated-button.thar-three {
	color: black;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #fc0c64;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
	width: 150px;
0s;
}
a.animated-button.thar-three:hover {
	color: white !important;
	background-color: transparent;
	text-shadow: nthree;
}
a.animated-button.thar-three:hover:before {
	left: 0%;
	right: auto;
	width: 100%;
}
a.animated-button.thar-three:before {
	display: block;
	position: absolute;
	top: 0px;
	right: 0px;
	height: 100%;
	width: 0px;
	z-index: -1;
	content: '';
	color: #000 !important;
	background: #fc0c64;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}

.arrows { white-space: nowrap; }
.arrows li {
    display: inline-block;
    line-height: 15px;
    margin: 0 9px 0 -10px;
    padding: 0 10px;
    position: relative;
}
.arrows li::before,
.arrows li::after {
    border-right: 1px solid #666666;
    content: '';
    display: block;
    height: 50%;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    z-index: -1;
    transform: skewX(45deg);   
}
.arrows li::after {
    bottom: 0;
    top: auto;
    transform: skewX(-45deg);
}

.arrows li:last-of-type::before, 
.arrows li:last-of-type::after { 
    display: none; 
}

.arrows li a {   
   font-family: "Cooper Hewitt Light";
   letter-spacing: -1px; 
   text-decoration: none;
}

.arrows li:nth-of-type(1) a { color: hsl(0, 0%, 70%); } 
.arrows li:nth-of-type(2) a { color: hsl(0, 0%, 65%); } 
.arrows li:nth-of-type(3) a { color: hsl(0, 0%, 50%); } 
.arrows li:nth-of-type(4) a { color: hsl(0, 0%, 45%); } 
</style>