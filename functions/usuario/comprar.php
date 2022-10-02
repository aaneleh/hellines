<?php

    include '../../bd.php';
    $bd = connect();
    session_start();

    if( !empty($_GET['id'])  and !empty($_SESSION['id']) ) {
        
        try {
            //pegar numero atual de passageiros e o maximo
            $query = "SELECT atual_passageiros, total_passageiros FROM voos WHERE id=".$_GET['id'];
            $res = $bd->prepare($query);
            $res->execute();
            $row= $res->fetch();
            $atual = $row['atual_passageiros'];
            $total = $row['total_passageiros'];
            //se atual < maximo
            if($atual < $total) {
                $atual++;
                //update voo com tal id para atual + 1
                $query = 'UPDATE voos SET atual_passageiros='.$atual.' WHERE id='.$_GET['id'];
                $res = $bd->prepare($query);
                $res->execute();
                //insere em passageiros ambos ids
                $query = 'INSERT INTO passageiros (id_voo, id_usuario, poltrona) VALUES ('.$_GET['id'].','.$_SESSION['id'].','.$atual.')';
                $res = $bd->prepare($query);
                $res->execute();
            }
        } catch (PDOException $er){
            echo 'Erro: '.$er->getMessage();
        }
    } 

    header('Location: ../../index.php?pg=usuario');
    exit();

?>