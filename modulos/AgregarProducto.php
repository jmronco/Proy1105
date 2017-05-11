<?php
include '../lib/Conexion.php';

/*Instancia objeto de conexión*/
$conn=new Conexion;

if($conn->conectar()){
$nom=$_POST["nombre"];
$totalusd=$_POST["totalusd"];
$ano=$_POST["ano"];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom',$totalusd,$ano)";

$conn->objconn->query($sql);
echo $sql;
}
/*
        $i=0;
        while($fila = $resultado->fetch_assoc()){
          $oProducto= new Producto($fila["nombre"],$fila["totalusd"],$fila["ano"]);
          $aProductos[$i]=$oProducto;
         }*/

        
        
         