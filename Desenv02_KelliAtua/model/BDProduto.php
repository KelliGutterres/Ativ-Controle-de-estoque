<?php

//require_once("../init.php");

class BDProduto {

    protected $sqlite;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        $this->sqlite = new SQLite3('../BDProducts.db');
    }

    public function setProduto($id, $nome, $descricao, $valor, $categoria, $disponivel) {
        $stmt = $this->sqlite->prepare("INSERT INTO produto (`id`, `nome`, `descricao`, `valor`,`categoria`,`disponivel`) VALUES (:id,:nome,:descricao,:valor,:categoria,:disponivel)");
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
        $stmt->bindValue(':descricao', $descricao, SQLITE3_TEXT);
        $stmt->bindValue(':valor', $valor, SQLITE3_FLOAT);
        $stmt->bindValue(':categoria', $categoria, SQLITE3_TEXT);
        $stmt->bindValue(':disponivel', $disponivel, SQLITE3_INTEGER);

        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function getProduto() {
        $result = $this->sqlite->query("SELECT * FROM produto");
        $array = array();
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    public function deleteProduto($id) {
        if ($this->sqlite->query("DELETE FROM `produto` WHERE `id` = '" . $id . "';") == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function pesquisaProduto($id) {
        $result = $this->sqlite->query("SELECT * FROM produto WHERE id ='$id'");
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    public function updateProduto($id, $nome, $descricao, $valor, $categoria, $disponivel) {
        $stmt = $this->sqlite->prepare("UPDATE produto SET nome = :nome, descricao = :descricao, valor = :valor, categoria = :categoria, disponivel = :disponivel WHERE id = :id");
        $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
        $stmt->bindValue(':descricao', $descricao, SQLITE3_TEXT);
        $stmt->bindValue(':valor', $valor, SQLITE3_FLOAT);
        $stmt->bindValue(':categoria', $categoria, SQLITE3_TEXT);
        $stmt->bindValue(':disponivel', $disponivel, SQLITE3_INTEGER);
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);

        return $stmt->execute() ? true : false;
    }

    public function buscarProdutoPorNome($nome) {
        $stmt = $this->sqlite->prepare("SELECT * FROM produto WHERE nome LIKE :nome");
        $stmt->bindValue(':nome', '%' . $nome . '%', SQLITE3_TEXT);
        $result = $stmt->execute();
        $array = array();
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
}