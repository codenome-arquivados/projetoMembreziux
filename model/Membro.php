<?php

    require_once 'Banco.php';
    require_once 'config.php';

    class Membro {

        private $nome;
        private $dataDeNascimento;
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

        public function adicionaMembro() {
            $banco = new Banco(DB_HOST, DB_NAME, DB_USER, DB_PASS);
            $banco->insert('membros', $array = array(
                'nome'               => $this->getNome(),
                'data_de_nascimento' => $this->getDataDeNascimento(),
                'endereco'           => $this->getEndereco(),
                'bairro'             => $this->getBairro(),
                'cidade'             => $this->getCidade(),
                'telefone'           => $this->getTelefone(),
                'celular'            => $this->getCelular(),
                'email'              => $this->getEmail(),
                'facebook'           => $this->getFacebook(),
                'estado_civil'       => $this->getEstadoCivil(),
                'batizado'           => $this->getBatizado()
            ));
        }

    }


?>
