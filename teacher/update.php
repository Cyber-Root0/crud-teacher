<?php
/*
 * @software 
 * @author Bruno Venancio Alves <boteistem@gmail.com>
 * @copyrigh (c) 2024 
 * @license  Open Software License v. 3.0 (OSL-3.0)
 */
require_once(__DIR__.'/../app/config/config.php');
require_once(__DIR__.'/../vendor/autoload.php');
use BrunoAlves\abstractmodel\models\teacher\Teacher as Model;
use BrunoAlves\abstractmodel\models\teacher\Aluno;
use BrunoAlves\abstractmodel\Entity\teacher\Teacher;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = (object) $_POST;
    $professor = new Teacher;
    $professor->id = (int) $data->id;
    $professor->nome = $data->nome;
    $professor->formacao = $data->formacao;
    $professor->telefone = $data->telefone;
    $professor->email = $data->email;
    $professor->aluno = (int) $data->aluno;
    $out = (new Model())->update($professor);
    if ($out) {
        header('Location: /index.php?alterar=ok');
    }else{
        header('Location: /index.php?error=ok');
    }
}

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $professor = (new Model())->get($id);
    $alunos = (new Aluno())->getAll();
    render($professor, $alunos);
}

/**
 * render template to update data
 *
 * @param  array $professor
 * @param  array $alunos
 * @return void
 */
function render(array $professor, array $alunos){
    require_once(__DIR__ .'/template/update.phtml');
}