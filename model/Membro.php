<?php

require 'config.php';

/**
* Class Membro
*/
class Membro {
    /**
    * @var array
    */

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

	private $pdo;

	public function __construct() {
		try {
			$this->pdo = new PDO("mysql:dbname=".DB_NAME.";dbhost=".DB_HOST, "root", "");
		} catch (PDOException $e) {
			echo "Erro ao se conectar: ".$e->getMessage();
		}
	}

	/**
	 * @return array
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @param array $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

    /**
   * @return mixed
   */
	public function getDataDeNascimento() {
		return $this->dataDeNascimento;
	}

	/**
	 * @param mixed $dataDeNascimento
	 */
	public function setDataDeNascimento($dataDeNascimento) {
		$this->dataDeNascimento = $dataDeNascimento;
	}

	/**
	 * @return mixed
	 */
	public function getDataDeCriacaoDoMembro() {
		return $this->dataDeCriacaoDoMembro;
	}

	/**
	 * @param mixed $dataDeCriacaoDoMembro
	 */
	public function setDataDeCriacaoDoMembro($dataDeCriacaoDoMembro) {
		$this->dataDeCriacaoDoMembro = $dataDeCriacaoDoMembro;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}

	/**
	 * @param mixed $endereco
	 */
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}

    /**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}

	/**
	 * @param mixed $endereco
	 */
	public function setEstado($estado) {
		$this->estado = $estado;
	}

	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}

	/**
	 * @param mixed $cidade
	 */
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	/**
	 * @return mixed
	 */
	public function getBairro() {
		return $this->bairro;
	}

	/**
	 * @param mixed $bairro
	 */
	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * @param mixed $telefone
	 */
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	/**
	 * @return mixed
	 */
	public function getCelular() {
		return $this->celular;
	}

	/**
	 * @param mixed $celular
	 */
	public function setCelular($celular) {
		$this->celular = $celular;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return mixed
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * @param mixed $facebook
	 */
	public function setFacebook($facebook) {
		$this->facebook = $facebook;
	}

	/**
	 * @return mixed
	 */
	public function getEstadoCivil() {
		return $this->estadoCivil;
	}

	/**
	 * @param mixed $estadoCivil
	 */
	public function setEstadoCivil($estadoCivil) {
		$this->estadoCivil = $estadoCivil;
	}

	/**
	 * @return mixed
	 */
	public function getBatizado() {
		return $this->batizado;
	}

	/**
	 * @param mixed $batizado
	 */
	public function setBatizado($batizado) {
		$this->batizado = $batizado;
	}

    public function insert() {
        $sql = "INSERT INTO membros SET
            nome = ?,
            data_de_nascimento = ?,
            endereco = ?,
            bairro = ?,
            cidade = ?,
            estado = ?,
            telefone = ?,
            celular = ?,
            email = ?,
            facebook = ?,
            estado_civil = ?,
            batizado = ?,
            data_de_criacao_do_membro = ?
        ";

        $sql = $this->pdo->prepare($sql);

        $sql->execute(array(
            $this->nome,
            $this->dataDeNascimento,
            $this->endereco,
            $this->bairro,
            $this->cidade,
            $this->estado,
            $this->telefone,
            $this->celular,
            $this->email,
            $this->facebook,
            $this->estadoCivil,
            $this->batizado,
            $this->dataDeCriacaoDoMembro
        ));
    }

}
