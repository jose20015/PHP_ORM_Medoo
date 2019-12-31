<?php
require 'vendor/autoload.php';

use Medoo\Medoo;

$database = new Medoo([
	'database_type' => 'mysql',
    'database_name' => 'pro_sangue',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);

//inserção em na tabela
$database->insert('profissao',
[
	'profissao' => 'Gerente'
]);

//select na tablela profissao, e retornando os dados do campo profissao
$data = $database->select('profissao',['profissao']);

var_dump($data);