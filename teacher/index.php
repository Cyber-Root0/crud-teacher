<?php
/*
 * @software 
 * @author Bruno Venancio Alves <boteistem@gmail.com>
 * @copyrigh (c) 2024 
 * @license  Open Software License v. 3.0 (OSL-3.0)
 */
 require_once(__DIR__.'/../vendor/autoload.php');
 require_once(__DIR__.'/../app/config/config.php');
 use BrunoAlves\abstractmodel\Entity\teacher\Teacher;
 use BrunoAlves\abstractmodel\models\teacher\Teacher as Model;
 use BrunoAlves\abstractmodel\models\teacher\Aluno as AlunoModel;
 $alunos = (new AlunoModel())->getAll();
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

     $teacher = new Teacher();
     $teacher->nome = $_POST['nome'];
     $teacher->formacao = $_POST['formacao'];
     $teacher->telefone = $_POST['telefone'];
     $teacher->email = $_POST['email'];
     $teacher->aluno = (int) $_POST['aluno'];
     $out = (new Model())->create($teacher);
     if ($out){
        header('Location: /index.php?inserir=ok');
     }
  }
  /**
   * render template to insert teacher
   *
   * @return void
   */
  function render(){
    require_once(__DIR__.'/template/create.php');
  }
  render(); 