<?php
  include "config.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include FOLDER_TEMPLATE."head.php";
    ?>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"-->
    <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?=URL_JS?>jquery-3.4.1.min.js"></script>
<script src="javaScript/alertifyjs/alertify.js"></script>	
<link rel="stylesheet" type="text/css" href="<?= URL_CSS?>estiloindex.css">
<link rel="stylesheet" type="text/css" href="<?= URL_CSS?>style_index.css">
<link rel="stylesheet" href="<?= URL_CSS?>sweetalert2.min.css">
<style type="text/css">
#tarjeta1,#tarjeta2{
display: inline-block;
	}
	#tar{
		display: flex;
	}
	#navbarSupportedContent{
		justify-content: center;
		text-align: center;
		float: right;
		margin-left: 100px;
	}
	#myTab{
		margin-right: 100px;
	}
	#buscar{
		float: right;
		text-align: right;
		align-content: right;
		right: 0px;
	}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Angela confecciones</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      
      <li class="nav-item">
        <a class="nav-link"  href="https://api.whatsapp.com/send?phone=573108854196">Contacto</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <ul class="navbar-nav mr-auto">
      
      <!--li class="nav-item">
        <a class="nav-link"  href="<?=URL_PROY?>app/index.php">Iniciar Sesión</a>
      </li-->

      <li class="nav-item">
        <a class="nav-link"  data-toggle="modal" data-target="#loginModal">Iniciar Sesión</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Registrate</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<?php include 'app/pruebaLogin.php' ?>

    <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" id="img" src="<?= URL_IMG?>banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="img" src="<?= URL_IMG?>barnner2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="img" src="<?= URL_IMG?>banner3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<main>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
      <h1 class="display-4 mt-4">Nuestros productos</h1>
      <p class="lead">Conoce nuestra variedad de productos que tenemos a tu disposición</p>
    </div>

    <div class="container" id="lista-productos">

      <div class="card-deck mb-3 text-center">

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAMARRA SAINT</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropa1.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">140000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chamarra</li>
              <li>Hombre</li>
              <li>Color negro</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA BEISBOLERA CHICAGO </h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropa2.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">110000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Color Rojo</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary nav-link "data-id="2">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA ESSENTIA MAN</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropa3.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">140000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Hombre</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal"  class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
          </div>
        </div>

      </div>

      <div class="card-deck mb-3 text-center">

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA LUANDA VERDE</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropa4.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">120000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Hombre</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA EREVAN BLANCA</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropa5.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">140000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Hombre</li>
              <li>Color blanco</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA PRAIA VERDE</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropa6.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">135000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Hombre</li>
              <li>Color verde</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
          </div>
        </div>

      </div>

      <div class="card-deck mb-3 text-center">

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA BEISBOLERA AMERICANA NEGRA</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropaF3.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">110000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Mujer</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA LUANDA ROSADA</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropaF4.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">120000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta</li>
              <li>Mujer</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">CHAQUETA DE JEAN OVERSIZE PATCH</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropaF5.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">110000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta en jean</li>
              <li>Mujer</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
          </div>
        </div>

      </div>

      <div class="card-deck mb-3 text-center">

      <div class="card mb-3 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-bold">CHAQUETA ESSENTIA</h4>
        </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropaF.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">140000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Chaqueta en jean</li>
              <li>Mujer</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">BLAZER FACE TO FACE VERDE</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>ropaF1.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">67500</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Blazer</li>
              <li>Mujert</li>
              <li>Color verde</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">BLUSA CHAINS</h4>
          </div>
          <div class="card-body">
            <img src="<?= URL_IMG?>estilo2.jpg" class="card-img-top">
            <h1 class="card-title pricing-card-title precio">$ <span class="">36000</span></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>
                <select id="inputTalla" class="form-control">
                  <option selected>Seleccione su talla</option>
                  <option value="S">Talla S</option>
                  <option value="M">Talla M</option>
                  <option value="L">Talla L</option>
                </select>
              </li>
              <li></li>
              <li>Blusa</li>
              <li>Mujer</li>
            </ul>
            <a data-toggle="modal" data-target="#loginModal" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </main>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <h6>Numero de Documento</h6>
        <div class="input-group mb-3">

  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
  </div>
  <input type="text" class="form-control" id="documento" placeholder="solo numeros" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Nombre</h6>
        <div class="input-group mb-3">

  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  </div>
  <input type="text" class="form-control" id="nombre" placeholder="Nombres " aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Apellidos</h6>
        <div class="input-group mb-3">

  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  </div>
  <input type="text" class="form-control" id="apellido" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Dirección</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
  
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span>
  </div>
  <input type="text" class="form-control" id="dir" placeholder="Av 17 N 3-35" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Email</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text"  id="basic-addon1"><i class="fa fa-envelope"></i></span>
  </div>
  <input type="email" id="email" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Telefono</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text"  id="basic-addon1"><i class="fa fa-phone"></i></span>
  </div>
  <input type="text" id="tel" class="form-control" placeholder="3157876185" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Password</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  </div>
  <input type="password" minlength="6" id="pass1"  class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
  <input type="password" minlength="6" id="pass2"  class="form-control" placeholder="Confirmación" aria-label="Username" aria-describedby="basic-addon1">
 
