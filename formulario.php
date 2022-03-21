<?php

$conexion = mysqli_connect("127.0.0.1","root","12345678","BDSistemaIntegrado",3307);

$host="127.0.0.1";
$port=3307;
$socket="";
$user="root";
$password="12345678";
$dbname="BDSistemaIntegrado";


$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());


if(isset($_POST["submit"])){

    if(empty($_POST['Codigo'])){

    echo "<p class='error'> * El campo código no puede estar vacio</p>";
    }

    if(empty($_POST['Nombre'])){

        echo "<p class='error'> * El campo nombre no puede estar vacio</p>";
        }

    if(empty($_POST['Precio'])){

        echo "<p class='error'> * El campo precio no puede estar vacio</p>";
            }   

    else {


        $sql ="INSERT INTO Productos (codProducto,nomProducto,precioProducto) 
        values  ('{$_POST['Codigo']}' , '{$_POST['Nombre']}' , '{$_POST['Precio']}')";

        mysqli_query($con,$sql);   

        echo "<p class='correcto'> * Los datos han sido enviados correctamente</p>";
        
    }

}





   

