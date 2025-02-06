<?php

include_once "connection.php";


$nome_equipe = $_POST['nome_equipe'];
$nome_capitao = $_POST['nome_capitao'];
$email_capitao = $_POST['email_capitao'];
$whats_capitao = $_POST['whats_capitao'];
$nick_capitao = $_POST['nick_capitao'];
$discord_capitao = $_POST['discord_capitao'];
$nome1_integrante = $_POST['nome1_integrante'];
$nick1_integrante = $_POST['nick1_integrante'];
$discord1_integrante = $_POST['discord1_integrante'];
$nome2_integrante = $_POST['nome2_integrante'];
$nick2_integrante = $_POST['nick2_integrante'];
$discord2_integrante = $_POST['discord2_integrante'];
$nome3_integrante = $_POST['nome3_integrante'];
$nick3_integrante = $_POST['nick3_integrante'];
$discord3_integrante = $_POST['discord3_integrante'];
$nome4_integrante = $_POST['nome4_integrante'];
$nick4_integrante = $_POST['nick4_integrante'];
$discord4_integrante = $_POST['discord4_integrante'];
$nome5_integrante = $_POST['nome5_integrante'];
$nick5_integrante = $_POST['nick5_integrante'];
$discord5_integrante = $_POST['discord5_integrante'];
$nome1_reserva = $_POST['nome1_reserva'];
$nick1_reserva = $_POST['nick1_reserva'];
$discord1_reserva = $_POST['discord1_reserva'];
$status_pgto = 'PENDENTE';
$id_evento = $_POST['id_evento'];
$data_cadastro = date('Y-m-d H');

    $query_consulta_pgto = "SELECT * FROM inscricoes WHERE status_pgto = 'PAGO'";
    $result_consulta_pgto = mysqli_query($conn, $query_consulta_pgto);


    if (mysqli_num_rows($result_consulta_pgto) >= 16) {
         header('Location: tksinscricao.php?cadastro=erro1');
    } else {

        $result = "INSERT INTO inscricoes(nome_equipe,nome_capitao,email_capitao,whats_capitao,nick_capitao,discord_capitao,nome1_integrante,nick1_integrante,discord1_integrante,nome2_integrante,nick2_integrante,discord2_integrante,nome3_integrante,nick3_integrante,discord3_integrante,nome4_integrante,nick4_integrante,discord4_integrante,nome5_integrante,nick5_integrante,discord5_integrante,nome1_reserva,nick1_reserva,discord1_reserva,status_pgto, id_evento, data_inclusao) VALUES ('$nome_equipe', '$nome_capitao', '$email_capitao', '$whats_capitao', '$nick_capitao', '$discord_capitao', '$nome1_integrante', '$nick1_integrante', '$discord1_integrante', '$nome2_integrante', '$nick2_integrante', '$discord2_integrante', '$nome3_integrante','$nick3_integrante','$discord3_integrante','$nome4_integrante','$nick4_integrante','$discord4_integrante','$nome5_integrante','$nick5_integrante','$discord5_integrante','$nome1_reserva','$nick1_reserva','$discord1_reserva','$status_pgto', '$id_evento','$data_cadastro')";

        if (mysqli_query($conn, $result)) {
            mysqli_close($conn);
            header('Location: tksinscricao.php?cadastro=sucesso');
        } else {
            header('Location: tksinscricao.php?cadastro=erro2');
        };
    };


?>