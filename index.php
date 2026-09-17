<?php

$nome = "Emilly";
$curso = "Engenharia de Software";
$tarefa = "Estudar PHP";

echo"Olá, $nome!";
echo"<br>";
echo"Curso: $curso";
echo"<br>";


if ($tarefa != "") {
    echo "Tarefa de hoje: $tarefa";
} else {
    echo "Você não tem nenhuma tarefa.";
}

