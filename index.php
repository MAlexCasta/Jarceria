<!DOCTYPE html>
<Html>
<head>
    <title>Todo en limpieza</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!--custom stylesheet-->
    <link rel="stylesheet" href="Styles/css/custom.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<nav>
    <div class="nav-wrapper green darken-4">
        <a href="#" class="navbar-brand"><img src="images/logo_SF.png"></a>
        <a href="#" class="sidenav-trigger" data-target="side"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
            
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
                    <form>
                        <div class="input-field" style="height: 70px">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
            </li>
        </ul>
        <ul id="side" class="sidenav">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>

    </div>
</nav>
<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="images/carousel1.png"></a>
    <a class="carousel-item" href="#two!"><img class="carousel-image" src="images/imageC_2.png"></a>
    <a class="carousel-item" href="#three!"><img class="carousel-image" src="images/marcas1.jpg"></a>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="Styles/bootstrap4/popper.js"></script>
<script src="Styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</Html>
