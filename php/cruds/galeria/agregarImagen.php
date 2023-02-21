<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>



<body>
    

    <br>
    <br>
    <br>
    <br>


    <!-- Inicio sección a -->
    <section class="a">

        <!-- Contenedor registrar -->
        <div class="container">

            <!-- Contenedor modificacion css -->
            <div class="row">

                <!-- Contenedor columnas -->
                <div class="col-12">
                    <!-- Contenedor card -->
                    <div class="card">
                        <div class="card-body">
                            
                            <form enctype="multipart/form-data" id="formulario" method="post" action="insertarImagen.php" class="row g-3 a">

                         
                                    <!-- Campo nombres -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="" class="form-label ">Titulo</label>
                                                <input type="text" class="form-control"  placeholder="Nombre de la imagen" id="titulo" name="titulo" Required></textarea> 
                                        </div>

                                        <div class="col-md-12">
                                            <label for="formFile" class="form-label">Miniatura del blog (500x500 px)</label>
                                            <input class="form-control" type="file" id="foto" name="foto" Required>
                                        </div>

                                        

                                        <div class="col-md col-lg col-sm"></div>
                                        <div class="col-md-1 col-lg-1 col-sm-1 col-1">
                                            <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary text-center"
                                                value="REGISTRAR"></input>
                                        </div>
                                        <div class="col-md col-lg col-sm"></div>
                                    </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </section>




        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

</body>

</html>









    <style>
        * {
            box-sizing: border-box;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        [class*="col-"] {
            float: left;
            padding: 15px;

        }

        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }

     

        .container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            margin: 0px;
            font-family: sans-serif;
        }

        header .contacto {
            background-color: #253C5E;
            margin-top: 0%;
            padding-top: 0%;
            margin-right: 1%;
            margin-left: 0%;
            padding-left: 2%;
            padding-right: 2%;
            top: 0;

        }

        header .contacto h2 {

            font-size: 16px;
            color: white;
            text-align: center;
            text-height: 900;

        }
    </style>

</body>