<html>
	

	<head>
		<meta charset="utf-8">
		<title>Cadastro de Aluno</title>
		<link href="estilo.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<center><h1>-- Cadastrar Aluno --</h1></center>
		<div class="container">
		<form method="POST" action="adicionar.php">
			
			<input type="text" class="form-contact-input"
				name = "nome" placeholder="Nome Completo" required/>
				<input type="email" class="form-contact-input"
				name = "email" placeholder="Email" required/>
				<input type="tel" class="form-contact-input"
				name = "telefone" placeholder="(XX)XXXX-XXXX"  required/>
				
							
				<button type="submit" class="form-contact-button">
					Cadastrar
				</button>
			</form>
			<?php
    			include('listar2.php');
    		?>
		</div>
	</body>
</html>