<?php
require_once('ClasseCifraCesar.php');
$string = $_POST['string'];
$chave = $_POST['chave'];

$class = new CifraCesar();
$criptografia = $class->criptografa($string, $chave);
// $criptografia = ['string' => $criptografia];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($criptografia);
?>
