<?php
    class db{
        private $host= "localhost";
        private $user="root";
        private $pass="";
        private $database="gers_contable1";

        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";database=".$this->database,$this->user,$this->pass);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>