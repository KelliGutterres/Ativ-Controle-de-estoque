<?php
require_once("../model/Produto.php");
class Cadastrar{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Produto();
        $this->incluir();
    }

    private function incluir(){

        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setDesricao($_POST['descricao']);
        $this->cadastro->setValor($_POST['valor']);
        $this->cadastro->setCategoria($_POST['categoria']);
        $this->cadastro->setDisponivel($_POST['disponivel']);

        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Produto cadastrado com Sucesso!');document.location='../view/Cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o produto! Tente Novamente!');history.back()</script>";
        }
    }
}
new Cadastrar();