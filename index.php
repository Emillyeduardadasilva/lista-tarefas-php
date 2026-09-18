<?php

session_start(); #inicia a sessão para permitir armazenar dados do usauario durante o uso da pagina

$nome = "Emilly";

if (!isset($_SESSION["tarefas"])) { #Verifica se já existe uma lista de tarefas na sessão
    $_SESSION["tarefas"] = [
        "Estudar PHP",
        "Fazer atividade",
        "Praticar Git",
        "Estudar banco de dados" 
    ];
}



if (isset($_POST["tarefa"]) && trim($_POST["tarefa"]) != ""){   #---- aqui usamos o trim para ele verificar de algo foi escrito no formulario para ser adicionada quando clicado o botão
    $_SESSION["tarefas"][] =  $_POST["tarefa"];    #---aqui o php cria tarefa e depois adiciona ela no array  

    header("Location: index.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="pt-BR">

</head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas </title>
</head>

<body> 
    <h1>Minha Lista de tarefas</h1>

    <form method="POST">  <!--aqui colocamos que os dados serão enviados pelo medo POST-->
        <input type="text" name="tarefa" placeholder="Digite uma tarefa">  <!--aqui criamos um formulario e uma linha para inserir um texto ou uma informação, e colocamos uma mensgame nele dizendo para a pessoa digitar, tambem colocamos que do dado é tarefa-->
        <button type= "submit">Adicionar</button>  <!--aqui adicionamos um botão-->
    </form>

    <p> Olá, <?php echo $nome; ?>!</p>

    <ul>
        <?php foreach ($_SESSION["tarefas"] as $tarefa) { ?>
            <li><?php echo $tarefa; ?></li>
        <?php } ?>
    </ul>

</body>

</html>
