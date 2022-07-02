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
