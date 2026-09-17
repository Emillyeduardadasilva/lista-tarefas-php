<?php

$nome = "Emilly";
$tarefas = [
    "Estudar PHP",
    "Fazer atividade",
    "Praticar Git",
    "Estudar banco de dados" 
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

</head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas </title>
</head>

<body> 
    <h1>Minha Lista de tarefas</h1>

    <p> Olá, <?php echo $nome; ?>!</p>

    <ul>
        <?php foreach ($tarefas as $tarefa) { ?>
            <li><?php echo $tarefa; ?></li>
        <?php } ?>
     <ul>
</body>
</html>
