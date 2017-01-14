<?php

    require_once 'model/Membro.php';

    function estadoCivil($estadoCivil) {
        switch($estadoCivil) {
            case 1:
                return "CASADO";
            case 2:
                return "SOLTEIRO";
            case 3:
                return "DIVORCIADO";
            case 4:
                return "UNIAO_ESTAVEL";
            case 5:
                return "VIUVO";
        }
    }

    function dataConfig($string) {
        $string = explode("/", $string);
        return $string[2]."-".$string[0]."-".$string[1];
    }


    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataDeNascimento = dataConfig($_POST['dataDeNascimento']);
    $estado_civil = $_POST['estadoCivil'];
    $batizado = $_POST['batizado'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];

    //
    // $nome = "Thiago";
    // $sobrenome = "Cunha";
    // $dataDeNascimento = "1999/12/18";
    // $dataDeCriacaoDoMembro = date("Y/m/d");
    // $estado_civil = "SOLTEIRO";
    // $batizado = 'false';
    // $endereco = "Rua das Oliveiras";
    // $bairro = "Unamar";
    // $cidade = "Cabo Frio";
    // $telefone = "2227727272";
    // $celular = "22999999999";
    // $email = "thiago@gmail.com";
    // $facebook = "thiago@live.com";


    $membro = new Membro();
    $membro->setNome($nome." ".$sobrenome);
    $membro->setDataDeNascimento($dataDeNascimento);
    $membro->setDataDeCriacaoDoMembro(date("Y/m/d"));
    $membro->setEstadoCivil($estado_civil);
    $membro->setBatizado($batizado);
    $membro->setEndereco($endereco);
    $membro->setBairro($bairro);
    $membro->setCidade($cidade);
    $membro->setEstado($estado);
    $membro->setTelefone($telefone);
    $membro->setCelular($celular);
    $membro->setEmail($email);
    $membro->setFacebook($facebook);

    $membro->insert();


    print_r($membro);


?>
