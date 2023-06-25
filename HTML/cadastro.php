<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Cadastro</title>
  <link rel="stylesheet" type="text/css" href="../CSS/estilocad.css">

</head>
<body>
  <div class="container">
    <h1>Formulário de Cadastro</h1>
    <form method="POST" action="../PHP/cad.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>    
        <!--label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required-->
      <div class="form-group">  
        <label for="text">Nível:</label>
        <input type="text" id="nivel" name="nivel" required>
      </div>  
      <div class="form-group">  
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>  
      <div class="form-group">
        <input type="submit" name="submit" id="submit" value="Cadastrar"> 
      </div>
    </form>
  </div>
</body>
</html>