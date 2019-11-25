<?php
 class conexao{
        private $servidor;
        private $usuario;
        private $senha;
        private $banco;
        private $pdo;      

        public  function getConecta(){
            try{
                $pdo = new PDO("mysql:host=localhost:3307;dbname=banco_cachorro","root","usbw");
                return $pdo;
            }catch(PDOException $e){
                echo "Erro:" . $e->getMessage();
            }
            
        }
 }
?>