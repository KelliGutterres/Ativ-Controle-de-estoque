<?php
require_once("../model/BDProduto.php");

class Listagem{

    private $lista;

    public function __construct($busca = null)
    {
        $this->lista = new BDProduto();
        $this->criarLista($busca);
    }

    private function criarLista($busca)
    {

        echo '<div class="row">';
        echo '<div class="col-md-6 mb-4">';
        echo '<h2 class="mb-4">Lista de Produtos por Nome</h2>';
        echo '</div>';
        echo '<div class="col-md-6 mb-4">';
        echo '<form class="form-inline" method="GET" action="">';
        echo '<input class="form-control mr-2" type="search" placeholder="Buscar por nome" aria-label="Buscar" name="busca">';
        echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>';
        echo '<a href="../view/index.php" class="btn btn-secondary ml-2"><i class="fas fa-arrow-left"></i> Voltar</a>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        
        if ($busca) {
            $row = $this->lista->buscarProdutoPorNome($busca);
        } else {
            $row = $this->lista->getProduto();
        }

        if ($row) {
            echo '<div class="row">';
            foreach ($row as $value) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($value['nome']) . '</h5>';
                echo '<p class="card-text"><strong>Descrição: </strong>' . htmlspecialchars($value['descricao']) . '</p>';
                echo '<p class="card-text"><strong>Valor: </strong>R$' . htmlspecialchars($value['valor']) . '</p>';
                echo '<p class="card-text"><strong>Categoria: </strong>' . htmlspecialchars($value['categoria']) . '</p>';
                echo '<p class="card-text"><strong>Status: </strong>' . ($value['disponivel'] == "0" ? "Indisponível" : "Disponível") . '</p>';
                echo '<div class="text-center">';
                echo '<hr class="w-100 my-4">';
                echo '<a class="btn btn-warning mr-2" href="../view/Edicao.php?id=' . htmlspecialchars($value['id']) . '"><i class="fas fa-pencil-alt"></i></a> ';
                echo '<a class="btn btn-danger mr-2" href="../controller/Deletar.php?id=' . htmlspecialchars($value['id']) . '"><i class="fas fa-trash-alt"></i></a>';
                echo '<a class="btn btn-success" href="../view/index.php?id=' . $value['id'] . '"><i class="fas fa-shopping-cart"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<div class="alert alert-info" role="alert">Nenhum produto encontrado!</div>';
        }
    }
}

$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);
$listar = new Listagem($busca);
?>