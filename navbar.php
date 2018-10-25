<br>
<div class="container-fluids">
  <div class="topnav" id="myTopnav">
      <a href="#products">PRODUCTS</a>
      <a href="design_library.php">DESIGN LIBRARY</a>
      <a href="#how_to_order">HOW TO ORDER</a>
      <a href="#promo">PROMO</a>
        <div class="search-container">
          <form>
            <input class="input" type="text" placeholder="Search.." name="search">
            <button class="buttons" type="submit"><i class="fa fa-search"></i></.buttons>
          </form>
        </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<style>
@font-face {
  font-family: "Cooper Hewitt Bold";
  src: url("fonts/CooperHewitt-Bold.otf");
}
.topnav {
  overflow: hidden;
  background-color: #fc0c64;
  font-family: "Cooper Hewitt Bold";
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #fc0c64;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
.search-container {
  float: right;
}

.input {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  border-top-left-radius: 25px;
  border-bottom-left-radius: 25px;
}
.buttons{
  border-top-right-radius: 25px;
  border-bottom-right-radius: 25px;
}
.search-container .buttons:hover {
  background: #f28f04;
}

.search-container .buttons {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background: #f28f04;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: left;
    display: block;
    position: fixed;
    right: 1;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 1;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
