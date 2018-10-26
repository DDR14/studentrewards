<!DOCTYPE html>
<html>
<head>
	<title>Student Rewards-Registration Form</title>
</head>
<?php include_once("assets.php"); ?>
<body>
	<?php include_once("header.php"); ?><br>
	<?php include_once("navbar.php"); ?>
	<br>
	<div class="container">
        <ol class="arrows">
           <li><a class="a" href="index.php">Home</a></li>
           <li><a class="a" href="#">Registration Form</a></li>
        </ol>
    </div>
    <br>
    <div class="container">
    	<h1>ACCOUNT INFORMATION</h1>
    	<h3>NOTE: If you already have an account with us, please login at the <a class="login" href="login.php"><b>login page</b></a>.</h3>
    </div>
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-6">
    			<h2 class="h2">Address Details</h2><br>
    			<div class="inner-addon left-addon">
			      <i class="glyphicon glyphicon-home"></i>      
			      <input type="text" class="form-control" placeholder="Company Name"/>
			    </div>
			    <br>
			      <input id="male" type="radio" name="gender" checked>
			      <label for="male">Male&nbsp;</label>
			      <input id="female" type="radio" name="gender">
			      <label for="female">Female</label>
			    <br><br>
			    <div class="inner-addon left-addon" id="right">
			      <i class="glyphicon glyphicon-user"></i>      
			      <input type="text" class="form-control" placeholder="Last Name"/>
			    </div>
				<div class="inner-addon left-addon" id="top">
			      <i class="glyphicon glyphicon-user"></i>      
			      <input type="text" class="form-control" placeholder="First Name"/>
			    </div><br>
				<div class="inner-addon left-addon">
			      <i class="glyphicon glyphicon-map-marker"></i> 
			      <input type="text" class="form-control" placeholder="Street Address"/>
			    </div><br>
				<div class="inner-addon left-addon">
			      <i class="glyphicon glyphicon-map-marker"></i> 
			      <input type="text" class="form-control" placeholder="Street Address Line 2"/>
			    </div><br>
				<div class="inner-addon left-addon" id="right">
			      <i class="glyphicon glyphicon-map-marker"></i>     
			      <input type="text" class="form-control" placeholder="State"/>
			    </div>
			    <div class="inner-addon left-addon" id="top">
			      <i class="glyphicon glyphicon-globe"></i>     
			      <input type="text" class="form-control" placeholder="Country"/>
			    </div><br>
				<div class="inner-addon left-addon" id="right">
			      <i class="glyphicon glyphicon-barcode"></i>     
			      <input type="text" class="form-control" placeholder="Post/Zipcode"/>
			    </div>
				<div class="inner-addon left-addon" id="top">
			      <i class="glyphicon glyphicon-map-marker"></i>     
			      <input type="text" class="form-control" placeholder="City"/>
			    </div>
				<br>
    		</div>
    		<div class="col-sm-6">
    			<h2 class="h2">How did you hear us?</h2>
				<div>
				    <select>
				      	<option value="0" disabled selected>Please Choose</option>
				      	<option value="1">Search Engine</option>
					    <option value="2">Social Media</option>
					    <option value="3">Tradeshow</option>
					    <option value="4">Samples in Mail</option>
					    <option value="5">Friends</option>
					    <option value="6">PTA</option>
					    <option value="7">Co-worker</option>
					    <option value="8">Blog</option>
					    <option value="9">USBC</option>
				    </select>
				  </div>
				  <br>
				  <h3 class="detail">Additional Contact Details</h3>
				  <br>
				  <div class="inner-addon left-addon">
			      <i class="glyphicon glyphicon-phone-alt"></i>     
			      <input type="text" class="form-control" placeholder="Telephone"/>
			      </div>
				  <h3 class="detail">Login Details</h3>
				  <br>
				  <div class="inner-addon left-addon">
			      <i class="glyphicon glyphicon-envelope"></i>    
			      <input type="text" class="form-control" placeholder="Email Address"/>
			      </div>
				  <br>
				  <div class="inner-addon left-addon" id="right">
			      <i class="glyphicon glyphicon-lock"></i>     
			      <input type="text" class="form-control" placeholder="Confirm Password"/>
			    </div>
				<div class="inner-addon left-addon" id="top">
			      <i class="glyphicon glyphicon-lock"></i>     
			      <input type="text" class="form-control" placeholder="Password"/>
			    </div>
				  <br>
    				<a href="#" class="btn btn-sm animated-button thar-three">SUBMIT</a>
    		</div>
    		
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

h1,h2{
	font-family: "Cooper Hewitt Bold";
}
.h2{
	font-family: "Cooper Hewitt Light";
	border-bottom: 2px solid orange;
}
h3{
	font-family: "Cooper Hewitt Light"
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

.arrows li .a {   
   font-family: "Cooper Hewitt Light";
   letter-spacing: -1px; 
   text-decoration: none;
}

.arrows li:nth-of-type(1) .a { color: hsl(0, 0%, 70%); } 
.arrows li:nth-of-type(2) .a { color: hsl(0, 0%, 65%); } 
.arrows li:nth-of-type(3) .a { color: hsl(0, 0%, 50%); } 
.arrows li:nth-of-type(4) .a { color: hsl(0, 0%, 45%); }

.input-field {
  position: relative;
  width: 250px;
  height: 44px;
  line-height: 44px;
}
.label {
  position: absolute;
  top: 0;
  width: 100%;
  color: black;
  transition: 0.2s all;
  font-family: "Cooper Hewitt Light"
}
a.animated-button.thar-three {
	color: black;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid black;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
	float:right;
	width: 150px;
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
	background: black;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}
/* enable absolute positioning */
.inner-addon {
  position: relative;
}

/* style glyph */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align glyph */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }

.login{
	color: black;
	font-family: 'Cooper Hewitt-Semi Bold';
}

.login:hover{
	text-decoration: none;
	color: gray;
}
.fa-mars-stroke{
	width: 20px;
}
#right{
	width: 48%;
	float: right;
}
#top{
	width: 48%;
	float: top;
}
.detail{
	border-bottom: 1px solid orange;
}
</style>

<script>
$("#country_selector").countrySelect({
	preferredCountries: ['us']
});
</script>