</div>
 <h6 id="min">Mínimo 6 Caracteres</h6>
      </div>
      <div id="boton" class="modal-footer text-left">
        
<!--input type="submit" value="Registrarse" id="registrar" class="btn btn-primary" data-dismiss="modal" /-->
          <button type="button" class="btn btn-primary" name="registrar" id="registrar">
          Registrarse
					</button>
      </div>
      <div id="mensajeuser">    
    </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contacto de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-primary alert-dismissible fade show text-left" role="alert">
  <strong>Info!</strong> Si tienes alguna pregunta no dudes en contactarnos. Estaremos atentos a responder cualquier inquietud que tengas.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <h6>Nombre Completo</h6>
        <div class="input-group mb-3">

  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  </div>
  <input type="text" id="nombrescontacto" class="form-control" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Email</h6>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
  </div>
  <input type="email" id="mail" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
</div>
<h6>Mensaje</h6>
<div class="input-group">

  <textarea class="form-control" id="campo" aria-label="With textarea"></textarea>
</div>

 
      </div>
      <div id="boton" class="modal-footer text-left">
        
        <input type="submit" value="Contactar" id="contactar" class="btn btn-primary" data-dismiss="modal" />
      </div>
    </div>
  </div>
</div>

<div class="modal fade col-12" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-12">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-12" id="cuerpo">
        <div class="col-sm-7">
          <img id="img_detalle" class="imgCarrito"src="<?= URL_IMG?>ropa1.jpg">
        </div>
        <div class="col-sm-6 text-left">
         <p>
         
         </p>
        </div>
 
      </div>
      <div id="boton" class="modal-footer text-left">
        <input type="submit" value="Volver" id="añadir al Carrito" class="btn btn-primary" data-dismiss="modal" />
        <input type="submit" value="Añadri al Carrito" id="" class="btn btn-primary" data-dismiss="modal" />
      </div>
    </div>
  </div>
</div>
 <footer class = "footer">
        <div id="cont"  class = "container col-12">
          <div class="row">
           <div  class="col-sm-12 text-center">
            <h2 id="titulo">¿ Cómo Comprar en cofecciones angela?</h2>
           </div>
           <div class="col-sm-4 text-center">
            <img id="img_footer" src="<?= URL_IMG?>nuevo.png">
            <p id="mensajito">1. Registrate en la pagina para poder tener super promociones
            </p>
           </div>
           <div class="col-sm-4 text-center">
             <img id="img_footer" src="<?= URL_IMG?>carrito.png">
             <p id="mensajito">2. Despues de registrarte escogue la prenda que mas te guste con la talla que tenemos, ve al apartado del carrito
           </div>
           <div class="col-sm-4 text-center">
             <img id="img_footer" src="<?= URL_IMG?>ubicacion.png">
             <p id="mensajito">3. Nosotros te despachamos el pedido, lo enviamos a tu casa gratis
            </p>
           </div>
         </div>
        </div>
        <div id="cont2"  class = "container col-12">
          <div class="row">
           <div  class="col-sm-12 text-left">
           <center>
           <img id="img_footer" src="<?= URL_IMG?>logo.png">
            <h2 id="titulo2">MANUELA BELTRAN</h2>
            </center>
         </div>
         <center>
          <h2>----------------------------------------- Developed by Danny Alejandro Bayona clavijo &copy; 2022 --------------------------- </h2>
        </CENTER>
        </div>

        
    </footer>

 <script src="<?= URL_JS?>indexjs.js"></script>
</body>
</html>