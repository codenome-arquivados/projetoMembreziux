<?php

    class Banco {

        private $pdo;
        private $numRows;
        private $array;

        function __construct($host, $dbname, $dbuser, $dbpass) {
            try {
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
            } catch (PDOException $e) {
                echo "Falha aose conectar com o banco de dados: ".$e->getMessage();
            }
        }

        public function query($sql) {
            $query = $this->pdo->query($sql);
            $this->numRows = $query->rowCount();
            $this->array = $query->fetchAll();
        }

        public function result() {
            return $this->array;
        }

        public function numRows() {
            return $this->numRows;
        }

        public function insert($table, $data) {
            if (!empty($table) && (is_array($data) && count($data) > 0)) {
                $sql = "INSERT INTO ".$table." SET";
                $dados = array();
                foreach ($data as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }
                $sql = $sql.implode(", ", $dados);
                $this->pdo->query($sql);
            }
            echo "Usaário inserido com sucesso";
        }

        public function update($table, $data, $where = array(), $where_cond = "AND") {

            if (!empty($table) && (is_array($data) && count($data) > 0) && is_array($data)) {
                $sql = "UPDATE ".$table." SET ";
                $dados = array();
                foreach ($data as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }

                $sql = $sql.implode(", ", $dados);

                if (count($where) > 0) {
                    $dados = array();
                    foreach ($where as $chave => $valor) {
                        $dados[] = $chave." = '".addslashes($valor)."'";
                    }

                    $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
                }
                $this->pod->query($sql);
            }
        }

        public function delete($table, $where, $where_cond = "AND") {
            if (!empty($table) && (is_array($where) && count($where) > 0)) {

                $sql = "DELETE FROM ".$table;

                if (count($where) > 0) {
                    $dados = array();
                    foreach ($where as $chave => $valor) {
                        $dados[] = $chave." = '".addslashes($valor)."'";
                    }
                    $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
                }

                $this->pdo->query($sql);

            }
        }

    }

?>
