<?php

require 'config.php';

/**
* Class Membro
*/
class Membro
{
    /**
    * @var array
    */
    private $fields = [
        'nome',
        'dataDeNascimento',
        'dataDeCriacaoDoMembro',
        'endereco',
        'estado',
        'cidade',
        'bairro',
        'telefone',
        'celular',
        'email',
        'facebook',
        'estadoCivil',
        'batizado',
        'dataBase'
    ];

    /**
    * @var array
    */
    private $values = [];

    /**
    * @var array
    */
    private $errors = [];

    /**
    * Membro constructor.
    */
    public function __construct() {
        try {
            $this->dataBase = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            echo "Erro ao conectar com o Banco de Dados: " . $e->getMessage();
        }
    }

    /**
    * @param $name
    * @return null
    */
    public function __get($name) {
        return isset($this->values[$name]) ? $this->values[$name] : null;
    }

    /**
    * @param $name
    * @param $value
    */
    public function __set($name, $value) {
        if (in_array($name, $this->fields)) {
            $this->values[$name] = $value;
        }
    }

    /**
    * @param $name
    * @param $arguments
    * @return mixed
    */
    function __call($name, $arguments) {
        $type = substr($name, 0, 3);
        switch ($type) {
            case 'set':
            if (isset($arguments[0])) {
                $field = lcfirst(substr($name, 3));
                /** @noinspection PhpVariableVariableInspection */
                $this->$field = $arguments[0];
            }
            break;
            case 'get':
            $field = lcfirst(substr($name, 3));
            /** @noinspection PhpVariableVariableInspection */
            return $this->$field;
            break;
        }
        return null;
    }

    /**
    * @return array
    */
    public function getErrors() {
        return $this->errors;
    }

    /**
    * @return null|string
    */
    public function insert() {
        $fields = [];
        foreach ($this->fields as $field) {
            $fields[] = "{$field} = :{$field}";
        }
        $sql = "INSERT INTO membros SET " . implode(', ', $fields);

        $statement = $this->dataBase->prepare($sql);

        $parameters = [];
        foreach ($this->fields as $field) {
            /** @noinspection PhpVariableVariableInspection */
            $value = $this->$field;
            $statement->bindValue(":{$field}", $value);
            $parameters[] = $value;
        }

        if ($statement->execute()) {
            return $this->dataBase->lastInsertId();
        }

        $this->errors[] = [
            'command' => $sql, 'parameters' => $parameters, 'error' => $statement->errorInfo()
        ];
        return null;
    }

}
