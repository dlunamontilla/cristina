
<?php
    //   $servername = "localhost";
    //   $database = "gimnasio";
    //   $username = "root";
    //   $password = "";

    //   // Create connection
    //   $conexion = mysqli_connect($servername, $username, $password, $database);

    //   // Check connection
    //   if (!$conexion) {
    //       die("Connection failed: " . mysqli_connect_error());
    //   }
      
    //   echo "Connected successfully";
    //   mysqli_close($conexion);

    
    try {
        $conexion = new PDO('mysql:host=localhost; dbname=gimnasio', "root", "");
        echo "Conectado";
    } catch (PDOException $e) {
        echo "No conectado";
    }
 
?>