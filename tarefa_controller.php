<?php
require_once "app_lista_tarefas/tarefa.model.php";
require_once "app_lista_tarefas/tarefa.service.php";
require_once "app_lista_tarefas/conexao.php";

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();

header('location: nova_tarefa.php?inclusao=1');

?>