<?php
#session_start();

include('conexao.php');
include('bancoCurso.php');

$nomeCurso = $_GET['nomeCurso']; //método GET para pegar o que for escrito no momento
$professor = $_GET['professor'];
$sala = $_GET['sala'];
$horarioInicio = $_GET['horarioInicio'];
$horarioFim = $_GET['horarioFim'];

$query = "INSERT into cursos (nomeCurso, professor, sala, horarioInicio, horarioFim) VALUES ('$nomeCurso', '$professor', '$sala', '$horarioInicio', '$horarioFim')";

if (isset($_GET['nomeCurso']) === true) {
    mysqli_query($conexao, $query); //faz a conexao com o banco de dados e insere o conteúdo
};

if (mysqli_insert_id($conexao)) {
    header("Location: ../../detalhe.php");
};

mysqli_close($conexao); //fecha a conexao após inserção dos dados
