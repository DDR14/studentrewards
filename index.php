<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Rewards-Homepage</title>
</head>
<?php include_once("assets.php"); ?>
<body>
    <?php include_once("header.php"); ?><br>
    <?php include_once("navbar.php"); ?><br>
	<div class="container">
		<center><img src="https://placeholdit.co//i/1090x250?bg=000000" class="img-thumbnail"></center>
	</div>
	<br>

	<div class="container">
		<h1>What is Lorem Ipsum?</h1>
		<h6><p>Lorem Ipsum is a group of text that people commonly use as filler text, or dummy text.  It’s basically a bunch of mumbo-jumbo (at least that’s what it looks like) that people use to show what a design layout will look like when the proper text has been inserted.Lorem Ipsum is a group of text that people commonly use as filler text, or dummy text.  It’s basically a bunch of mumbo-jumbo (at least that’s what it looks like) that people use to show what a design layout will look like when the proper text has been inserted.</p></h6>
	</div>

	<div class="container">
		<h1 align="center">Products</h1><br>
	</div>

	<div id="banner" style="overflow: hidden; display: flex; justify-content:space-around;">
        <div style="max-width: 20%; max-height: 20%;">
            <a href=""><img src ="https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">ATTENDANCE</h6>
            <h6 style="color:red">30 Items</h6>
        </div>

        <div style="max-width: 20%; max-height: 100%;">
            <a href=""><img src =https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">SPORTS</h6>
            <h6 style="color:red">30 Items</h6>
        </div>

        <div style="max-width: 20%; max-height: 20%;">
            <a href=""><img src =https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">AWARDS</h6>
            <h6 style="color:red">30 Items</h6>
        </div>

        <div style="max-width: 20%; max-height: 20%;">
            <a href=""><img src =https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">BEHAVIOR</h6>
            <h6 style="color:red">30 Items</h6>
        </div>

        <div style="max-width: 20%; max-height: 20%;">
            <a href=""><img src =https://placeholdit.co//i/150x225?bg=000000" class="img-thumbnail"></a>
            <h6 class="h6">ACADEMICS</h6>
            <h6 style="color:red">30 Items</h6>
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
}

h1{
	font-family: "Cooper Hewitt Bold";
}
h6{
	font-family: "Cooper Hewitt Light";
}
.h6{
	font-family: "Cooper Hewitt Bold";
}
</style>

