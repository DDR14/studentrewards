<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation" style="background: #fc0c64;border:none;font-family: 'Cooper Hewitt Bold';">

    <div class="container-fluid" style="background: #fc0c64;">
        <!-- add header -->
        <div class="navbar-header" style="background: #fc0c64">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- add search form -->
            <form class="navbar-form navbar-right" role="search" style="height: 40px">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search . . .">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>

        <!-- add menu -->
        <div class="collapse navbar-collapse" id="navbar1" style="background: #fc0c64;">
            <ul class="nav navbar-nav" style="width:100%" style="background: #fc0c64;">
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">DESIGN LIBRARY</a></li>
                <li><a href="#">HOW TO ORDER</a></li>  
                <li><a href="#">PROMO</a></li>    
            </ul>    
        </div>
    </div>
</nav>
</body>
</html>

<style>
@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

/* CSS used here will be applied after bootstrap.css */

@font-face {
  font-family: "Cooper Hewitt Bold";
  src: url("fonts/CooperHewitt-Bold.otf");
  font-family: "Cooper Hewitt Light";
  src: url("fonts/Cooper Hewitt Light.otf");
}

.navbar-header .navbar-form {
    position: absolute;
    right: 20px;
    max-width: 250px;
    background: #fc0c64;
}
.btn.navbar-toggle.pull-left {
    margin-left: 15px;
    background: #fc0c64;
}
.navbar-inverse .navbar-toggle {
    border-color: #fc0c64;
}

.navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
     background-color: #fc0c64; 
}
@media only screen and (max-width:768px){
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #fc0c64;
        margin-top: 0;
        padding-top: 8px;
        background: #fc0c64;

    }
    .navbar-form {
        padding: 10px 15px;
        margin-top: 8px;
        margin-right: -15px;
        margin-bottom: 8px;
        margin-left: -15px;
        border-top: 0px solid transparent;
        border-bottom: 0px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 0px 0 rgba(255,255,255,.1);
        background: #fc0c64;
    }
}

.navbar-inverse .navbar-nav>li>a {
    color: white;
}

.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
    color: black;
    background-color: transparent;
}

.input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group {
    z-index: 2;
    margin-left: -1px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    background-color: #f28f04;
    border-color: #f28f04;
}

.input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child>.btn, .input-group-btn:first-child>.btn-group>.btn, .input-group-btn:first-child>.dropdown-toggle, .input-group-btn:last-child>.btn-group:not(:last-child)>.btn, .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.input-group-btn:last-child>.btn:hover, .input-group-btn:last-child>.btn-group {
    z-index: 2;
    margin-left: -1px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    background-color: #f27135;
    border-color: #f27135;
}
</style>
