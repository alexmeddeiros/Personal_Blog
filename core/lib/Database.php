<?php

namespace core\lib;

use Exception;
use PDO;
use PDOException;

class Database
{
    private $conn;

    //===================================================
    private function connect()
    {
        // ligar à base de dados
        $this->conn = new PDO(
            'mysql:' . 'host=' . MYSQL_SERVER . ';' . 'dbname=' . MYSQL_DATABASE . ';' . 'charset=' . MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)
        );

        // debug
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //==================================================
    private function disconnect()
    {
        $this->connect = null;
    }

    //==================================================
    // SELECT
    public function select($sql, $params = null)
    {
        // verufuca se é uma instrulçao SELCT
        if (!preg_match("/^SELECT/i", $sql)) {
            throw new Exception("Base de dados - nao é uma instrução SELECT.");
        }

        //executa a pesquisa sql
        $this->connect();
        $res = null;

        //comunicar
        try {
            //comunicação com bd
            if (!empty($params)) {
                $exec = $this->conn->prepare($sql);
                $exec->execute($params);
                $res = $exec->fetchAll(PDO::FETCH_CLASS);
            } else {
                $exec = $this->conn->prepare($sql);
                $exec->execute();
                $res = $exec->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $e) {
            //caso return error
            return false;
        }

        //desligar
        $this->disconnect();

        //devolver sesultador obtidos
        return $res;
    }

    //==================================================
    // INSERT
    //===================================================
    public function insert($sql, $params = null)
    {
        // verufuca se é uma instrulçao INSERT
        if (!preg_match("/^INSERT/i", $sql)) {
            throw new Exception("Base de dados - nao é uma instrução INSERT.");
        }

        //executa a pesquisa sql
        $this->connect();

        //comunica
        try {
            //comunicação com bd
            if (!empty($params)) {
                $exec = $this->conn->prepare($sql);
                $exec->execute($params);
            } else {
                $exec = $this->conn->prepare($sql);
                $exec->execute();
            }
        } catch (PDOException $e) {
            //caso return error
            return false;
        }

        //desliga
        $this->disconnect();
    }

    //==================================================
    // UPDATE
    //==================================================
    public function update($sql, $params = null)
    {
        $sql = trim($sql);

        // verifica se é uma instrução UPDATE
        if (!preg_match("/^UPDATE/i", $sql)) {
            throw new Exception('Base de dados - Não é uma instrução UPDATE.');
        }

        // liga
        $this->connect();

        // comunica
        try {

            // comunicação com a bd
            if (!empty($params)) {
                $exec = $this->conn->prepare($sql);
                $exec->execute($params);
            } else {
                $exec = $this->conn->prepare($sql);
                $exec->execute();
            }
        } catch (PDOException $e) {

            // caso exista erro
            return false;
        }

        // desliga da bd
        $this->disconnect();
    }

    //==================================================
    // DALETE
    //==================================================
    public function delete($sql, $params = null)
    {
        // verufuca se é uma instrulçao delete
        if (!preg_match("/^INSERT/i", $sql)) {
            throw new Exception("Base de dados - nao é uma instrução DELETE.");
        }

        //executa a pesquisa sql
        $this->connect();

        //comunica
        try {
            //comunicação com bd
            if (!empty($params)) {
                $exec = $this->conn->prepare($sql);
                $exec->execute($params);
            } else {
                $exec = $this->conn->prepare($sql);
                $exec->execute();
            }
        } catch (PDOException $e) {
            //caso return error
            return false;
        }

        //desliga
        $this->disconnect();
    }

    //==================================================
    // GENERICA
    //==================================================
    public function statment($sql, $params = null)
    {
        // verifica se é uma instrulçao diferente do CRUD
        if (preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $sql)) {
            throw new Exception("Base de dados - instruçao inválida.");
        }

        //executa a pesquisa sql
        $this->connect();

        //comunica
        try {
            //comunicação com bd
            if (!empty($params)) {
                $exec = $this->conn->prepare($sql);
                $exec->execute($params);
            } else {
                $exec = $this->conn->prepare($sql);
                $exec->execute();
            }
        } catch (PDOException $e) {
            //caso return error
            return false;
        }

        //desliga
        $this->disconnect();
    }
}
