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

                    <form action="" method="POST">
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
                            <label class="label">Link da imagem</label>
                            <div class="control">
                                <input name="link" class="input" type="text" placeholder="Insira um link." />
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                            <button type="submit" class="button is-link is-medium ">Publicar</button>
                            <a  class="button is-danger is-medium" href="painel.php">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>