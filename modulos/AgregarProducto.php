<?php
include '../lib/Conexion.php';

/*Instancia objeto de conexión*/
$conn=new Conexion;

if($conn->conectar()){
$nom=$_POST["nombre"];
$ntotusd=$_POST["totalusd"];
$ano=$_POST["ano"];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom,$totalusd,$ano')";

echo $sql;
}
/*
        $i=0;
        while($fila = $resultado->fetch_assoc()){
          $oProducto= new Producto($fila["nombre"],$fila["totalusd"],$fila["ano"]);
          $aProductos[$i]=$oProducto;
         }*/

$sqlip="select host from information_schema.processlist WHERE ID=connection_id();";
        $resultado = $this->objconn->query($sqlip);
        
         /* Consultas de selección que devuelven un conjunto de resultados */
        if ($resultado = $this->objconn->query($sql)) {
            /* liberar el conjunto de resultados */
            $this->objconn->close();
        }   