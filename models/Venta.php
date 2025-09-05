<?php
    class Venta extends Conectar{

        public function insert_venta($vent_nom, $vent_ape, $vent_telf, $vent_email, $vent_pais, $vent_dire, $vent_depa, $vent_codpostal, $vent_total){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO tm_venta (vent_nom, vent_ape, vent_telf, vent_email, vent_pais, vent_dire, vent_depa, vent_codpostal,vent_total) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $vent_nom);
            $sql->bindValue(2, $vent_ape);
            $sql->bindValue(3, $vent_telf);
            $sql->bindValue(4, $vent_email);
            $sql->bindValue(5, $vent_pais);
            $sql->bindValue(6, $vent_dire);
            $sql->bindValue(7, $vent_depa);
            $sql->bindValue(8, $vent_codpostal);
            $sql->bindValue(9, $vent_total);
            $sql->execute();

            $sql1="SELECT LAST_INSERT_ID() AS 'vent_id';";
            $sql1=$conectar->prepare($sql1);
            $sql1->execute();
            return $resultado=$sql1->fetchAll(pdo::FETCH_ASSOC);
        }

        public function insert_detalle_venta($vent_id, $det_cant, $prod_id, $cat_id, $prod_nom, $prod_precio, $det_total){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO tm_detalle (vent_id, det_cant, prod_id, cat_id, prod_nom, prod_precio, det_total) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $vent_id);
            $sql->bindValue(2, $det_cant);
            $sql->bindValue(3, $prod_id);
            $sql->bindValue(4, $cat_id);
            $sql->bindValue(5, $prod_nom);
            $sql->bindValue(6, $prod_precio);
            $sql->bindValue(7, $det_total);
            $sql->execute();
        }

        public function get_venta_x_id($vent_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_venta WHERE vent_id=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $vent_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_detalle_x_vent($vent_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_detalle WHERE vent_id=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $vent_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function update_venta($vent_id,$paymentId,$token,$PayerID,$json_data){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_venta SET 
            paymentId=?,
            token=?,
            PayerID=?,
            json_data=?
            WHERE vent_id=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $paymentId);
            $sql->bindValue(2, $token);
            $sql->bindValue(3, $PayerID);
            $sql->bindValue(4, $json_data);
            $sql->bindValue(5, $vent_id);
            $sql->execute();
        }

    }
?>