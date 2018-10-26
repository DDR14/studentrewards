<!DOCTYPE html>
<html>
<head>
	<title>Student Rewards-Login Form</title>
</head>
<?php include_once("assets.php"); ?>

<body>
	<?php include_once("header.php"); ?><br>
	<?php include_once("navbar.php"); ?>
	<br>
	<div class="container-fluids">
        <ol class="arrows">
           <li><a href="index.php">Home</a></li>
           <li><a href="#">Login Form</a></li>
        </ol>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-6" name="column">
    			<img class="user" src="assets/img/user.png">
    		</div>
    		<div class="col-sm-6"><br>
          <h4><u>Sign in here</u></h4><br>
          <div class="signin">
          <label style="font-family: 'Cooper Hewitt Light'">Email Address</label>
              <div class="envelope">
                <span class="fa fa-envelope"></span>
                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
              </div><br>
              <label style="font-family: 'Cooper Hewitt Light'">Password</label>
              <div class="envelope">
                <span class="fa fa-key"></span>
                <input type="email" name="email" style="font-family: 'Cooper Hewitt Light'">
              </div><br>
              <button class="btns">SUBMIT</button><br><br>
              <a href="#" style="font-family: 'Cooper Hewitt Light'">Forgot your password? Get help to sign in.</a><br><br><br><br><br>
              <h6><a href="#" style="font-family: 'Cooper Hewitt Light';padding-left: 75px;">Terms of use | Privacy Policy</a></h6>
      		</div>
        </div>
    	</div>
    	<br>
	    <br>
    </div><br>
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
.h4{
	font-family: "Cooper Hewitt Bold";
}
h3,h4{
	font-family: "Cooper Hewitt Light"
}
div[name=column] { 
  border-right: 1px solid #41e5f4;
}
.user{
  width: 100%
}

.signin{
  padding-left: 150px;
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
  border-bottom: 2px solid black;
  height: 35px;
}
.inputss:focus,
.inputss:valid {
  border-color: black;
}
.inputss:focus~.label,
.inputss:valid~.label {
  top: -24px;
  color: black;
}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 90%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    /*background: dodgerblue;*/
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 90%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

.btns {
    background-color: dodgerblue;
    color: white;
    border: none;
    cursor: pointer;
    width: 70%;
    opacity: 0.9;
    height: 35px;
    font-family: "Cooper Hewitt Light";
}

.btns:hover {
    opacity: 1;
}

.envelope {
  position: relative;
  color: black;
  font-size: 16px;
}

.envelope input {
  width: 70%;
  height: 35px;

  /*background: #fcfcfc;*/
  border: 1px solid #aaa;
  border-radius: 5px;
  /*box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;*/

}

.envelope input { text-indent: 32px;}
.envelope .fa-envelope  { 
  position: absolute;
  top: 10px;
  left: 10px;
  box-sizing: border-box;

}
.envelope .fa-key  { 
  position: absolute;
  top: 10px;
  left: 10px;
}
</style>