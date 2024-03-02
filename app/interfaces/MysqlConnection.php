<?php

namespace BrunoAlves\abstractmodel\interfaces;

interface MysqlConnection{

    public function execute(string $sql) : \PDOStatement | false;
    public function prepare(string $abstractSql, array $params = []) : \PDOStatement | false;
}