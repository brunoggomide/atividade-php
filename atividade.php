<?php

class Usuario{
    var $ola;
    var $nome;
    var $sobrenome;
    var $registrar;

    function setOla($oi) {
        $this->ola = $oi;
    }

    function ola() {
        return $this->ola;
    }


    function setRegistrar($r) {
        $this->registrar = $r;
    }

    function registrar() {
        return $this->registrar;
    }

    function email() {
        echo 'e-mail enviado';
    }

    function __construct($n, $s) {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    function setUsuario($name, $secondName) {
        $this->nome = $name;
        $this->sobrenome = $secondName;
    }

    function getUsuario() {
        echo $this->nome;
        echo $this->sobrenome;
    }
}

$usuario01 = New Usuario('Bruno ', 'Gomide');
$usuario01->setOla('Olá, ');   
echo $usuario01->ola();
echo $usuario01->getUsuario();
echo "\n";

$usuario02 = New Usuario('Johnny ', 'Walker');
$usuario02->setOla('Olá, '); 
echo $usuario02->ola();
echo $usuario02->getUsuario();
echo "\n";

$usuarioRambo = New Usuario('Sylvester ', 'Stalone');
$usuarioRambo->setOla('Olá, '); 
echo $usuarioRambo->ola();
echo $usuarioRambo->getUsuario();
echo "\n";

$usuarioJair = New Usuario('Jair ', '');
$usuarioJair->setOla('Olá, '); 
$usuarioJair->setRegistrar('registrado '); 
echo $usuarioJair->ola();
echo $usuarioJair->registrar();
echo $usuarioJair->email();
?>