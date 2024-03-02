<?php

namespace BrunoAlves\abstractmodel\interfaces;
use BrunoAlves\abstractmodel\Entity\Entity;
interface ModelInterface{
public function get(int $id ) : \InvalidArgumentException | array | bool;
public function find(Entity $entity) : array | false;
public function create(Entity $entity ) : bool;
public function update(Entity $entity) : \Exception | bool;
public function delete(int $id) : bool;
}