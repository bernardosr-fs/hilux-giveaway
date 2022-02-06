<!DOCTYPE html>
<html>

<head>
    <link href="./styles/styles.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>PARTICIPE!</title>
</head>

<body>
    <div class="page">
        <div class="header">
            <h3> Cadastrar </h3>
        </div>

        <div class="content">
            <div class="form">
                <form class="formulario" name="data" action="../../php/exec_cadastrar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-question">
                        <label class="label-form"> <span> Nome: </span>
                            <input type="text" name="nome" class="input" />
                        </label>
                    </div>
                    <div class="form-question">
                        <label class="label-form"> <span> Telefone: </span>
                            <input type="text" name="telefone" class="input" />
                        </label>
                    </div>
                    <button class="send-button">Enviar</button>
                </form>
            </div>

            <?php
            if (isset($_GET['retorno'])) {
                $msg = $_GET['retorno'];
                echo "<br />";
                echo "<div class='mensagem-retorno' size='5' color='black'>";
                echo $msg;
                $msg = "";
                echo "</div>";
            }
            ?>
        </div>
        <div class="footer">
            <div class="back-menu-button">
                <h3><a href="../menu/menu.php" class="link">
                        < Voltar ao Início</a>
                </h3>
            </div>
        </div>
    </div>
</body>

</html>