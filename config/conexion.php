<?php
    // Se define la clase "Conectar".
    class Conectar{
        // Variable protegida para almacenar la conexión a la base de datos.
        protected $dbh;

        // Función para realizar la conexión a la base de datos.
        protected function Conexion(){
            try {
                // Se establece la conexión a la base de datos usando PDO.
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=pasarela","root","");
                // Se retorna el objeto PDO con la conexión establecida.
                return $conectar;
            }catch(Exception $e){
                // Si ocurre un error durante la conexión, se muestra el mensaje de error y se termina el script.
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        // Función para configurar la codificación de caracteres.
        public function set_names(){
            // Se ejecuta la consulta para configurar la codificación de caracteres a "utf8".
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>