<div class="well well-sm">
    <?php
    include('conexao.php');

    if (isset($_GET['posts'])) {
        $pg = (int)$_GET['posts'];
    } else {
        $pg = 1;
    }
    $maximo = 1;
    $inicio = ($pg * $maximo) - $maximo;
    $seleciona = mysqli_query($conexao, "SELECT * FROM posts ORDER BY idposts DESC LIMIT $inicio, $maximo ");
    $contador = mysqli_num_rows($seleciona);


    if ($contador <= 0) {
        echo "<code> Nenhuma postagem cadastrada no banco de dados!</code>";
    } else {
        while ($row = mysqli_fetch_array($seleciona)) {
            $id = $row['idposts'];

            $titulo = $row['titulo'];
            $descricao = $row['descricao'];
            $img_url = $row['img_url'];
            $data_post = $row['data_post'];
            $id_autor = $row['id_autor'];

            $sql = "SELECT * FROM usuario WHERE usuario_id = '{$id_autor}' ";
            $query = mysqli_query($conexao, $sql);
            $linha = mysqli_fetch_assoc($query);
        }
    }
    ?>
    <div class="columns is-centered">
        <div class="box">
            <div class="field">
                <div class="control">
                    <p><a href="" class="titulo"><?php echo $titulo; ?></a></p>

                    <?php if ($descricao != null) { ?>
                        <p class="descricao"> <?php echo $descricao; ?> </p> <?php } ?>

                    <?php if ($img_url != null) { ?>
                        <p><img src="<?php echo $img_url; ?>" class="foto"> </p> <?php } ?>

                    <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Postado em: <?php echo $data_post; ?></br>
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Postado por: <?php echo $linha['nome']; ?></p>
                </div>
            </div>
        </div>
    </div>               
</div>
<nav align ="center"></nav>