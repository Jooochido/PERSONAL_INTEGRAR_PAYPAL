<?php
    // Se incluyen los archivos necesarios
    require_once("../config/conexion.php");
    require_once("../models/Producto.php");

    // Se crea una instancia de la clase Producto
    $producto = new Producto();

    // Se utiliza un switch para determinar qué acción realizar
    switch($_GET["op"]){
        // Si la acción es "listar"
        case "listar":
            // Se obtienen todos los productos y se preparan los datos para enviar como respuesta
            $datos = $producto->get_producto();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cat_nom"];
                $sub_array[] = $row["prod_nom"];
                $sub_array[] = $row["prod_moneda"];
                $sub_array[] = $row["prod_precio"];
                $sub_array[] = '<button type="button" onClick="agregar('.$row["prod_id"].')" id="'.$row["prod_id"].'" class="btn btn-solid btn-xs">Agregar</button>';
                $data[] = $sub_array;
            }

            // Se prepara la respuesta en formato JSON
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "mostrar":
            // Se obtiene la información del producto con el id enviado y se prepara la respuesta en formato JSON
            $datos = $producto->get_producto_x_id($_POST["prod_id"]);
            if (is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["prod_id"]=$row["prod_id"];
                    $output["cat_id"]=$row["cat_id"];
                    $output["cat_nom"]=$row["cat_nom"];
                    $output["prod_img"]=$row["prod_img"];
                    $output["prod_nom"]=$row["prod_nom"];
                    $output["prod_moneda"]=$row["prod_moneda"];
                    $output["prod_precio"]=$row["prod_precio"];
                }
                echo json_encode($output);
            }
        break;
    }

?>