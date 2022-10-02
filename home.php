<?php
    if(!isset($_SESSION['id']) or empty($_SESSION['id'])){
        header('Location: index.php');
        exit;
    } 
?>

<main>
    <section class="hero" id="hero">
        <div class="conteudo">
            <h1>Faça a viagem dos seus sonhos</h1>
            <p>Confira nossas ofertas abaixo ou clique no botão para selecionar seu destino e boa viagem!</p>
            <h5 class="botao azul">
                <a href="#consultar">
                    Consultar agora
                </a>
            </h5>
        </div>
    </section>

    <div class="divisor"></div>

    <section class="ofertas" id="ofertas">
        <h2>Ofertas</h2>

        <div class="conteudo">

            <div class="card">
                <div>
                    <p>
                        <i class="bi bi-calendar-event"></i>
                        1/10 9:45
                    </p>
                    <p>
                        <i class="bi bi-people-fill"></i>
                        15/30
                    </p>
                </div>
                <div>
                    <p>Origem</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6.05 42v-3h36v3ZM9.2 31.6l-5.15-8.75 2.15-.4 3.5 3.1L21 22.5 12.45 8.15l2.9-.85L29.6 20.15l10.8-2.9q1.35-.4 2.45.475t1.1 2.325q0 .95-.575 1.7t-1.475 1Z"/></svg>
                    <p>Destino</p>
                </div>
                <div>
                    <a href="/acoes/comprar.php" class="botao azul">
                        Comprar
                        <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>
            <div class="card">
                <div>
                    <p>
                        <i class="bi bi-calendar-event"></i>
                        1/10 9:45
                    </p>
                    <p>
                        <i class="bi bi-people-fill"></i>
                        15/30
                    </p>
                </div>
                <div>
                    <p>Origem</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6.05 42v-3h36v3ZM9.2 31.6l-5.15-8.75 2.15-.4 3.5 3.1L21 22.5 12.45 8.15l2.9-.85L29.6 20.15l10.8-2.9q1.35-.4 2.45.475t1.1 2.325q0 .95-.575 1.7t-1.475 1Z"/></svg>
                    <p>Destino</p>
                </div>
                <div>
                    <a href="/acoes/comprar.php" class="botao azul">
                        Comprar
                        <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="consultar" id="consultar">
        <h2>Consultar</h2>
        <div class="conteudo">
            <form action="" method="get">
                <div>
                    <p>Origem</p>
                    <input class="input branco" list="origens" name="origem">

                    <datalist id="origens">
                        <option value="Porto Alegre">
                        <option value="Rio de Janeiro">
                        <option value="São Paulo">
                        <option value="Salvador">
                    </datalist>
                </div>
                <div>
                    <p>Destino</p>
                    <input class="input branco" list="destinos" name="destino">

                    <datalist id="destinos">
                        <option value="Porto Alegre">
                        <option value="Rio de Janeiro">
                        <option value="São Paulo">
                        <option value="Salvador">
                    </datalist>
                </div>
                <button class="botao azul"> <!-- adicionar funcao com js para enviar o form -->
                    Buscar
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </section>

    <section class="todas" id="todas">
        <h2>Todas as passagens</h2>
        <div class="conteudo">
            <table>
                <tr>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Data e Hora</th>
                    <th>Duração</th>
                </tr>
                <tr>
                    <td>SAP</td>
                    <td>POA</td>
                    <td>10/10 12:00</td>
                    <td>1h</td>
                    <td class="botao preto"><i class="bi bi-cart-fill"></i></td>
                </tr>
                <tr>
                    <td>POA</td>
                    <td>SAP</td>
                    <td>5/10 13:00</td>
                    <td>1h</td>
                    <td class="botao preto"><i class="bi bi-cart-fill"></i></td>
                </tr>
            </table>
        </div>
    </section>
</main>