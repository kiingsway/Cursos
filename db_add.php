<?php
	if (isset($_POST['btnCriarCurso'])) {
		$i = 0;
		$criadoPor = gethostname();
		
		if (isset($_POST['cbxCertificado'])) $cbxCertificado = 1;
		else $cbxCertificado = 0;
		if (isset($_POST['cbxPresenca'])) $cbxPresenca = 1;
		else $cbxPresenca = 0;
		if (isset($_POST['cbxEtiqueta'])) $cbxEtiqueta = 1;
		else $cbxEtiqueta = 0;

		$datainicial = implode("-", array_reverse(explode("/", $_POST['datainicial'])));
		$datafinal = implode("-", array_reverse(explode("/", $_POST['datafinal'])));
		$InscricoesInicio = implode("-", array_reverse(explode("/", $_POST['InscricoesInicio'])));
		$InscricoesFim = implode("-", array_reverse(explode("/", $_POST['InscricoesFim'])));

		$dataInicialLote1 = implode("-", array_reverse(explode("/", $_POST['dataInicialLote1'])));
		$dataFinalLote1 = implode("-", array_reverse(explode("/", $_POST['dataFinalLote1'])));
		$vencimentoLote1 = implode("-", array_reverse(explode("/", $_POST['vencimentoLote1'])));

		$dataInicialLote2 = implode("-", array_reverse(explode("/", $_POST['dataInicialLote2'])));
		$dataFinalLote2 = implode("-", array_reverse(explode("/", $_POST['dataFinalLote2'])));
		$vencimentoLote2 = implode("-", array_reverse(explode("/", $_POST['vencimentoLote2'])));

		$dataInicialLote3 = implode("-", array_reverse(explode("/", $_POST['dataInicialLote3'])));
		$dataFinalLote3 = implode("-", array_reverse(explode("/", $_POST['dataFinalLote3'])));
		$vencimentoLote3 = implode("-", array_reverse(explode("/", $_POST['vencimentoLote3'])));

		$dataInicialLote4 = implode("-", array_reverse(explode("/", $_POST['dataInicialLote4'])));
		$dataFinalLote4 = implode("-", array_reverse(explode("/", $_POST['dataFinalLote4'])));
		$vencimentoLote4 = implode("-", array_reverse(explode("/", $_POST['vencimentoLote4'])));

		$cbxcategorias = $_POST['cbxCategorias'];
		foreach ($cbxcategorias as $valor) {
			if($i == 0) $categorias = $valor;
			else $categorias .= ','.$valor;
			$i++;
		}
		$db = mysqli_connect('localhost', 'root', '', 'dbprocedimentos');
		$query = "INSERT INTO `tb_criar_cursos` (
		`nome`, `tipo_atividade`,
		`centro_custo`, `conta_caixa`, `certificado`,
		`presenca`, `etiqueta`, `data_inicio_curso`,
		`data_fim_curso`, `hora_inicio_curso`, `hora_fim_curso`,
		`data_inicio_inscricoes`, `data_fim_inscricoes`, `vagas`,
		`carga_horaria`, `categorias`, `janelas_pagamento`,
		`data_inicio_lote1`,
		`data_fim_lote1`, `valor_lote1`, `valor_cbr_lote1`,
		`valor_abcdi_lote1`, `valor_nao_quite_lote1`, `valor_parceiro_lote1`,
		`tipo_vencimento_lote1`, `n_dias_lote1`, `limite_vencimento_lote1`,
		`data_inicio_lote2`, `data_fim_lote2`, `valor_lote2`,
		`valor_cbr_lote2`, `valor_abcdi_lote2`, `valor_nao_quite_lote2`,
		`valor_parceiro_lote2`, `tipo_vencimento_lote2`, `n_dias_lote2`,
		`limite_vencimento_lote2`, `data_inicio_lote3`, `data_fim_lote3`,
		`valor_lote3`, `valor_cbr_lote3`, `valor_abcdi_lote3`,
		`valor_nao_quite_lote3`, `valor_parceiro_lote3`, `tipo_vencimento_lote3`,
		`n_dias_lote3`, `limite_vencimento_lote3`, `data_inicio_lote4`,
		`data_fim_lote4`, `valor_lote4`, `valor_cbr_lote4`,
		`valor_abcdi_lote4`, `valor_nao_quite_lote4`, `valor_parceiro_lote4`,
		`tipo_vencimento_lote4`, `n_dias_lote4`, `limite_vencimento_lote4`,
		`criado_em`, `criado_por`) VALUES (
		'".$_POST['nomeCurso']."',
		'".$_POST['slctTipoAtv']."',
		'".$_POST['slctCentroCusto']."',
		'".$_POST['slctContaCaixa']."',
		'".$cbxCertificado."',
		'".$cbxPresenca."',
		'".$cbxEtiqueta."',
		'".$datainicial."',
		'".$datafinal."',
		'".$_POST['horainicial']."',
		'".$_POST['horafinal']."',
		'".$InscricoesInicio."',
		'".$InscricoesFim."',
		'".$_POST['vagas']."',
		'".$_POST['cargaHoraria']."',
		'".$categorias."',
		'".$_POST['selectJanelas']."',
		'".$dataInicialLote1."',
		'".$dataFinalLote1."',
		'".$_POST['valor1']."',
		'".$_POST['valorSocioCBR1']."',
		'".$_POST['valorSocioABCDI1']."',
		'".$_POST['valorSocioNaoQuite1']."',
		'".$_POST['valorSocioParceiro1']."',
		'".$_POST['selectVencimento1']."',
		'".$_POST['nDias1']."',
		'".$vencimentoLote1."',
		'".$dataInicialLote2."',
		'".$dataFinalLote2."',
		'".$_POST['valor2']."',
		'".$_POST['valorSocioCBR2']."',
		'".$_POST['valorSocioABCDI2']."',
		'".$_POST['valorSocioNaoQuite2']."',
		'".$_POST['valorSocioParceiro2']."',
		'".$_POST['selectVencimento2']."',
		'".$_POST['nDias2']."',
		'".$vencimentoLote2."',
		'".$dataInicialLote2."',
		'".$dataFinalLote2."',
		'".$_POST['valor3']."',
		'".$_POST['valorSocioCBR3']."',
		'".$_POST['valorSocioABCDI3']."',
		'".$_POST['valorSocioNaoQuite3']."',
		'".$_POST['valorSocioParceiro3']."',
		'".$_POST['selectVencimento3']."',
		'".$_POST['nDias3']."',
		'".$vencimentoLote3."',
		'".$dataInicialLote4."',
		'".$dataFinalLote4."',
		'".$_POST['valor4']."',
		'".$_POST['valorSocioCBR4']."',
		'".$_POST['valorSocioABCDI4']."',
		'".$_POST['valorSocioNaoQuite4']."',
		'".$_POST['valorSocioParceiro4']."',
		'".$_POST['selectVencimento4']."',
		'".$_POST['nDias4']."',
		'".$vencimentoLote4."',
		CURRENT_TIMESTAMP,
		'$criadoPor')";

		echo $query;
		require_once('mailer.php');

		mysqli_query($db, $query) or die ('Erro: '.mysqli_error($db));
		header('location: index.php');
	}
