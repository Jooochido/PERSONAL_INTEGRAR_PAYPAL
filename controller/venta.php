<?php
    // Se incluyen los archivos necesarios
    require_once("../config/conexion.php");
    require_once("../models/Venta.php");

    // Se crea una instancia de la clase Producto
    $venta = new Venta();

    // Se utiliza un switch para determinar qué acción realizar
    switch($_GET["op"]){
        case "mostrar":
            $datos = $venta->get_venta_x_id($_POST["vent_id"]);
            if (is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["vent_id"]=$row["vent_id"];
                    $output["vent_nom"]=$row["vent_nom"];
                    $output["vent_ape"]=$row["vent_ape"];
                    $output["vent_email"]=$row["vent_email"];
                    $output["vent_pais"]=$row["vent_pais"];
                    $output["vent_dire"]=$row["vent_dire"];
                    $output["vent_depa"]=$row["vent_depa"];
                    $output["vent_codpostal"]=$row["vent_codpostal"];
                    $output["vent_total"]=$row["vent_total"];
                }
                echo json_encode($output);
            }
        break;

        case "listar":
            $datos = $venta->get_detalle_x_vent($_POST["vent_id"]);
            foreach($datos as $row){
                ?>
                <tr>
                    <th><?php echo $row["prod_nom"] ?></th>
                    <td><?php echo "USD ".$row["prod_precio"] ?></td>
                    <td><?php echo $row["det_cant"] ?></td>
                    <td><?php echo "USD ".$row["det_total"] ?></td>
                </tr>
                <?php
            }
        break;

        case "actualizar":
            $venta->update_venta($_POST["vent_id"],$_POST["paymentId"],$_POST["token"],$_POST["PayerID"],$_POST["json_data"]);
        break;
    }

?>