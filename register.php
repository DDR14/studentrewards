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
    	<h3>NOTE: If you already have an account with us, please login at the <a href="login.php"><b>login page</b></a>.</h3>
    </div>
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-1">
    			
    		</div>
    		<div class="col-sm-5">
    			<h2 class="h2" style="border-bottom: 2px solid orange">Address Details</h2><br>
	    		  <label style="font-family: 'Cooper Hewitt Light'">Company Name</label>
	              <div class="envelope">
	                <span class="fa fa-building"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div>
			    <br>
			      <input id="male" type="radio" name="gender" checked>
			      <label for="male">Male&nbsp;</label>
			      <input id="female" type="radio" name="gender">
			      <label for="female">Female</label>
			    <br><br>
			    <label style="font-family: 'Cooper Hewitt Light'">First Name</label>
	              <div class="envelope">
	                <span class="fa fa-user-circle"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light';">
	              </div><br>
				<label style="font-family: 'Cooper Hewitt Light'">Last Name</label>
	              <div class="envelope">
	                <span class="fa fa-user-circle"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light';">
	              </div><br>
				<label style="font-family: 'Cooper Hewitt Light'">Street Address</label>
	              <div class="envelope">
	                <span class="fas fa-map-marked-alt"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br>
				<label style="font-family: 'Cooper Hewitt Light'">Address Line</label>
	              <div class="envelope">
	                <span class="fas fa-map-marked-alt"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br>
				<label style="font-family: 'Cooper Hewitt Light'">City</label>
	              <div class="envelope">
	                <span class="fas fa-city"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br>
				<label style="font-family: 'Cooper Hewitt Light'">States</label>
	              <div class="envelope">
	                <span class="fas fa-city"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br>
				<div class="input-field" style="float: left;">
					<input class="inputed" id="country_selector" type="text" style="width: 250px;height: 35px">
					<label for="country_selector" style="display:none;">Select a country here...</label>
				</div><br><br><br>
				<label style="font-family: 'Cooper Hewitt Light'">Post/Zipcode</label>
	              <div class="envelope">
	                <span class="fas fa-city"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br>
    		</div>
    		<div class="col-sm-5">
    			<h2 class="h2">How did you hear us?</h2><br>
				<div>
				    <select class="selects">
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
				  <br><br>
				  <h3 style="border-bottom: 1px solid orange">Additional Contact Details</h3>
				  <br>
				  <label style="font-family: 'Cooper Hewitt Light'">Telephone</label>
	              <div class="envelope">
	                <span class="fa fa-phone-square"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br><br>
				  <h3 style="border-bottom: 1px solid orange">Login Details</h3>
				  <br>
				  <label style="font-family: 'Cooper Hewitt Light'">Email Address</label>
	              <div class="envelope">
	                <span class="fa fa-envelope"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div>
				  <br>
				  <label style="font-family: 'Cooper Hewitt Light'">Password</label>
	              <div class="envelope">
	                <span class="fa fa-key"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div><br>
				  <label style="font-family: 'Cooper Hewitt Light'">Confirm Password</label>
	              <div class="envelope">
	                <span class="fa fa-key"></span>
	                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
	              </div>
				  <br><br>
    				<a href="#" class="btn btn-sm animated-button thar-three" style="float:right;width: 150px">SUBMIT</a>
    		</div>
    		<div class="col-sm-1"></div>
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
	font-family: "Cooper Hewitt Light"
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
.inputss {
  width: 100%;
  border: 1;
  outline: 0;
  padding: 0;
  /*border-bottom: 2px solid black;*/
  height: 35px;
}
.inputss:focus,
.inputss:valid {
  border-color: gray;
}
.inputss:focus~.label,
.inputss:valid~.label {
  top: -24px;
  color: gray;
}
a{
	font-family: "Cooper Hewitt Bold";
}

a.animated-button.thar-three {
	color: black;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #fc0c64;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
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
.envelope {
  position: inherit;
  color: skyblue;
  font-size: 16px;
}

.envelope input {
  width: 90%;
  height: 35px;
  color: black;
  border: 1px solid #aaa;
  border-radius: 5px;
  font-family: 'Cooper Hewitt Light';

}

.envelope input { text-indent: 32px;}
.envelope .fa-building, .fa-user-circle, .fa-key, .fa-map-marked-alt, .fa-city, .fa-phone-square, .fa-envelope, .fa-key{ 
  position: absolute;
  top: 10px;
  left: 10px;
  box-sizing: border-box;
}

.selects{
	width: 200px;
	height: 30px;
	border-radius: 5px;
}
</style>

<script>
$("#country_selector").countrySelect({
	preferredCountries: ['us']
});
</script>
