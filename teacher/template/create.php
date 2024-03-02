<?php
/*
 * @software 
 * @author Bruno Venancio Alves <boteistem@gmail.com>
 * @copyrigh (c) 2024 
 * @license  Open Software License v. 3.0 (OSL-3.0)
 */
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container">
    <h3>Inserir Professor</h3>
    <form action="" method="POST">
      <div class="row">
        <div class="col-7">
          <label for="nome" class="form-label">Informe o nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe a formação: </label>
          <input type="text" id="curso" name="formacao" class="form-control" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o telefone: </label>
          <input type="number" id="curso" name="telefone" class="form-control" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">Informe o email: </label>
          <input type="email" id="curso" name="email" class="form-control" required/>
        </div>
        <div class="col-5">
          <label for="curso" class="form-label">informe o aluno:  </label>
          <select id="cars" name="aluno">
            <?php foreach($alunos as $aluno): ?>
            <option value="<?= $aluno['id']?>"><?= $aluno['nome'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="btn btn-primary" type="submit">Salvar Dados</button>
        </div>
      </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>