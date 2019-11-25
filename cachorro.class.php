<?php
    class cachorro{
        private $nome;
        private $raca;

        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function  getRaca(){
            return $this->raca;
        }

        function setRaca($raca){
            $this->raca = $raca;
        }

    }

?>