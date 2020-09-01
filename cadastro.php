<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Pagina de Cadastro</h3>
                   <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                        <div class="notification is-success">
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                        <div class="notification is-info">
                            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>

                    <div class="box">
                        <form action="cadastrar.php" method="POST">

                            <div class="field">
                                <div class="control">
                                    <label for="nome" class="is-large">Digite seu nome</label>
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label for="email">Digite seu email</label>
                                    <input name="email" type="email" class="input is-large" placeholder="Email">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label for="usuario"> Digite seu usuario de login</label>
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label for="senha"></label>Digite sua senha de login</label>
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-link is-large is-fullwidth"><strong>Cadastrar</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>