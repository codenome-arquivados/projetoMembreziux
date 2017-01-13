<?php

    require_once 'model/Membro.php';

    // $nome = $_POST['nome'];
    // $sobrenome = $_POST['sobrenome'];
    // $dataDeNascimento = $_POST['dataDeNascimento'];
    // $estado_civil = $_POST['dataDeNascimento'];
    // $batizado = $_POST['batizado'];
    // $endereco = $_POST['endereco'];
    // $bairro = $_POST['barirro'];
    // $estado = $_POST['estado'];
    // $cidade = $_POST['cidade'];
    // $telefone = $_POST['telefone'];
    // $celular = $_POST['celular'];
    // $email = $_POST['email'];
    // $facebook = $_POST['facebook'];


    $nome = 'Thiago';
    $sobrenome = 'Cunha';
    $dataDeNascimento = '12/18/1999';
    $estado_civil = 'CASADO';
    $batizado = 'true';
    $endereco = 'Rua das Oliveiras';
    $bairro = 'Unamar';
    $estado = 'Rio de Janeiro';
    $cidade = 'Cabo Frio';
    $telefone = '2227727272';
    $celular = '22999999999';
    $email = 'thiago@gmail.com';
    $facebook = 'thiago@live.com';


    $membro = new Membro();
    $membro->setNome($nome." ".$sobrenome);
    $membro->setDataDeNascimento($dataDeNascimento);
    $membro->setEstadoCivil($estado_civil);
    $membro->setBatizado($batizado);
    $membro->setEndereco($endereco);
    $membro->setBairro($bairro);
    $membro->setEstado($estado);
    $membro->setCidade($cidade);
    $membro->setTelefone($telefone);
    $membro->setCelular($celular);
    $membro->setEmail($email);
    $membro->setFacebook($facebook);
    $membro->adicionaMembro();


?>
