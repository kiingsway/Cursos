<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Teste</title>
</head>
<body>

<?php
    if (isset($_GET['curso']))
    {
        $db = mysqli_connect('localhost', 'root', '', 'dbprocedimentos');
        $query = "SELECT * FROM tb_criar_cursos WHERE id = ". $_GET['curso'];
        $result = mysqli_query($db, $query);
        while ($cursodb = mysqli_fetch_assoc($result))
        {
            $nome = $cursodb['nome'];
            $tipo_atividade = $cursodb['tipo_atividade'];
            $tipo_atividadeDetalhes;
            $centro_custo = $cursodb['centro_custo'];
            $centro_custoDetalhes;
            $conta_caixa = $cursodb['conta_caixa'];
            $conta_caixaDetalhes;
            $certificado = $cursodb['certificado'];
            $presenca = $cursodb['presenca'];
            $etiqueta = $cursodb['etiqueta'];
            $data_inicio_curso = implode("/", array_reverse(explode("-", $cursodb['data_inicio_curso'])));
            $data_fim_curso = implode("/", array_reverse(explode("-", $cursodb['data_fim_curso'])));
            $hora_inicio_curso = $cursodb['hora_inicio_curso'];
            $hora_fim_curso = $cursodb['hora_fim_curso'];
            $data_inicio_inscricoes = implode("/", array_reverse(explode("-", $cursodb['data_inicio_inscricoes'])));
            $data_fim_inscricoes = implode("/", array_reverse(explode("-", $cursodb['data_fim_inscricoes'])));
            $vagas = $cursodb['vagas'];
            $carga_horaria = $cursodb['carga_horaria'];
            $categorias = explode(',', $cursodb['categorias']);
            $data_inicio_lote1 = implode("/", array_reverse(explode("-", $cursodb['data_inicio_lote1'])));
            $data_fim_lote1 = implode("/", array_reverse(explode("-", $cursodb['data_fim_lote1'])));
            $valor_lote1 = $cursodb['valor_lote1'];
            $valor_cbr_lote1 = $cursodb['valor_cbr_lote1'];
            $valor_abcdi_lote1 = $cursodb['valor_abcdi_lote1'];
            $valor_nao_quite_lote1 = $cursodb['valor_nao_quite_lote1'];
            $valor_parceiro_lote1 = $cursodb['valor_parceiro_lote1'];
            $tipo_vencimento_lote1 = $cursodb['tipo_vencimento_lote1']; 
            $n_dias_lote1 = $cursodb['n_dias_lote1'];
            $limite_vencimento_lote1 = implode("/", array_reverse(explode("-", $cursodb['limite_vencimento_lote1'])));
            $data_inicio_lote2 = $cursodb['data_inicio_lote2'];
            $data_fim_lote2 = $cursodb['data_fim_lote2'];
            $valor_lote2 = $cursodb['valor_lote2'];
            $valor_cbr_lote2 = $cursodb['valor_cbr_lote2'];
            $valor_abcdi_lote2 = $cursodb['valor_abcdi_lote2'];
            $valor_nao_quite_lote2 = $cursodb['valor_nao_quite_lote2'];
            $valor_parceiro_lote2 = $cursodb['valor_parceiro_lote2'];
            $tipo_vencimento_lote2 = $cursodb['tipo_vencimento_lote2'];
            $n_dias_lote2 = $cursodb['n_dias_lote2'];
            $limite_vencimento_lote2 = $cursodb['limite_vencimento_lote2'];
            $data_inicio_lote3 = $cursodb['data_inicio_lote3'];
            $data_fim_lote3 = $cursodb['data_fim_lote3'];
            $valor_lote3 = $cursodb['valor_lote3'];
            $valor_cbr_lote3 = $cursodb['valor_cbr_lote3'];
            $valor_abcdi_lote3 = $cursodb['valor_abcdi_lote3'];
            $valor_nao_quite_lote3 = $cursodb['valor_nao_quite_lote3'];
            $valor_parceiro_lote3 = $cursodb['valor_parceiro_lote3'];
            $tipo_vencimento_lote3 = $cursodb['tipo_vencimento_lote3'];
            $n_dias_lote3 = $cursodb['n_dias_lote3'];
            $limite_vencimento_lote3 = $cursodb['limite_vencimento_lote3'];
            $data_inicio_lote4 = $cursodb['data_inicio_lote4'];
            $data_fim_lote4 = $cursodb['data_fim_lote4'];
            $valor_lote4 = $cursodb['valor_lote4'];
            $valor_cbr_lote4 = $cursodb['valor_cbr_lote4'];
            $valor_abcdi_lote4 = $cursodb['valor_abcdi_lote4'];
            $valor_nao_quite_lote4 = $cursodb['valor_nao_quite_lote4'];
            $valor_parceiro_lote4 = $cursodb['valor_parceiro_lote4'];
            $tipo_vencimento_lote4 = $cursodb['tipo_vencimento_lote4'];
            $n_dias_lote4 = $cursodb['n_dias_lote4'];
            $limite_vencimento_lote4 = $cursodb['limite_vencimento_lote4'];

            switch ($centro_custo) {
            	case '98':
            		$centro_custoDetalhes = "Vendas Online";
            		break;
            	case '99':
            		$centro_custoDetalhes = "Congresso 2018";
            		break;
            	case '102':
            		$centro_custoDetalhes = "ESOR 2018";
            		break;
            	case '105':
            		$centro_custoDetalhes = "Congresso 2019";
            		break;
            }

            switch ($conta_caixa) {
            	case '10':
            		$conta_caixaDetalhes = "1.1.06 - Inscrições Curso - AVR";
            		break;
            	case '29':
            		$conta_caixaDetalhes = "1.4.01.02 - Congresso Brasileiro Radiologia";
            		break;
            	case '586':
            		$conta_caixaDetalhes = "1.4.01.10 - Curso de Gestão FDC ABCDI";
            		break;
            	case '588':
            		$conta_caixaDetalhes = "1.4.01.11 - ESOR - Curso de Radiologia";
            		break;
            	case '288':
            		$conta_caixaDetalhes = "1.8.01 - Inscrições para Curso (PADI)";
            		break;
            	case '591':
            		$conta_caixaDetalhes = "1.8.03 - Inscrições para Curso Gestão de Clínicas";
            		break;
            }

            switch ($tipo_atividade) {
            	case '1':
            		$tipo_atividadeDetalhes = "Cursos Presencias";
            		break;
            	case '2':
            		$tipo_atividadeDetalhes = "Cursos Online";
            		break;
            	case '3':
            		$tipo_atividadeDetalhes = "Livros";
            		break;
            }
        }
    }
    
