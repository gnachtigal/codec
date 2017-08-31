<?php
require_once('ClasseCifraCesar.php');
$string = $_POST['string'];
$chave = $_POST['chave'];

$class = new CifraCesar();
$decriptografa = $class->decriptografa($string, $chave);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($decriptografa);
?>
