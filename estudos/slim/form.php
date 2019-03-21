<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Formulário</title>
</head>
<body>
	<form  action="/slim/post" method="POST">
		<label>Nome:</label> <br/>
		<input type="text" name="nome" size="40"> <br/>
		<label>Nascimento :</label>  <br/>
		<input type="date" name="dtNascimento"> <br/>
		<label>RG: </label> <br/>
		<input type="text" name="rg"> <br/>
		<label>CPF:</label> <br/>
		<input type="text" name="cpf"> <br/>
		<label>telefone:</label> <br/>
		<input type="text" name="telefone"> <br/>
		<label>Email:</label> <br/>
		<input type="text" name="email" size="40"> <br/><br/>
	    <input type="submit" name="salvar" value="Salvar" > 
	</form>
</body>
</html>