?>

	<div class="container">
		<h4 class="centered" id="hCentroCusto">Centro de Custo: 99 - Congresso 2018</h4>
		<div style="background-color: #f3f3f4;" class="container-fluid">
			<h5><i class="fa fa-check-square-o"></i> Cadastrar Atividade</h5>
			<hr>
			<div class="row">
    			<div class="col">
    				<label for="atvDescricao">Descrição:</label>
					<input type="text" class="form-control" id="atvDescricao" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$nome."'"; ?>>
				</div>
    			<div class="col">
    				<label for="atvDescricaoCertificado">Descrição do certificado:</label>
					<input type="text" class="form-control" id="atvDescricaoCertificado" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$nome."'"; ?>>
				</div>
    			<div class="col-2">
    				<label for="atvCentroCusto"><b>C. Custo</b></label>
					<input type="text" class="form-control" id="atvCentroCusto" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$centro_custo."'"; ?>>
				</div>
    			<div class="col">
					<label for="atvDescricaoCentroCusto">Descrição</label>
					<input type="text" class="form-control" id="atvDescricaoCentroCusto" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$centro_custoDetalhes."'"; ?>>
				</div>
			</div>
			<div class="row">
    			<div class="col-2">
					<label for="atvContaCaixa"><b>C. caixa</b></label>
					<input type="text" class="form-control" id="atvContaCaixa" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$conta_caixa."'"; ?>>
				</div>
    			<div class="col">
					<label for="atvDescricaoContaCaixa">Descrição:</label>
					<input type="text" class="form-control" id="atvDescricaoContaCaixa" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$conta_caixaDetalhes."'"; ?>>
				</div>
    			<div class="col">
					<label for="atvTipoAtividade"><b>Tipo de atividade:</b></label>
					<input type="text" class="form-control" id="atvTipoAtividade" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$tipo_atividadeDetalhes."'"; ?>>
				</div>
    			<div class="col">
					<label>Eixo:</label>
					<select class="custom-select" disabled><option>Selecione</option></select>
				</div>
			</div><br>
			<div class="row">
    			<div class="col">
					<label class="checkbox-inline"><input type="checkbox" id="atvCertificado" <?php if (isset($_GET['curso'])) if ($certificado == 1) echo 'checked'; ?>> Imprimir Certificado  </label>
				</div>
				<div class="col">
					<label class="checkbox-inline"><input type="checkbox" id="atvEtiqueta" <?php if (isset($_GET['curso'])) if ($etiqueta == 1) echo 'checked'; ?>> Imprimir Etiqueta  </label>
				</div>
				<div class="col">
					<label class="checkbox-inline"><input type="checkbox" id="atvPresenca" <?php if (isset($_GET['curso'])) if ($presenca == 1) echo 'checked'; ?>> Considerar Presença</label>
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
					<label for="agdAtividade"><b>Atividade:</b></label>
					<input type="text" class="form-control" id="agdAtividade" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$nome."'"; ?>>
				</div>
    			<div class="col-2">
					<label for="agdSigla">Sigla</label>
					<input type="text" class="form-control" id="agdSigla" disabled>
				</div>
    			<div class="col-4">
					<label for="agdDescricao">Descrição</label>
					<input type="text" class="form-control" id="agdDescricao" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$nome."'"; ?>>
				</div>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<h6>Agendamento da Atividade</h6>
				<hr style="background-color: white;">
				<div class="row">
					<div class="col">
						<label for="agdInicio"><b>Início</b></label>
						<input type="text" class="form-control" id="agdInicio" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$data_inicio_curso."'"; ?>>
					</div>
					<div class="col">
						<label for="agdHoraInicio">Hora Inicial</label>
						<input type="text" class="form-control" id="agdHoraInicio" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$hora_inicio_curso."'"; ?>>
					</div>
					<div class="col">
						<label for="agdTermino"><b>Termino</b></label>
						<input type="text" class="form-control" id="agdTermino" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$data_fim_curso."'"; ?>>
					</div>
					<div class="col">
						<label for="agdHoraFinal">Hora Final</label>
						<input type="text" class="form-control" id="agdHoraFinal" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$hora_fim_curso."'"; ?>>
					</div>
					<div class="col">
						<label>Modelo certificado</label>
						<select class="custom-select" disabled><option>Selecione</option></select>
					</div>
					<div class="col"></div>
				</div><br>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<h6>Inscrições / Compras</h6>
				<hr style="background-color: white;">
				<div class="row">
					<div class="col-2">
						<label for="agdInscricoesInicio"><b>Início</b></label>
						<input type="text" class="form-control" id="agdInscricoesInicio" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$data_inicio_inscricoes."'"; ?>>
					</div>
					<div class="col-2">
						<label for="agdInscricoesTermino"><b>Termino</b></label>
						<input type="text" class="form-control" id="agdInscricoesTermino" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$data_fim_inscricoes."'"; ?>>
					</div>
					<div class="col-2">
						<label for="agdVagas"><b>Num. de vagas</b></label>
						<input type="text" class="form-control" id="agdVagas" data-toggle="tooltip" data-placement="top" title="Clique para copiar"  <?php if (isset($_GET['curso'])) echo "value='".$vagas."'"; ?>>
					</div>
					<div class="col-2">
						<label>Vagas ocupadas</label>
						<input type="text" class="form-control" value="0" disabled>
					</div>
					<div class="col">
						<label class="checkbox-inline"><b>Publicar na internet? </b></label> <input type="checkbox" checked>
						<label class="checkbox-inline">Enviar email a gerar uma inscrição</label> <input type="checkbox" checked>
						<label class="checkbox-inline">Enviar email de confirmacao</label> <input type="checkbox" checked>
					</div>
				</div><br>
			</div><br>
			<div class="row container">
				<button type="button" class="btn btn-primary">Curso</button>
			</div><br>
			<div class="container" style="background-color: #ccc; margin: auto; border-radius: 4px;"><br>
				<div class="row">
					<div class="col-2">
						<label for="agdCargaHoraria">Carga horária</label>
						<input type="text" class="form-control" id="agdCargaHoraria" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$carga_horaria."'"; ?>>
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
						<label>Tipo de multa</label>
						<select class="custom-select" disabled><option><b>Valor</b></option></select>
					</div>
					<div class="col-2">
						<label><b>Valor da multa</b></label>
						<input type="text" class="form-control" value="0.00" disabled>
					</div>
					<div class="col-2">
						<label>Tipo de juros</label>
						<select class="custom-select" disabled><option><b>Valor</b></option></select>
					</div>
					<div class="col-2">
						<label><b>Valor do Juros</b></label>
						<input type="text" class="form-control" value="0.00" disabled>
					</div>
					<div class="col-2">
						<label class="checkbox-inline">Gerar nosso número?</label> <input type="checkbox" value="" checked>
					</div>
				</div><br>
				<div class="row">
					<div class="col-2">
						<label>Controle layout</label>
						<input type="text" class="form-control" value="14" data-toggle="tooltip" data-placement="top" title="Clique para copiar">
					</div>
					<div class="col-2">
						<label>Layout</label>
						<input type="text" class="form-control" value="CNAB400_ITAU_SHOPLINE" disabled>
					</div>
					<div class="col-2">
						<label>Convênio</label>
						<input type="text" class="form-control" value="0" disabled>
					</div>
				</div><br>
			</div>
			<br>
		</div>
		<br><br><br>
		<div style="background-color: #f3f3f4;" class="container">
			<h5><i class="fa fa-check-square-o"></i> Editar plano de pagamento</h5>
			<hr>
			<div class="row">
				<div class="col-2">
					<label><b>Atividade</b></label>
					<input type="text" class="form-control" disabled>
				</div>
				<div class="col-4">
					<label>...</label>
					<input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$nome."'"; ?>>
				</div>
				<div class="col-2">
					<label>Somente Sócio</label>
					<input type="text" class="form-control" value="Não" disabled>
				</div>
				<div class="col-2">
					<label>Data de início</label>
					<input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$data_inicio_lote1."'"; ?>>
				</div>
				<div class="col-2">
					<label>Data de término</label>
					<input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Clique para copiar" <?php if (isset($_GET['curso'])) echo "value='".$data_fim_lote1."'"; ?>>
				</div>
			</div>
		</div>


	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		});

		$(function() {
			$('input').click(function() {
			$(this).focus();
			$(this).select();
			document.execCommand('copy');
			});
		});

	</script>
</body>
</html>