<?php
require_once("../model/BDProduto.php");
class Listar {

    private $lista;

    public function __construct()
    {
        $this->lista = new BDProduto();
        $this->criarLista();
    }

    private function criarLista()
    {
        echo '<div class="row">';
        echo '<div class="col-md-6 mb-4">';
        echo '<h1 class="mb-4">Lista de Produtos</h1>';
        echo '</div>';
        echo '<div class="col-md-6 mb-4">';
        echo '<a href="../view/BuscaLista.php" class="btn btn-primary float-md-right">Filtrar por Nome</a>';
        echo '</div>';
        echo '</div>';

        $row = $this->lista->getProduto();
        echo '<div class="row">';
        foreach ($row as $value) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $value['nome'] . '</h5>';
            echo '<p class="card-text"><strong>Descrição: </strong>' . $value['descricao'] . '</p>';
            echo '<p class="card-text"><strong>Valor: </strong>R$' . $value['valor'] . '</p>';
            echo '<p class="card-text"><strong>Categoria: </strong>' . $value['categoria'] . '</p>';
            echo '<p class="card-text"><strong>Status: </strong>' . ($value['disponivel'] == "0" ? "Indisponível" : "Disponível") . '</p>';
            echo '<div class="text-center">';
            echo '<hr class="w-100 my-4">';
            echo '<a class="btn btn-warning mr-2" href="../view/Edicao.php?id=' . $value['id'] . '"><i class="fas fa-pencil-alt"></i></a> ';
            echo '<a class="btn btn-danger mr-2" href="../controller/Deletar.php?id=' . $value['id'] . '"><i class="fas fa-trash-alt"></i></a>';
            echo '<a class="btn btn-success" href="../view/index.php?id=' . $value['id'] . '"><i class="fas fa-shopping-cart"></i></a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}
?>