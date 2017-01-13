<?php

    require 'config.php';

    class Membro {

        private $nome;
        private $dataDeNascimento;
        private $dataDeCriacaoDoMembro;
        private $endereco;
        private $estado;
        private $cidade;
        private $bairro;
        private $telefone;
        private $celular;
        private $email;
        private $facebook;
        private $estadoCivil;
        private $batizado;
        private $dataBase;

        public function __construct() {
            try {
                $this->dataBase = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_USER, DB_PASS);
            } catch (PDOException $e) {
                echo "Erro ao conectar com o Banco de Dados: ".$e->getMessage();
            }

        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getDataDeNascimento() {
            return $this->dataDeNascimento;
        }

        public function setDataDeNascimento($dataDeNascimento) {
            $this->dataDeNascimento = $dataDeNascimento;
        }

        public function getDataDeCriacaoDoMembro() {
            return $this->dataDeCriacaoDoMembro;
        }

        public function setDataDeCriacaoDoMembro($dataDeCriacaoDoMembro) {
            $this->dataDeCriacaoDoMembro = $dataDeCriacaoDoMembro;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function getBairro() {
            return $this->bairro;
        }

        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getCelular() {
            return $this->celular;
        }

        public function setCelular($celular) {
            $this->celular = $celular;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getFacebook() {
            return $this->facebook;
        }

        public function setFacebook($facebook) {
            $this->facebook = $facebook;
        }

        public function getEstadoCivil() {
            return $this->estadoCivil;
        }

        public function setEstadoCivil($estadoCivil) {
            $this->estadoCivil = $estadoCivil;
        }

        public function getBatizado() {
            return $this->batizado;
        }

        public function setBatizado($batizado) {
            $this->batizado = $batizado;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function insert() {
            $query = "INSERT INTO membros SET
                nome = :nome,
                data_de_nascimento = :dataDeNascimento,
                data_de_criacao_do_membro = :dataDeCriacaoDoMembro;
                endereco = :endereco,
                bairro = :bairro,
                cidade = :cidade,
                estado = :estado,
                telefone = :telefone,
                celular = :celular;
                email = :email;
                facebook = :facebook;
                estado_civil = :estadoCivil;
                batizado = :batizado"
            ;

            $sql = $this->dataBase->prepare($query);
            $sql->bindParam(":nome", $this->nome);
            $sql->bindParam(":dataDeNascimento", $this->dataDeNascimento);
            $sql->bindParam(":dataDeCriacaoDoMembro", $this->dataDeCriacaoDoMembro);
            $sql->bindParam(":endereco", $this->endereco);
            $sql->bindParam(":bairro", $this->bairro);
            $sql->bindParam(":cidade", $this->cidade);
            $sql->bindParam(":estado", $this->estado);
            $sql->bindParam(":telefone", $this->telefone);
            $sql->bindParam(":celular", $this->celular);
            $sql->bindParam(":email", $this->email);
            $sql->bindParam(":facebook", $this->facebook);
            $sql->bindParam(":estadoCivil", $this->estadoCivil);
            $sql->bindParam(":batizado", $this->batizado);

        }

    }


?>
