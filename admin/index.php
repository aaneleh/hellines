<?php
    include '../bd.php';
    $bd = connect();
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../scripts/script.js" defer></script>
    <title>Hellines</title>
</head>
<body> 
    

<header class="header">
    <div class="conteudo">
        <div class="logo">
            <h4>
                <a href="../">
                    <i class="bi bi-airplane-fill"></i>
                    Hellines
                </a>
            </h4>
        </div>
        <div class="links_desktop">
            <p>
                <a href="#ofertas">Novo voo</a>
            </p>
            <p>
                <a href="#consultar">Novo admin</a>
            </p>
        </div>
        <div class="conta">
            <p>
                <a href="../functions/usuario/sair.php">Sair</a>
            </p>
            <p class="botao branco">
                <a href="">
                    <?php
                        $query = "SELECT nome FROM usuarios WHERE id = ". $_SESSION['id'];
                        $res = $bd->prepare($query);
                        $res->execute();
                        $row = $res->fetch();
                        echo $row['nome'];
                    ?>
                    <i class="bi bi-person-circle"></i>
                </a>
            </p>
        </div>
    </div>
</header>

    <?php
        if(isset($_SESSION['id']) and !empty($_SESSION['id'])){

            $query = "SELECT admin FROM usuarios WHERE id = ". $_SESSION['id'];
            $res = $bd->prepare($query);
            $res->execute();
            $row = $res->fetch();

            if($row['admin'] == 1) {
                require_once('home.php');
            } else {
                header('Location: ../index.php');
                exit();
            }
        } else {
            header('Location: ../index.php');
            exit();
        }
    ?>


<footer class="rodape">
    <div class="conteudo">
        <div>
            <p class="logo">
                <i class="bi bi-airplane-fill"></i>
                Hellines
            </p>
            <p>
                <a href="twitter.com/">
                    <i class="bi bi-twitter"></i>
                    @hellines
                </a>
            </p>
            <p>
                <a href="instagram.com/">
                    <i class="bi bi-instagram"></i>
                    @hellines
                </a>
            </p>
        </div>

        <div>
            <p>
                <a href="#ofertas">Ofertas</a>
            </p>
            <p>
                <a href="#consultar">Consultar</a>
            </p>
            <p>
                <a href="#todas">Todas as Passagens</a>
            </p>
        </div>

        <div>
            <a  class="botao branco" href="admin/index.php">Administração</a>
        </div>
    </div>

    <p><i class="bi bi-c-circle-fill"></i> Copyright Helena Gonçalves, 2022</p>
</footer>

</body>
</html>