<?php

require_once("../model/BDProduto.php");

class Produto extends BDProduto {

    private $id, $nome, $descricao, $valor, $categoria, $disponivel;

    public function setId($id){
        $this ->id = $id;
    }

    public function setNome($nome){
        $this ->nome = $nome;
    }

    public function setDesricao($descricao){
        $this ->descricao = $descricao;
    }

    public function setValor($valor){
        $this ->valor = $valor;
    }

    public function setCategoria($categoria){
        $this ->categoria = $categoria;
    }
    
    public function setdisponivel($disponivel){
        $this ->disponivel = $disponivel;
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

    public function incluir() {
        return $this->setProduto($this->getId(), $this->getNome(), $this->getDescricao(), $this->getValor(), $this->getCategoria(), $this->getDisponivel());
    }
}