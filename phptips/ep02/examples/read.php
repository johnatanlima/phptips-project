<?php

namespace ep02\examples;

require __DIR__."/../vendor/autoload.php";

use ep02\source\Models\Ator;


/*
use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if($error){
    echo $error->getMessage();
    die();
}

$query = $conn->query("select * from ator"); //Retorna um obj PDO com um sql 'qualquer'

var_dump($query->fetchAll); //O método fetchall irá CONTER/MOSTRAR todos os dados que vieram pelo objPDO. 
 
    --------------------------- TUDO ACIMA IRÁ RETORNAR OS DADOS E CONSEGUIR FAZER O ACESSO
    --------------------------- AO DATABASE. PORÉM, SERÁ FEITO UMA ABSTRAÇÃO PARA MELHORAR ISTO. 
*/

$ator = new Ator();

$list = $ator->find()->fetch(true);

var_dump($users);



