<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Linha do Tempo</title>
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/publicar.css" />
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="box">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="field">
                                <label class="label">Título</label>
                                <div class="control">
                                    <input name="titulo" class="input" type="text" placeholder="Insira um titulo." />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Descrição</label>
                                <div class="control">
                                    <textarea class="textarea has-fixed-size" name="descricao" class="descricao" placeholder="Digite a decrisção do post." maxlength="245"></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Adicione uma imagem</label>
                                <div class="control">
                                    <input type="file" name="image" id="image" class="input" />
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-link is-medium ">Publicar</button>
                                    <input type="hidden" name="enviar" value="send" />

                                    <a class="button is-danger is-medium" href="painel.php">Cancelar</a>

                                </div>
                            </div>
                        </form>
                        <?php
                        session_start();
                        include('conexao.php');

                        if (isset($_POST['enviar']) && $_POST['enviar'] == "send") {
                            $titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
                            $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
                            date_default_timezone_set('America/Sao_Paulo');
                            $data = date("d/m/y H:i:s");
                            $autor = $_SESSION['nome'];
                            $uploaddir = 'imagens/uploads/';
                            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                            $imagename = $uploaddir . basename($_FILES['image']['name']);

                            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                                echo "Imagem enviada com sucesso";
                                $idautor = "SELECT usuario_id FROM usuario WHERE nome = '{$autor}'";
                                $query = "INSERT INTO posts (titulo, descricao, img_url, data_post, id_autor) VALUES ('$titulo', '$descricao', '$imagename', '$data', '$idautor')";
                            }
                        } else {
                            echo "Erro ao enviar a imagem";
                        }

                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>