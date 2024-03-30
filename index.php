<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Todo Sport</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light py-3">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="#" aria-label="Todo Sport">Todo Sport</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown me-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="adidas.php">Adidas</a></li>
            <li><a class="dropdown-item" href="nike.php">Nike</a></li>
            
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-light" type="submit">
          <a href="login.html" class="text-dark">Acceso interno</a>
        </button>
      </form>
    </div>
  </div>
</nav>

<header class="bg-dark py-md-5">
  <div class="container px-4 px-lg-5 mt-5">
    <div class="text-center text-white">
      <h1 class="display-4 fw-bolder">Todo Sport</h1>
      <p class="lead fw-normal text-white-50 mb-0">Siempre con vos</p>
    </div>
  </div>
</header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                  <?php
                  // 1) Conexion
                  $conexion = mysqli_connect("localhost", "id21595791_todosporrt", "Wet134wet134!");
                  mysqli_select_db($conexion, "id21595791_tienda");
                  

                  // 2) Preparar la orden SQL
                  // Sintaxis SQL SELECT
                  // SELECT * FROM nombre_tabla
                  // => Selecciona todos los campos de la siguiente tabla
                  // SELECT campos_tabla FROM nombre_tabla
                  // => Selecciona los siguientes campos de la siguiente tabla
                  $consulta='SELECT * FROM ropa';

                  // 3) Ejecutar la orden y obtenemos los registros
                  $datos= mysqli_query($conexion, $consulta);

                  //  recorro todos los registros y genero una CARD PARA CADA UNA
                  while ($reg = mysqli_fetch_array($datos)) {?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['marca']) ?></h5>
                                    <!-- Product price-->
                                  <h2>$<?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                            <!--boton con link de pago que hay que cargar primero en la base de datos
                                <div class="text-center"> <?php// echo $reg['link']; ?></div>-->
                               
                                <!--boton que me lleva a la pagina del producto-->
                                <div style="text-align: center; margin-top: 20px;">
    <a href="productos.php?id=<?php echo $reg['id']; ?>" style="text-decoration: none;">
        <button type="button" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
            Ver producto
        </button>
    </a>
</div>
                            </div>
                        </div>
                    </div>

                  <?php } ?>

                </div>
            </div>
        </section>

        <br>
            
            <br>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Optimo Maximo 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>



    </body>
</html>
