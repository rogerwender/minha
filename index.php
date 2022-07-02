<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu Dropdown Horizontal - Linha de Código</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <!--[if lte IE 8]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body>
	<?php echo "<p>Olá Mundo, Código PHP</p>"; ?>
<nav>
  <ul class="container">
    <li><a href='#'>Home</a></li>
    <li class='dropdown'>
      <a href='#'>Pages <i class="fa fa-angle-down"></i></a>
      <div class='mega-menu'>
        <div class="container">
          <div class="item">
              <h3>Home Page</h3>
              <ul>
                <li><a href='#'>Home Page No #1</a></li>
                <li><a href='#'>Home Page No #2</a></li>
                <li><a href='#'>Home Page No #3</a></li>
                <li><a href='#'>Home Page No #4</a></li>

              </ul>
          </div> <!-- /.item -->
          <div class="item">
              <h3>Contact</h3>
              <ul>
                <li><a href='#'>Contact Page No #1</a></li>
                <li><a href='#'>Contact Page No #2</a></li>
                <li><a href='#'>Contact Page No #3</a></li>
                <li><a href='#'>Contact Page No #4</a></li>
                <li><a href='#'>Contact Page No #5</a></li>
              </ul>
          </div> <!-- /.item -->
          <div class="item">
              <h3>Portfolio</h3>
              <ul>
                <li><a href='#'>Portfolio Page No #1</a></li>
                <li><a href='#'>Portfolio Page No #2</a></li>
                <li><a href='#'>Portfolio Page No #3</a></li>
              </ul>
          </div> <!-- /.item --> 
          <div class="item">
             <h3>Custom</h3>
             <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
        </div><!-- /.container -->
      </div><!-- /.mega-menu -->
    </li><!-- /.dropdown -->
    <li class='dropdown'>
      <a href='#'>Images <i class="fa fa-angle-down"></i> </a>
      <div class='mega-menu'>
        <div class="container">
          <div class="item">
              <h3>Image One</h3>
              <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
          
          <div class="item">
              <h3>Image One</h3>
              <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
          
          <div class="item">
              <h3>Image One</h3>
              <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
          
          <div class="item">
              <h3>Image One</h3>
              <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
          
          <div class="item">
              <h3>Image One</h3>
              <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
          
          <div class="item">
              <h3>Image One</h3>
              <img src="http://placehold.it/250x200">
          </div> <!-- /.item -->
          
        </div><!-- .container -->
      </div><!-- .mega-menu-->
    </li><!-- .dropdown -->
    <li><a href='#'>About</a></li>
    <li><a href='#'>Conatct</a></li>
  </ul><!-- .container -->
</nav>
</body>
</html>

body {
  margin: 0;
  padding: 0;
    font-family: sans-serif;
}

a {text-decoration: none;}

.container {
  margin: auto;
  width: 1000px;
}

ul {
  padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
  list-style: none;
}

nav {
  background: #0ca0d6;
  font-size: 0;
  position: relative;
    
}

nav > ul > li {
  display: inline-block;
    font-size: 14px;
    padding: 0 15px;
    position: relative;
}

nav > ul > li > a {
  color: #fff;
    display: block;
    padding: 20px 0;
    border-bottom: 3px solid transparent;
    transition: all .3s ease;
}
nav > ul > li:hover > a {
  color: #444; 
    border-bottom: 3px solid #444;
}

.mega-menu {
  background: #eee;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s linear;
    position: absolute;
    left: 0;
    width: 100%;
    padding-bottom: 20px;
}
.mega-menu h3 {color: #444;}

.mega-menu .container {
    display: flex;
}
.mega-menu .item {
  flex-grow: 1;
    margin: 0 10px;
}
.mega-menu .item img {
    width: 100%;
}
.mega-menu a {
  border-bottom: 1px solid #ddd;
    color: #4ea3d8;
    display: block;
    padding: 10px 0;
}
.mega-menu a:hover {color: #2d6a91;}


.dropdown {position: static;}

.dropdown:hover .mega-menu {
    visibility: visible;
    opacity: 1;
}
