<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <title>Portal Administracion</title>
</head>
<body>
    <div id="cont" class="sticky-top">
        <nav class="menu navbar navbar-expand navbar-primary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="menu_li nav-item">
                        <a class="nav-link" href="<?php echo base_url('principal')?>">Principal</a>
                        <div id="divlow1"></div>
                    </li>
                    <li class="menu_li nav-item">
                        <a class="nav-link" href="#">Productos</a>
                        <div id="divlow2"></div>
                    </li>
                    <li class="menu_li nav-item">
                        <a class="nav-link" href="<?php echo base_url('login')?>">Login</a>
                        <div id="divlow2"></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid contenedor">
 