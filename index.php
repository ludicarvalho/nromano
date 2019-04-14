<?php

include "classe.php";

$ph = "Insira o número aqui.";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="../bootstrap.min.css" />
	<link rel="stylesheet" href="estilo.css">
	<title>Números Romanos</title>
</head>
<body class="container">
	<div class="card mt-3">

		<div class="card-header h4">Números Romanos</div>

		<div class="card-body">
			
			<form action="index.php" method="post">

				<div class="form-group row">

					<label for="nm" class="col-sm-2 col-form-label">
						<strong>Número</strong>
					</label>

					<div class="col-sm-10">
						<input type="number" class="form-control" name="numero" id="nm" required autofocus placeholder="<?php echo $ph; ?>" min="1" max="9999" value="<?php echo $_POST["numero"] ?? ""; ?>" />
						<input type="submit" class="btn btn-success" value="Calcular" />
					</div>

				</div>

<?php
	if (!empty($_POST)) {
		$numero = $_POST['numero'];
		$t = new Romano($numero);
?>
				<div class="alert alert-primary text-center">

					<label for="">
						<strong>Resultado:</strong>
					</label>

					<div class="w-100"></div>
<?php if ($numero >= 5000) {
?>
					<span class="text-dark">Para números a partir de 5000, é utilizada uma linha acima do numeral romano indicando múltiplo de 1000.
						<br/>Por exemplo, <span style="text-decoration: overline;">V</span> significa 5000.
					</span>
<?php
}
		else {
?>
					<span class="text-success">
						<strong><?php echo $t->GetRomano($numero); ?></strong>
					</span>
<?php	}
?>

				</div>
<?php
	}
?>
			</form>

		</div>

	</div>
</body>
</html>