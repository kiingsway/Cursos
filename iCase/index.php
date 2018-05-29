<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Teste</title>
</head>
<body>

	<div class="container">
		<h4 class="centered">Centro de Custo: 99 - Congresso 2018</h4>
		<div style="background-color: #f3f3f4;" class="container-fluid">
			<h5><i class="fa fa-check-square-o"></i> Cadastrar Atividade</h5>
			<hr>
			<div class="row">
    			<div class="col">
					<label for="exampleInputEmail1">Descrição:</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col">
					<label for="exampleInputEmail1">Descrição do certificado:</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col">
					<label for="exampleInputEmail1"><b>C. Custo</b></label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col">
					<label for="exampleInputEmail1">Descrição</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
			</div>
			<div class="row">
    			<div class="col">
					<label for="exampleInputEmail1"><b>Conta caixa</b></label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col">
					<label for="exampleInputEmail1">Descrição:</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col">
					<label for="exampleInputEmail1"><b>Tipo de atividade:</b></label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col">
					<label for="exampleInputEmail1">Eixo:</label>
					<select class="custom-select" disabled><option>Selecione</option></select>
				</div>
			</div>
			<div class="row">
    			<div class="col">
					<label class="checkbox-inline"><input type="checkbox" value=""> Imprimir Certificado  </label>
				</div>
				<div class="col">
					<label class="checkbox-inline"><input type="checkbox" value=""> Imprimir Etiqueta  </label>
				</div>
				<div class="col">
					<label class="checkbox-inline"><input type="checkbox" value=""> Considerar Presença</label>
				</div>
				<div class="col">
				</div>
				<div class="col">
				</div>
			</div>
		</div>
		<br><br><br>
		<div style="background-color: #f3f3f4;" class="container">
			<h5><i class="fa fa-check-square-o"></i> Cadastrar Agendamento</h5>
			<hr>
			<div class="row">
    			<div class="col-6">
					<label for="exampleInputEmail1"><b>Atividade:</b></label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col-2">
					<label for="exampleInputEmail1">Sigla</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
    			<div class="col-4">
					<label for="exampleInputEmail1">Descrição</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<h6>Agendamento da Atividade</h6>
				<hr style="background-color: white;">
				<div class="row">
					<div class="col">
						<label for="exampleInputEmail1"><b>Início</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col">
						<label for="exampleInputEmail1">Hora Inicial</label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col">
						<label for="exampleInputEmail1"><b>Termino</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col">
						<label for="exampleInputEmail1">Hora Final</label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col">
						<label for="exampleInputEmail1">Modelo certificado</label>
						<select class="custom-select" disabled><option>Selecione</option></select>
					</div>
					<div class="col"></div>
				</div><br>
			</div>
			<br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<h6>Inscrições / Compras</h6>
				<hr style="background-color: white;">
				<div class="row">
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Início</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Termino</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Num. de vagas</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1">Vagas ocupadas</label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="0" disabled>
					</div>
					<div class="col">
						<label class="checkbox-inline"><b>Publicar na internet? </b></label> <input type="checkbox" value="">
						<label class="checkbox-inline">Enviar email a gerar uma inscrição</label> <input type="checkbox" value="">
						<label class="checkbox-inline">Enviar email de confirmacao</label> <input type="checkbox" value="">
					</div>
				</div><br>
			</div><br>
			<div class="row container">
				<button type="button" class="btn btn-primary">Semestralidade</button>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<div class="row">
					<div class="col-3">
						<label for="exampleInputEmail1"><b>Modo de vigencia</b></label>
						<select class="custom-select" disabled><option><b>Não se aplica</b></option></select>
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Competência</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="2018">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Sequência</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="1">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Repasse (%)</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="0,00">
					</div>
				</div><br>
			</div><br>
			<div class="row container">
				<button type="button" class="btn btn-primary">Curso</button>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<div class="row">
					<div class="col-2">
						<label for="exampleInputEmail1">Carga horária</label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
				</div><br>
			</div>
			<br>
			<div class="row container">
				<button type="button" class="btn btn-primary">Cobranca</button>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<div class="row">
					<div class="col-2">
						<label for="exampleInputEmail1">Tipo de multa</label>
						<select class="custom-select" disabled><option><b>Valor</b></option></select>
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Valor da multa</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="0.00">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1">Tipo de juros</label>
						<select class="custom-select" disabled><option><b>Valor</b></option></select>
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1"><b>Carga horária</b></label>
						<input type="email" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="col-2">
						<label class="checkbox-inline">Gerar nosso número?</label> <input type="checkbox" value="" checked>
					</div>
				</div><br>
				<div class="row">
					<div class="col-2">
						<label for="exampleInputEmail1">Controle layout</label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="14">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1">Layout</label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="CNAB400_ITAU_SHOPLINE">
					</div>
					<div class="col-2">
						<label for="exampleInputEmail1">Convênio</label>
						<input type="email" class="form-control" id="exampleInputEmail1" value="0">
					</div>
				</div><br>
			</div>
			<br>
		</div>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>