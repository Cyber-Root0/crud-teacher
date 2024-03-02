<?php
/*
 * @software 
 * @author Bruno Venancio Alves <boteistem@gmail.com>
 * @copyrigh (c) 2024 
 * @license  Open Software License v. 3.0 (OSL-3.0)
 */
require_once(__DIR__ ."/../app/config/config.php");
require_once(__DIR__ ."/../vendor/autoload.php");
use BrunoAlves\abstractmodel\models\teacher\Teacher;

if (isset($_REQUEST['id'])){
    $id = (int) $_REQUEST['id'];
    $out = (new Teacher())->delete($id);
    if ($out){
        header('Location: /index.php?excluir=ok');
    }else{
        echo "tentando quebrar a aplicação né? te peguei :)";
    }
}
