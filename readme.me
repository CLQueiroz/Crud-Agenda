<?php
session_start();
include_once 'conexao.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>CRUD - 01</title>
</head>

<body>
    <div class="alert alert-primary" role="alert">
        Sistema em funcionamento
    </div>
    <div class="container">
        <h1 class="font-italic" style="color:blueviolet">Crud 01 PHP Agenda </h1>
        <form action="processa.php" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome <i class="fas fa-users"></i></label>
                    <input class="form-control form-control-sm" style="width:200px;" type="text" name="nome" placeholder="Digite o nome do contato">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone <i class="fas fa-phone"></i> </label>
                    <input class="form-control form-control-sm" style="width:200px;" type="number" name="telefone" placeholder="Digite o telefone">
                </div>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Inserir novo contato">
            </div>
        </form>
        <?php if (isset($_SESSION['enviado'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['enviado'];
                unset($_SESSION['enviado']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['excluido'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['excluido'];
                unset($_SESSION['excluido']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['atualizado'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['atualizado'];
                unset($_SESSION['atualizado']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['camponull'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['camponull'];
                unset($_SESSION['camponull']);
                ?>
            </div>
        <?php } ?>
        <table class="table table-hover table-sm">
            <thead class="table-primary">
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </thead>
            <tbody>
                <?php while ($item = mysqli_fetch_array($consulta_contatos)) {
                    echo "<tr><td>" . $item['ID_CONTATO'] . "</td>";
                    echo "<td>" . $item['NOME_CONTATO'] . "</td>";
                    echo "<td>" . $item['TELEFONE_CONTATO'] . "</td>";
                    ?>
                    <td>
                        <a href="" data-toggle="modal" data-target="#editarContato" data-whatever="<?php echo $item['ID_CONTATO'] ?>" data-whatevernome="<?php echo $item['NOME_CONTATO'] ?>" data-whatevertelefone="<?php echo $item['TELEFONE_CONTATO'] ?>" title="Editar"><i class="fas fa-edit"></i></a>
                        <a href="javascript: if(confirm('Tem certeza que deseja deletar o contato <?php echo $item['NOME_CONTATO'] ?> ? '))location.href='deleta_contato.php?id_contato=<?php echo $item['ID_CONTATO']; ?>';" title="Deletar"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal Editar -->
    <div class="modal fade" id="editarContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contatos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edita_contato.php" method="post">
                        <div class="form-group">
                            <input name="id_contato" type="hidden" id="id_contato">
                            <label for="recipient-name" class="col-form-label">Nome Contato:</label>
                            <input name="nome_contato" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Telefone Contato:</label>
                            <input name="telefone_contato" type="text" class="form-control" id="telefoneContato">
                        </div>
                        <button id="cadastrar" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="cadastrarCurso" type="button" class="btn btn-success">Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script>
        $('#editarContato').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('whatever')
            var recipientNome = button.data('whatevernome')
            var recipientTelefone = button.data('whatevertelefone')

            var modal = $(this)
            modal.find('.modal-title').text('Alterar Contato ' + "(" + recipientNome + ")")
            modal.find('#id_contato').val(recipient)
            modal.find('#recipient-name').val(recipientNome)
            modal.find('#telefoneContato').val(recipientTelefone)
        })
    </script>

</body>

</html>