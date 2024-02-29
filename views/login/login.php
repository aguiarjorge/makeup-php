<!doctype html>
<html lang="en">

<head>
	<title>Webleb</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/login.css">
	<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	
</head>

<script>
        window.onload = function() {
            // Verificar se a mensagem está presente na URL
            var mensagem = "<?php echo isset($_GET['mensagem']) ? $_GET['mensagem'] : ''; ?>";
            if (mensagem) {
                alert(mensagem);
            }
        }
    </script>
<body>
	
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Login </span><span>Cadastro</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">

											<form action="<?php  
											if(isset($_GET['agendar'])){
												echo "action/logar.php?agendar=agendamento";
											}else{
												echo "action/logar.php";
											}
											
											?>" method="post">
												<h4 class="mb-4 pb-3" style="color: #1f2029;">Login</h4>
												<div class="form-group">
													<input type="email" class="form-style" name="email" placeholder="Email">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" class="form-style" name="senha" placeholder="Senha">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button type="submit" class="btn mt-4">Login</button>
											</form>
											<p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Esqueceu sua senha?</a></p>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">

											<form action="action/cadastrar.php" method="post">
												<h4 class="mb-3 pb-3" id="cad-titulo" style="color: #1f2029;">Cadastro</h4>
												<div class="form-group">
													<input type="text" class="form-style" name="nome" placeholder="Nome Completo">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group mt-2">
													<input type="tel" class="form-style" name="telefone" placeholder="Celular" onkeypress="$(this).mask('(00) 0000-00009')">
													<i class="input-icon uil uil-phone"></i>
												</div>
												<div class="form-group mt-2">
													<input type="tel" class="form-style" name="cpf" placeholder="CPF" onkeypress="$(this).mask('000.000.000-00');">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<div class="form-group mt-2">
													<input type="email" class="form-style" name="email" placeholder="Email">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" class="form-style" name="senha" placeholder="Senha">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button type="submit" class="btn mt-4">Cadastrar</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>