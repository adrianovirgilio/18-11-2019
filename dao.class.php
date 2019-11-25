<?php
    require_once("conexao.class.php");
    require_once("dao.class.php");
    $objeto = new cachorro();
    $con = new conexao();    
    class dao{ 
        private $conexao;

        public function __construct()
        {
            $this->conexao = new conexao();         
        }

        public function insereCachorro($nome,$raca){   
            $prepara = $this->conexao->getConecta()->prepare("INSERT INTO tabela_cachorro(nome,raca) VALUES(?,?);");
            $prepara->bindParam(1,$nome);
            $prepara->bindParam(2,$raca);
            return $prepara->execute();
        }
}

?>