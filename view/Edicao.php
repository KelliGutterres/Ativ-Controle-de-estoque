<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Produto</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            include("../view/menu.php");
            require_once("../controller/Editar.php");

            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $editar = new Editar($id);
        ?>
        <div class="container mt-5">
            <h1 class="mb-4">Editar Produto</h1>
            <div class="row justify-content-center">
                <form method="post" action="../controller/Editar.php?id=<?php echo $editar->getId(); ?>" id="form" name="form" class="col-10 col-md-6 needs-validation" novalidate>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($editar->getNome()); ?>" required>
                        <div class="invalid-feedback">Por favor, insira o nome do produto.</div>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input class="form-control" type="text" id="descricao" name="descricao" value="<?php echo htmlspecialchars($editar->getDescricao()); ?>" required>
                        <div class="invalid-feedback">Por favor, insira a descrição do produto.</div>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input class="form-control" type="text" id="categoria" name="categoria" value="<?php echo htmlspecialchars($editar->getCategoria()); ?>" required>
                        <div class="invalid-feedback">Por favor, insira a categoria do produto.</div>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input class="form-control" type="number" step="0.01" id="valor" name="valor" value="<?php echo htmlspecialchars($editar->getValor()); ?>" required>
                        <div class="invalid-feedback">Por favor, insira o valor do produto.</div>
                    </div>
                    <div class="form-group">
                        <label for="disponivel">Disponibilidade</label>
                        <select class="form-control" id="disponivel" name="disponivel" required>
                            <?php $c = $editar->getDisponivel(); ?>
                            <option value="<?php echo $c; ?>"><?php echo ($c == 0) ? "Indisponível" : "Disponível"; ?></option>
                            <option value="<?php echo ($c == 0) ? "1" : "0"; ?>"><?php echo ($c != 0) ? "Indisponível" : "Disponível"; ?></option>
                        </select>
                        <div class="invalid-feedback">Por favor, selecione a disponibilidade do produto.</div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($editar->getId()); ?>">
                    <button type="submit" class="btn btn-success" name="submit"><i class="fas fa-check"></i> Editar</button>
                    <a href="../view/index.php" class="btn btn-secondary ml-2"><i class="fas fa-arrow-left"></i> Voltar</a>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>
</html>