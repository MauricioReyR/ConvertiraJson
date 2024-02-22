<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "calzadosbumranga";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if ($conn){
        //se hace la consulta sql de la tabla
        $sql = "SELECT * FROM productos limit 500"; //$sql = "SELECT referencia, nombre FROM productos limit 500"; si se quiere mostrar solo unas counmas de la tabla
        //se guarda el ressultado de la consulta en la variable
        $resut = mysqli_query($conn,$sql);

        //se crea una variable para convertir a tipo Json
        $data = array();
        //se recorre las filas para mostrar en pantalla
        while ($row = mysqli_fetch_assoc($resut)){
            //esta es la impresion de las filas de la BD para ver si la conexion funciona.
            //echo $row['referencia']." ".$row['nombre']." ".$row['modelo']." ".$row['talla']." ".$row['material']." ".$row['color']." ".$row['precioCompra']." ".$row['precioVenta']."<br>";
             $data [] = $row;           
        }
            //esta no se quiere var_dump($data);
            echo json_encode($data);
        }else{
        echo "Error en la conexión";
    }  