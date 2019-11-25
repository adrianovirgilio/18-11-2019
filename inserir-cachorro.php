<?php
     require_once("cachorro.class.php");
     require_once("conexao.class.php");
     require_once("dao.class.php");
     $dog1 = new cachorro();
     $dao = new dao();
     $dog1->setNome("Zaimon");
     $dog1->setRaca("Pastor Australiano");
     $rs = $dao->insereCachorro($dog1->getNome(),$dog1->getRaca());
     if($rs==true){
         echo "Dados gravados com sucesso!";
     }else{
         echo "Não foi possível gravar o registro!";
     }
?>