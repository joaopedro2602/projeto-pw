<?php 

require_once("Pessoa.class.php");

$pessoa = new Pessoa();
$pessoa -> setNome("Pedro");
$pessoa -> setEndereco("Av Aguia de haia");
$pessoa -> setBairro("Jd dao nicoulau");
$pessoa -> setCep("08542-231");
$pessoa -> setCidade("Sao Paulo");
$pessoa -> setEstado("SP");


?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <table style="border: 1px solid;">
            <tr>
                <td style="border: 1px solid; background-color: #cccccc"><?php echo $pessoa->getNome();?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #f3f3f3"><?php echo $pessoa->getEndereco();?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #cccccc"><?php echo $pessoa->getBairro();?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #f3f3f3"><?php echo $pessoa->getCep();?></td>
            </tr> 
            <tr>
                <td style="border: 1px solid; background-color: #cccccc"><?php echo $pessoa->getCidade();?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: #f3f3f3"><?php echo $pessoa->getEstado();?></td>
            </tr>         