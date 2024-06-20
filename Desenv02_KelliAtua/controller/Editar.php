<?php

require_once("../model/BDProduto.php");

class Editar {

    private $editar, $id, $nome, $descricao, $valor, $categoria, $disponivel;

    public function __construct($id) {
        $this->editar = new BDProduto();
        $this->criarFormulario($id);
    }

    private function criarFormulario($id) {

        $row = $this->editar->pesquisaProduto($id);
        $this->id = $id; 
        $this->nome = $row['nome'] ?? ' ';
        $this->descricao = $row['descricao'] ?? ' ';
        $this->valor = $row['valor'] ?? ' ';
        $this->categoria = $row['categoria'] ?? ' ';
        $this->disponivel = $row['disponivel'] ?? ' ';
    }

    public function editarFormulario($id,$nome, $descricao, $valor, $categoria, $disponivel) {
        if ($this->editar->updateProduto($id,$nome, $descricao, $valor, $categoria, $disponivel) == TRUE) {
            echo "<script>alert('Produto editado com sucesso!');document.location='../view/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao editar o produto! Tente Novamente!');history.back()</script>";
        }
    }

    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getDisponivel(){
        return $this->disponivel;
    }
}

    $id = filter_input(INPUT_GET, 'id');
    $editar = new Editar($id);
    if (isset($_POST['submit'])) {
        $editar->editarFormulario($_POST['id'],$_POST['nome'], $_POST['descricao'], $_POST['valor'], $_POST['categoria'], $_POST['disponivel']);
    }