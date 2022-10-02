<?php
    if(!isset($_SESSION['id']) or empty($_SESSION['id'])){
        header('Location: index.php');
        exit;
    } 
?>

<main>
    <section class="todas" id="todas">
        <h2>Todos os voos</h2>
        <div class="conteudo">
            <table>
                <tr>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Data e Hora</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <tr>
                    <td>SAP</td>
                    <td>POA</td>
                    <td>10/10 12:00</td>
                    <td class="botao preto">
                        <a href="">
                            <i class="bi bi-three-dots"></i>
                        </a>
                    </td>
                    <td class="botao preto">
                        <a href="">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>POA</td>
                    <td>SAP</td>
                    <td>5/10 13:00</td>
                    <td class="botao preto">
                        <a href="">
                            <i class="bi bi-three-dots"></i>
                        </a>
                    </td>
                    <td class="botao preto">
                        <a href="">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</main>
