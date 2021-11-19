<?php

require("./Connection.php");
require("./model/ModelPessoa.php");

//conexão criada
$conn = new Connection();

//objeto de model criado
$modelPessoa = new ModelPessoa($conn->returnConnection());

$dados = $modelPessoa->findAll();

echo '<pre>';
var_dump($dados);
echo '</pre>';

?>