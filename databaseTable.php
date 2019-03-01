<?php

class DatabaseTable {

    private $pdo;
    private $table;
    private $primaryKey;

    public function __construct($pdo, $table, $primaryKey) {
        $this->pdo = $pdo;
        $this->table = $table;
        $this->primaryKey = $primaryKey;
    }

    function find($field, $value) {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value';
        $stmt = $this->pdo->prepare($sql);
        $values = ['value' => $value];
        $stmt->execute($values);

        return $stmt->fetchAll();
    }

    function findAll() {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function insert($record) {
        $keys = array_keys($record);

        $values = implode(', ', $keys);
        $valuesColon = implode(', :', $keys);

        $sql = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesColon . ')';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($record);
    }

    function update($record) {
        $query = 'UPDATE ' . $this->table . ' SET ';
        $parameters = [];
        
        foreach ($record as $key => $value) {
            $parameters[] = $key . ' = :' .$key;
        }

        $query .= implode(', ', $parameters);
        $query .= ' WHERE ' . $this->primaryKey . ' = :primaryKey';
        $record['primaryKey'] = $record[$this->primaryKey];
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($record);
    }

    function save($record) {
        try {
            $this->insert($record);
        } catch (Exception $e) {
            $this->update($record);
        }
    }

    function delete($id) {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE ' . $this->primaryKey . ' = :id';
        $stmt = $this->pdo->prepare($sql);
        $values = ['id' => $id];
        $stmt->execute($values);
    }
}