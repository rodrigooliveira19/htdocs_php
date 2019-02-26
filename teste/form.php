<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Formulário</title>
</head>
<body>  
	<form  action="/cadastro/produtos/6" method="POST">
		<label>ID:</label> <br/>
		<input type="text" name="cod" size="10"> <br/>
		<label>Nome:</label> <br/>
		<input type="text" name="nome" size="40"> <br/>
		<label>Descrição :</label>  <br/>
		<input type="text" name="descricao"> <br/>
		<label>Valor: </label> <br/>
		<input type="text" name="valor"> <br/>
	    <input type="submit" name="salvar" value="Salvar" > 
	</form>
</body>
</html>