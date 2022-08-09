<?php

namespace App\Models;

class BaseModel
{
    public function __construct()
    {
        try {
            $this->conn = new \PDO("mysql:host=localhost; dbname=laravel_ass;charset=utf8", 'root', '');
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw $e;
        }
    }

    public static function all()
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM " . $model->tableName;
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
    public static function allNew()
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM " . $model->tableName . "  order by id desc limit 9";
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
    public static function all2()
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM " . $model->tableName . "  order by id desc limit 2";
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    public static function find($id)
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM " . $model->tableName . " WHERE id=" . $id;
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_CLASS, get_class($model));
        return $result[0];
    }

    public function insert($arrs)
    {
        $this->queryBuilder = "INSERT INTO " . $this->tableName;
        $cols = " (";
        $params = " (";
        foreach ($arrs as $key => $value) {
            $cols .= "$key, ";
            $params .= ":$key, ";
        }
        //Xoa dau "," ben phai
        $cols = rtrim($cols, ", ") . ") ";
        $params = rtrim($params, ", ") . ")";
        //Noi vao chuoi queryBuilder
        $this->queryBuilder .= $cols . "VALUES" . $params;
        //var_dump( $this->queryBuilder);die;
        $stmt = $this->conn->prepare($this->queryBuilder);
        $stmt->execute($arrs);
    }
    public function update($arrs,$id)
    {
        $this->queryBuilder = "UPDATE " . $this->tableName . " SET ";
        foreach ($arrs as $key => $value) {
            $this->queryBuilder .= "$key=:$key, ";
        }

        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= " WHERE id=".$id;
        //var_dump($this->queryBuilder);die;
        $stmt = $this->conn->prepare($this->queryBuilder);
        $stmt->execute($arrs);
        return $stmt;
    }

    public static function where($column, $oprerator, $value)
    {
        $model = new static;
        $model->queryBuilder = "SELECT * FROM $model->tableName WHERE $column
        $oprerator '$value'";
        //var_dump( $model->queryBuilder);die;
        return $model;
    }

    public function andWhere($column, $operator, $value)
    {
        $this->queryBuilder .= " AND $column $operator '$value'";
        return $this;
    }
    public static function delete($id){
        $model = new static;
        $sqlBuilder = "DELETE FROM " . $model->tableName . " WHERE id=" . $id;
        $stmt = $model->conn->prepare($sqlBuilder);
        return $stmt->execute();
    }
    public function get()
    {
        //var_dump($this->queryBuilder);die;
        $stmt = $this->conn->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, get_class($this));
    }
}