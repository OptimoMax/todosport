<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("localhost", "id21595791_todosporrt", "Wet134wet134!");
                  mysqli_select_db($conexion, "id21595791_tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de Ropa</title>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Pagina principal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                    </ul>
                    
                </div>
            </div>
        </nav>

<header style="background-color: #333; color: #fff; text-align: center; padding: 20px;">
    <h1 style="font-size: 36px; margin: 0;">Detalle del producto</h1>
</header>
  <?php
  // 6) asignamos a diferentes variables los respectivos valores del array $datos.
  // este paso no es estrictamente necesario, pero es mas practico
  //para despues llamarlos solo con el nombre de la variable
  $prenda=$datos["prenda"];
  $marca=$datos["marca"];
  $talle=$datos["talle"];
  $precio=$datos["precio"];
  $imagen=$datos['imagen'];?>

  <!-- mostramos los datos de ese único producto
  lo meto en una card, pero se puede mostrar como quieran-->

  <div class="container" style="text-align: center;">
        <div class="row" style="display: inline-block;">
            <div class="card w-50" style="border: 1px solid #ccc; padding: 10px; margin: 10px; display: inline-block; margin-left: auto; margin-right: auto;">
                <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($imagen)?>" alt="..." style="width: 100%; height: auto;" />
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title" style="font-size: 20px; color: #333;">Marca: <?php echo $marca;?></h5>
                    <p class="card-text" style="font-size: 16px;">Talle: <?php echo $talle?></p>
                    <p class="card-text" style="font-size: 18px; font-weight: bold;">$<?php echo $datos["precio"];?></p>
                </div>
            </div>
        </div>
    </div>

<footer>
<br>
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Optimo Maximo 2023</p></div>
        </footer>
</footer>


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->



  <script src="js/scripts.js"></script>
</body>
</html>
