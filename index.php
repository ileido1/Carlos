<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
   <script
  src="https://code.jquery.com/jquery-1.11.1.js"
  integrity="sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw="
  crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scrolloverflow.js"></script>
    <script src="jquery.fullPage.js"></script>
    <title>Carlos Hernández</title>
  </head>
  <body>  
    <header>
<nav class="navbar navbar-dark navbar-expand-md fixed-top " id="navbar">
       <a class="navbar-brand " href="#Inicio"><img src="hc.svg" class="svg"></a>
       <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#Opciones" aria-controls="Opciones" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
           <div class="collapse navbar-collapse" id="Opciones">
              <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
               </li>
               <li class="nav-item">  
               </li>
               <li class="nav-item">
               </li>
             </ul>
            <div class="navbar-nav nav-links">
               <a class="nav-item nav-link" href="#About" data-menuanchor="About">A cerca</a>
               <a class="nav-item nav-link"  href="#Contact" data-menuanchor="Contact">Contacto</a>
             </div>
           </div>
     </nav>
    </header>

  
         
<div id="wrapper">
  <div class="section displaycenter" data-anchor="Inicio" id="home"> 
    <div class="container ">
              <div class="">
                <h1 class="colorP titulo upper">Carlos Hernández</h1>
                <p class="subtiulo">Diseñador web<span style="color:#FF6363">/</span> Front-end and back-end developer</p>
                 <button type="button" class="btn  btn-default bS "><a href="#About" class="btnA">Leer más</a> </button>
              </div>
        </div>
  <div id="mice">
              <a href="#scroll"><div class="mouse"><div class="wheel"></div></div>
              <div><span class="unu"></span> <span class="doi"></span></div></a>
          </div>
    </div>
         
  <div class="section fp-auto-height-responsive" id="nosotros">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 col-xs-6 ">
            <p class="colorS subtitle">Acerca de</p>
            <h1 class="hnosotros">Carlos Hernández</h1>
            <p class="colorT">Estudiante de Ingeniería Informática, con 2 años de experiencia en desarrollo web, ultilizando las últimas tecnologías web, como HTML5, CSS3, Responsive Web Design Bootstrap4, Jquery,CSS3, php y ruby.</p>
          </div>
            <div class="col-md-6 col-xs-6" style=" margin: 0 auto;text-align: center;display: flex;justify-content: center;align-items: center;">
          </div>
        </div>
        <div class="servicios">
          <div class="row">
          <div class="col-md-4">
            <div class="carta">
              <img class="img-c" src="paginaweb.jpg" alt="Card image cap">
                <h5 class="card-t">Páginas web</h5>
                <p class="colorT">Un sitio web, con el diseño personalizado según los requerimientos pedidos. Perfecto para pequeñas empresas, eventos, etc.</p>
              </div>
            </div>
          <div class="col-md-4">
            <div class="carta">
              <img class="img-c" src="catalogo.jpg" alt="Card image cap">
                <h5 class="card-t">Catalagos web</h5>
                <p class="colorT">Servicio personalizado de diseño y desarrollo web. Acceso interactivo a catálogos de productos, listas de precios y folletos publicitarios. Perfecto para pequeñas empresas.</p>
            </div>
            </div>
          <div class="col-md-4">
            <div class="carta">
              <img class="img-c" src="tienda.jpg" alt="Card image cap">
                <h5 class="card-t">Tiendas virtuales(E-commerce)</h5>
                <p class="colorT">Una solución para personas o empresas que desean una tienda en línea con una mayor variedad de productos,venta directa e interactiva de productos a los clientes.</p>
          </div>
            </div>
           </div>
          </div>
        </div>
      </div>
  <div class="section  displaycenter " id="contacto" >
    <div class="container">
      <div class="row">
       <div class="col-md-12">
               <form id="form" action="" method="">
                <h1 class="hnosotros ">Contacto</h1>
                 <p class="colorS" style="text-align: left;">Conozca las tarifas y exponga sus requerimientos.</p>
                  <div class="form-row">
                    <div class="messages"></div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre u Organización">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="direccion" placeholder="Pais/Ciudad">
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" name="telefono" placeholder="Teléfono">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                  </div>
                   <div class="form-group">
                  <label style="display: block;" for="mensaje">Exponga su requirimiento</label>
                   <textarea class="text-area" id="mensaje" name="requirimiento"></textarea>
                   </div>
                   <input type="submit" class="btn btn-outline-danger" style="width: 25%; margin-bottom:  20px;" name="Enviar">
                   <div class="spin">
                  <div class="col-md-12 col-xs-12"> 
                  <i class="fas fa-spinner fa-spin"></i>
                  </div>  
                  </div>
                </form> 
        </div>
      </div>
    
    </div>
  </div>
  <div class="section fp-auto-height">
    <div class="footer">
      <div class="social-links">
        <span><a href="https://www.instagram.com/carlosluishc/" target="_blank"><i class="fab fa-instagram 7x"></i></a></span>
        <span><a href="https://www.linkedin.com/in/carlos-hern%C3%A1ndez-cruz-81964915b/" target="_blank"><i class="fab fa-linkedin-in"></i></a></span>
        
      </div>
      <p><a href="https://www.instagram.com/carlosluishc/" target="_blank">Carlos Hernández © 2018 All Rights Reserved.</a></p>
    </div>
  </div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
  <script src="validation.js"></script>
      <script src="main.js"></script>
  </body>
</html>
