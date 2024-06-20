<?php
require_once("../model/BDProduto.php");
class Deletar {
    private $deleta;

    public function __construct($id){
        $this->deleta = new BDProduto();
        if($this->deleta->deleteProduto($id)== TRUE){
            echo "<script>alert('Produto deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar o produto!');history.back()</script>";
        }
    }
}
new Deletar($_GET['id']);
