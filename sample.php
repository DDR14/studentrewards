<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">

    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- add search form -->
            <form class="navbar-form navbar-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search this site">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>

        <!-- add menu -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav" style="width:100%">
                <li class="active"><a href="#products">PRODUCTS</a></li>
                <li><a href="design_library.php">DESIGN LIBRARY</a></li>
                <li><a href="#how_to_order">HOW TO ORDER</a></li>  
                <li><a href="#promo">PROMO</a></li>    
            </ul>    
        </div>
    </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<style>
@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

/* CSS used here will be applied after bootstrap.css */
.navbar-header {
    position: absolute;
    right: 20px;
    max-width: 250px;
}
button.navbar-toggle.pull-left {
    margin-left: 15px;
}
@media only screen and (max-width:768px){
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        /*border-color: rgba(0,0,0,0);*/
        margin-top: 0;
        padding-top: 8px;
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
    }
}
</style>
