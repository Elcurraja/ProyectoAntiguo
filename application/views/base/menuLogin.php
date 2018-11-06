<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script>
        function cerrar_sesion(){
            $.ajax({
                url:"",
                type:"POST",
                data:{
                    "destroy":"si"
                },
                success:function(respuesta){
                    location.href ="./";
                },
                error:function(jqXHR, textStatus, errorThrown){
                    console.log("Error en la peticion AJAX: " + errorThrown + ", " + textStatus);
                }
            });
        }
    </script>
    <title><?php echo base_url()?></title>
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
                        <a class="nav-link" href="<?php echo base_url('productos')?>">Productos</a>
                        <div id="divlow2"></div>
                    </li>
                    <li class="menu_li nav-item">
                        <a class="nav-link" href="#">Pedidos</a>
                        <div id="divlow2"></div>
                    </li>
                    <li class="menu_li nav-item">
                        <a class="nav-link" href="#">Historico Almacen</a>
                        <div id="divlow2"></div>
                    </li>
                    <li class="menu_li nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administracion
                        </a>
                        <div id="divlow4"></div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Empleados</a>
                            <a class="dropdown-item" href="#">Proveedores</a>
                            <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                    </li>
                    <li class="menu_li nav-item">
                        <a class="nav-link"  href="#" onclick="cerrar_sesion()">Logout</a>
                        <div id="divlow2"></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
 