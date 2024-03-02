<?php
/*
 * @software 
 * @author Bruno Venancio Alves <boteistem@gmail.com>
 * @copyrigh (c) 2024 
 * @license  Open Software License v. 3.0 (OSL-3.0)
 */
namespace BrunoAlves\abstractmodel\Entity\teacher;
use BrunoAlves\abstractmodel\Entity\Entity;

class Teacher extends Entity{

    public int $id;
    public string $nome;
    public string $formacao;
    public string $telefone;
    public string $email;
    public int $aluno;
}