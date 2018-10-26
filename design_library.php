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
           <li><a href="#">Design Library</a></li>
        </ol>
    </div>
	<div class="container">
		<h1>DESIGN LIBRARY</h1>
	</div><br>

	<div class="container">
		<h2 align="center">ATTENDANCE</h2>
	</div>

	<div id="banner">
        <div class="img">
            <a href="view.php"><img src = "https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">Perfect Attendance</h6>
            <h6>January</h6>
        </div>

        <div class="img">
            <a href="view.php"><img src = "https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">Perfect Attendance</h6>
            <h6>January</h6>
        </div>

        <div class="img">
            <a href="view.php"><img src = "https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">Perfect Attendance</h6>
            <h6>January</h6>
        </div>

        <div class="img">
            <a href="view.php"><img src = "https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">Perfect Attendance</h6>
            <h6>January</h6>
        </div>

        <div class="img">
            <a href="view.php"><img src = "https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">Perfect Attendance</h6>
            <h6>January</h6>
        </div>

        <div class="img">
            <a href="view.php"><img src = "https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">Perfect Attendance</h6>
            <h6>January</h6>
        </div>

    </div>
    <br><br>
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
	border-bottom: 2px solid #f28f04;
}
.h6{
	font-family: "Cooper Hewitt Semi Bold";
}
h6{
	font-family: "Cooper Hewitt Light";
	text-align: center;
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

.img{
    max-width: 20%; 
    max-height: 20%;
}

#banner{
    overflow: hidden; 
    display: flex; 
    justify-content:space-around;
}
</style>