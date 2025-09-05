<?php
    class Producto extends Conectar{

        // Función para obtener todos los productos de la base de datos.
        public function get_producto(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT
            tm_producto.prod_id,
            tm_producto.cat_id,
            tm_producto.prod_img,
            tm_producto.prod_nom,
            tm_producto.prod_moneda,
            tm_producto.prod_precio,
            tm_categoria.cat_nom
            FROM tm_producto
            INNER JOIN tm_categoria
            ON tm_producto.cat_id = tm_categoria.cat_id 
            WHERE tm_producto.est = 1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        // Función para obtener un producto específico de la base de datos.
        public function get_producto_x_id($prod_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT
            tm_producto.prod_id,
            tm_producto.cat_id,
            tm_producto.prod_img,
            tm_producto.prod_nom,
            tm_producto.prod_moneda,
            tm_producto.prod_precio,
            tm_categoria.cat_nom
            FROM tm_producto
            INNER JOIN tm_categoria
            ON tm_producto.cat_id = tm_categoria.cat_id 
            WHERE tm_producto.est = 1
            AND tm_producto.prod_id=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prod_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>