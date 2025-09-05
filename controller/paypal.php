<?php
    require_once("../config/conexion.php");
    require_once("../models/Paypal.php");
    require_once("../models/Venta.php");

    $paypal = new Paypal();

    $venta = new Venta();

    switch($_GET["op"]){

        case "pagar":
            $datos_venta= $venta->insert_venta($_POST["vent_nom"], $_POST["vent_ape"], $_POST["vent_telf"], $_POST["vent_email"], $_POST["vent_pais"], $_POST["vent_dire"], $_POST["vent_depa"], $_POST["vent_codpostal"], $_POST["vent_total"]);
            if (is_array($datos_venta)==true and count($datos_venta)){
                $vent_id = $datos_venta[0]["vent_id"];

                $detalles = array();
                $detalles = json_decode($_POST["arrayDetalle"]);

                foreach($detalles as $row){
                    $det_cant= $row->det_cant;
                    $prod_id = $row->prod_id;
                    $cat_id=$row->cat_id;
                    $prod_nom=$row->prod_nom;
                    $prod_precio=$row->prod_precio;
                    $det_total=$row->det_total;

                    $venta->insert_detalle_venta($vent_id,$det_cant,$prod_id,$cat_id,$prod_nom,$prod_precio,$det_total);
                }
            }
            $datos = $paypal->get_paypal($_POST["arrayDetalle"],$_POST["vent_total"],$vent_id);
            echo $datos;
        break;

        case "validar":
            $datos=$paypal->get_validar_paypal($_POST["paymentId"],$_POST["PayerID"]);
            echo $datos;
        break;
    }

?>