<?php
require_once "app_lista_tarefas/tarefa.model.php";
require_once "app_lista_tarefas/tarefa.service.php";
require_once "app_lista_tarefas/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao; 

if ($_GET['acao'] == 'inserir') {
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

    header('location: nova_tarefa.php?inclusao=1');
} else if($acao == 'recuperar') {
    $tarefa = new Tarefa();
    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->recuperar();
}

?>