<?php include ('db_add.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cursos</title>
    <!-- Deixe o browser saber que esse site serve em mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/loader.css">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
    * { font-size: 14px !important };
    p { display: inline };
    </style>
</head>
<body>

<!--Main Navigation-->
  <nav>
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo" style="font-size: 20px;">Criar Curso</a>
      <ul id="nav-mobile" class="right">
        <li><a class="waves-effect waves-light btn modal-trigger" href="#modalSalvos">Cursos Enviados</a></li>
      </ul>
    </div>
  </nav>
<!--Main Navigation-->

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
            $centro_custo = $cursodb['centro_custo'];
            $conta_caixa = $cursodb['conta_caixa'];
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
        }
    }
    
?>
            
<div class="container">
  <div class="row">
    <form class="col s12" method="POST" action="#" onsubmit="abrirModalLoad()">
      <div class="row">
        <div class="input-field col s12 m7">
            <input id="nomeCurso" name="nomeCurso" type="text" class="contar" data-length="80" onkeyup="trocarTitulo()" <?php if (isset($_GET['curso'])) echo "value='".$nome."'"; ?> required>
            <label for="nomeCurso" class="tooltipped" data-position="top" data-tooltip="Nome que aparecerá no momento da compra">Nome do curso <i class="material-icons">help</i></label>
        </div>
        <div class="input-field col s6 m2">
            <select name="slctTipoAtv">
                <option value="1" <?php if (isset($_GET['curso'])) if ($tipo_atividade == 1) echo 'selected'; ?>>Curso Presencial</option>
                <option value="2" <?php if (isset($_GET['curso'])) if ($tipo_atividade == 2) echo 'selected'; ?>>Curso On-line</option>
                <option value="3" <?php if (isset($_GET['curso'])) if ($tipo_atividade == 3) echo 'selected'; ?>>Livro</option>
            </select>
            <label for="form1">Tipo de atividade</label>
        </div>
        <div class="input-field col s6 m3">
            <select class="custom-select" name="slctCentroCusto">
                <option value="98" <?php if (isset($_GET['curso'])) if ($centro_custo == 98) echo 'selected'; ?>>[98] Vendas Online</option>
                <option value="99" <?php if (isset($_GET['curso'])) if ($centro_custo == 99) echo 'selected'; ?>>[99] Congresso 2018</option>
                <option value="102" <?php if (isset($_GET['curso'])) if ($centro_custo == 102) echo 'selected'; ?>>[102] ESOR 2018</option>
                <option value="105" <?php if (isset($_GET['curso'])) if ($centro_custo == 105) echo 'selected'; ?>>[105] Congresso 2019</option>
                <option value="0">Outro... (mande e-mail informando)</option>
            </select>  
            <label for="form1">Centro de custo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
            <select class="custom-select" name="slctContaCaixa">
                <option value="10" <?php if (isset($_GET['curso'])) if ($conta_caixa == 10) echo 'selected'; ?>>(10) 1.1.06 - Inscrições Curso - AVR</option>
                <option value="29" <?php if (isset($_GET['curso'])) if ($conta_caixa == 29) echo 'selected'; ?>>(29) 1.4.01.02 - Congresso Brasileiro Radiologia</option>
                <option value="586" <?php if (isset($_GET['curso'])) if ($conta_caixa == 586) echo 'selected'; ?>>(586) 1.4.01.10 - Curso de Gestão FDC ABCDI</option>                
                <option value="588" <?php if (isset($_GET['curso'])) if ($conta_caixa == 588) echo 'selected'; ?>>(588) 1.4.01.11 - ESOR - Curso de Radiologia</option>
                <option value="288" <?php if (isset($_GET['curso'])) if ($conta_caixa == 288) echo 'selected'; ?>>(288) 1.8.01 - Inscrições para Curso [PADI]</option>
                <option value="591" <?php if (isset($_GET['curso'])) if ($conta_caixa == 591) echo 'selected'; ?>>(591) 1.8.03 - Inscrições para Curso Gestão de Clínicas</option>
                <option value="0">Outro... (mande e-mail informando)</option>
            </select>
            <label for="input_text" class="tooltipped" data-position="top" data-tooltip="Cada curso possui sua Conta Caixa. Qualquer dúvida sobre pergunte ao Financeiro">Conta Caixa <i class="material-icons">help</i></label>
        </div>
        <div class="input-field col s4 m2">
            <p>
                <label>
                    <input type="checkbox" class="filled-in" name="cbxCertificado" <?php if (isset($_GET['curso'])) if ($certificado == 1) echo 'checked'; ?> >
                    <span>Imprimir Certificado</span>
                </label>
            </p>
        </div>
        <div class="input-field col s4 m2">
            <p>
                <label>
                    <input type="checkbox" class="filled-in" name="cbxPresenca" <?php if (isset($_GET['curso'])) if ($presenca == 1) echo 'checked'; ?> />
                    <span>Considerar presença</span>
                </label>
            </p>
        </div>
        <div class="input-field col s4 m2">
            <p>
                <label>
                    <input type="checkbox" class="filled-in" name="cbxEtiqueta" <?php if (isset($_GET['curso'])) if ($etiqueta == 1) echo 'checked'; ?> />
                    <span>Imprimir etiqueta</span>
                </label>
            </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m3">
            <input id="datainicial" name="datainicial" type="text" class="datepicker" onchange="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$data_inicio_curso.'"'; ?>>
            <label for="datainicial">Data do Curso</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="datafinal" name="datafinal" type="text" class="datepicker" onchange="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$data_fim_curso.'"'; ?>>
            <label for="datafinal">Data Final do Curso</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="horainicial" name="horainicial" type="text" class="timepicker" onchange="trocarTitulo()" <?php if (isset($_GET['curso'])) echo 'value="'.$hora_inicio_curso.'"'; ?>>
            <label for="horainicial" class="tooltipped" data-position="top" data-tooltip="Caso o curso ocorrerá em mais de um dia com horários diferentes deixe em branco">Hora do Curso <i class="material-icons">help</i></label>
        </div>
        <div class="input-field col s6 m3">
            <input id="horafinal" name="horafinal" type="text" class="timepicker" onchange="trocarTitulo()" <?php if (isset($_GET['curso'])) echo 'value="'.$hora_fim_curso.'"'; ?>>
            <label for="horafinal">Hora Final do Curso</label>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s6 m3">
            <input id="InscricoesInicio" name="InscricoesInicio" type="text" class="datepicker" required <?php if (isset($_GET['curso'])) echo 'value="'.$data_inicio_inscricoes.'"'; ?>>
            <label for="InscricoesInicio">Início das Inscrições</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="InscricoesFim" name="InscricoesFim" type="text" class="datepicker" required <?php if (isset($_GET['curso'])) echo 'value="'.$data_fim_inscricoes.'"'; ?>>
            <label for="InscricoesFim">Fim das Inscrições</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="vagas" name="vagas" type="number" required <?php if (isset($_GET['curso'])) echo 'value="'.$vagas.'"'; ?>>
            <label for="vagas">Vagas</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="cargaHoraria" name="cargaHoraria" type="number" <?php if (isset($_GET['curso'])) echo 'value="'.$carga_horaria.'"'; ?>>
            <label for="cargaHoraria">Carga Horária</label>
            <span class="helper-text" data-error="wrong" data-success="right">horas</span>
        </div>
    </div>

    <div class="checkbox-group required">
        <div class="row">
            <h1><b>Sócio</b></h1>  
            <div class="input-field col s6 m3">
                <td class="hoverable">
                    <label>
                        <input type="checkbox" class="filled-in" name="cbxCategorias[]" value="1" <?php if (isset($_GET['curso'])) if(in_array('1', $categorias)) echo 'checked'; ?>/>
                        <span>Aperfeiçoando</span>
                    </label>
                </td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable">
                    <label>
                        <input type="checkbox" class="filled-in" name="cbxCategorias[]" value="2" <?php if (isset($_GET['curso'])) if(in_array('2', $categorias)) echo 'checked'; ?>/>
                        <span>Aspirante</span>
                    </label>
                </td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="3" <?php if (isset($_GET['curso'])) if(in_array('3', $categorias)) echo 'checked'; ?>/><span>Residente</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]"  value="4" <?php if (isset($_GET['curso'])) if(in_array('4', $categorias)) echo 'checked'; ?>/><span>Coligado</span></label></td>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="5" <?php if (isset($_GET['curso'])) if(in_array('5', $categorias)) echo 'checked'; ?>/><span>Titular</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="6" <?php if (isset($_GET['curso'])) if(in_array('6', $categorias)) echo 'checked'; ?>/><span>Titular/Residente</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="7" <?php if (isset($_GET['curso'])) if(in_array('7', $categorias)) echo 'checked'; ?>/><span>Titular/Aperfeiçoando</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="8" <?php if (isset($_GET['curso'])) if(in_array('8', $categorias)) echo 'checked'; ?>/><span>ABCDI</span></label></td>
            </div>
        </div>
        <div class="row">
            <h1><b>Não Sócio</b></h1>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="9" <?php if (isset($_GET['curso'])) if(in_array('9', $categorias)) echo 'checked'; ?>/><span>Padrão</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="10" <?php if (isset($_GET['curso'])) if(in_array('10', $categorias)) echo 'checked'; ?>/><span>Médicos</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="11" <?php if (isset($_GET['curso'])) if(in_array('11', $categorias)) echo 'checked'; ?>/><span>Não sócio ABCDI</span></label></td>
            </div>
        </div>
    </div><br><br>

        <div class="row">
            <div class="input-field col s12">
                <select id="selectJanelas" name="selectJanelas" onchange="janelasPgto()">
                    <option value="1">1 janela</option>
                    <option value="2">2 janelas</option>
                    <option value="3">3 janelas</option>
                    <option value="4">4 janelas</option>
                </select>
                <label>Quantas janelas de pagamento?</label>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="input-field row">
                <input name="dataInicialLote1" type="text" class="datepicker" required <?php if (isset($_GET['curso'])) echo 'value="'.$data_inicio_lote1.'"'; ?>/>
                <label for="dataInicialLote1">Data inicial do Lote 1</label>
            </div>
            <div class="input-field row">
                <input name="dataFinalLote1" type="text" class="datepicker" required <?php if (isset($_GET['curso'])) echo 'value="'.$data_fim_lote1.'"'; ?>>
                <label for="dataFinalLote1">Data Final do Lote 1</label>
            </div>
            <div class="input-field row">
                <input id="valor1" name="valor1" type="number" onkeyup="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$valor_lote1.'"'; ?>>
                <label for="valor1">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioCBR1" name="valorSocioCBR1" type="number" onkeyup="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$valor_cbr_lote1.'"'; ?>>
                <label for="valorSocioCBR1">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioABCDI1" name="valorSocioABCDI1" type="number" onkeyup="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$valor_abcdi_lote1.'"'; ?>>
                <label for="valorSocioABCDI1">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioNaoQuite1" name="valorSocioNaoQuite1" type="number" onkeyup="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$valor_nao_quite_lote1.'"'; ?>>
                <label for="valorSocioNaoQuite1">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioParceiro1" name="valorSocioParceiro1" type="number" onkeyup="trocarTitulo()" required <?php if (isset($_GET['curso'])) echo 'value="'.$valor_parceiro_lote1.'"'; ?>>
                <label for="valorSocioParceiro1">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select name="selectVencimento1" id="selectVencimento1" onchange="tipoVencimento1()">
                    <option value="1" <?php if (isset($_GET['curso'])) if($tipo_vencimento_lote1 == 1) echo 'checked'; ?>>Inscrição +n dias</option>
                    <option value="2" <?php if (isset($_GET['curso'])) if($tipo_vencimento_lote1 == 2) echo 'checked'; ?>>Fixo</option>
                    <option value="3" <?php if (isset($_GET['curso'])) if($tipo_vencimento_lote1 == 3) echo 'checked'; ?>>Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias1" class="input-field row">
                <input id="nDias1" type="number" <?php if (isset($_GET['curso'])) echo 'value="'.$n_dias_lote1.'"'; ?>>
                <label for="nDias1">n Dias</label>
            </div>
            <div id="divVenc1" class="input-field row">
                <input id="vencimentoLote1" type="text" class="datepicker" <?php if (isset($_GET['curso'])) echo 'value="'.$limite_vencimento_lote1.'"'; ?>>
                <label id="labelVenc1" for="vencimentoLote1">Limite de vencimento</label>
            </div>
        </div>
        <div style="display: none" id="divJanela2" class="col s6 m3">
            <div class="input-field row">
                <input name="dataInicialLote2" type="text" class="datepicker">
                <label for="dataInicialLote2">Data inicial do Lote 2</label>
            </div>
            <div class="input-field row">
                <input name="dataFinalLote2" type="text" class="datepicker">
                <label for="dataFinalLote2">Data Final do Lote 2</label>
            </div>
            <div class="input-field row">
                <input name="valor2" type="number" onkeyup="trocarTitulo()">
                <label for="valor2">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioCBR2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR2">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioABCDI2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI2">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioNaoQuite2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite2">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioParceiro2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro2">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select name="selectVencimento2" id="selectVencimento2" onchange="tipoVencimento2()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias2" class="input-field row">
                <input name="nDias2" type="number">
                <label for="nDias2">n Dias</label>
            </div>
            <div id="divVenc2" class="input-field row">
                <input name="vencimentoLote2" type="text" class="datepicker">
                <label name="labelVenc2" for="vencimentoLote2">Limite de vencimento</label>
            </div>
        </div>
        <div style="display: none" id="divJanela3" class="col s6 m3">
            <div class="input-field row">
                <input name="dataInicialLote3" type="text" class="datepicker">
                <label for="dataInicialLote3">Data inicial do Lote 3</label>
            </div>
            <div class="input-field row">
                <input name="dataFinalLote3" type="text" class="datepicker">
                <label for="dataFinalLote3">Data Final do Lote 3</label>
            </div>
            <div class="input-field row">
                <input name="valor3" type="number" onkeyup="trocarTitulo()">
                <label for="valor3">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioCBR3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR3">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioABCDI3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI3">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioNaoQuite3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite3">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioParceiro3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro3">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select name="selectVencimento3" id="selectVencimento3" onchange="tipoVencimento3()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias3" class="input-field row">
                <input name="nDias3" type="number">
                <label for="nDias3">n Dias</label>
            </div>
            <div id="divVenc3" class="input-field row">
                <input name="vencimentoLote3" type="text" class="datepicker">
                <label name="labelVenc3" for="vencimentoLote3">Limite de vencimento</label>
            </div>
        </div>
        <div style="display: none" id="divJanela4" class="col s6 m3">
            <div class="input-field row">
                <input name="dataInicialLote4" type="text" class="datepicker">
                <label for="dataInicialLote4">Data inicial do Lote 4</label>
            </div>
            <div class="input-field row">
                <input name="dataFinalLote4" type="text" class="datepicker">
                <label for="dataFinalLote4">Data Final do Lote 4</label>
            </div>
            <div class="input-field row">
                <input name="valor4" type="number" onkeyup="trocarTitulo()">
                <label for="valor4">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioCBR4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR4">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioABCDI4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI4">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioNaoQuite4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite4">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input name="valorSocioParceiro4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro4">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select name="selectVencimento4" id="selectVencimento4" onchange="tipoVencimento4()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias4" class="input-field row">
                <input name="nDias4" type="number">
                <label for="nDias4">n Dias</label>
            </div>
            <div id="divVenc4" class="input-field row">
                <input name="vencimentoLote4" type="text" class="datepicker">
                <label name="labelVenc4" for="vencimentoLote4">Limite de vencimento</label>
            </div>
        </div>
        <div class="input-field col s12 center">
        	<button type='submit' name='btnCriarCurso' class='btn waves-effect waves-light' style='border-radius: 12px;'>Enviar<i class="material-icons right">send</i></button>
        </div>
    </form>
  </div>

  <div class="row">
      <div class="col s12 m6">
          <div class="card grey lighten-3">
              <div class="card-content">
                  <span class="card-text tituloCursoExemplo"></span><br><br>
                  <p><b>Data da realização: </b><p class="dataInicialCursoExemplo"></p> - <p class="dataFinalCursoExemplo"></p></p><br>
                  <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                  <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorNaoSocioExemplo">R$ </span>
                    </label>
                </p>
              </div>
              <div class="card-action">
                <p class="red-text">Não Sócio</p>
            </div>
          </div>
      </div>
      <div class="col s12 m6">
          <div class="card grey lighten-3">
              <div class="card-content">
                  <span class="card-text tituloCursoExemplo"></span><br><br>
                  <p><b>Data da realização: </b><p class="dataInicialCursoExemplo"></p> - <p class="dataFinalCursoExemplo"></p></p><br>
                  <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                  <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorCBRExemplo">R$ </span>
                    </label>
                </p>
              </div>
              <div class="card-action">
                <p class="red-text">Sócio CBR</p>
            </div>
          </div>
      </div>
      <div class="col s12 m6">
          <div class="card grey lighten-3">
              <div class="card-content">
                  <span class="card-text tituloCursoExemplo"></span><br><br>
                  <p><b>Data da realização: </b><p class="dataInicialCursoExemplo"></p> - <p class="dataFinalCursoExemplo"></p></p><br>
                  <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                  <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorABCDIExemplo">R$ </span>
                    </label>
                </p>
              </div>
              <div class="card-action">
                <p class="red-text">Sócio ABCDI</p>
            </div>
          </div>
      </div>
      <div class="col s12 m6">
          <div class="card grey lighten-3">
              <div class="card-content">
                  <span class="card-text tituloCursoExemplo"></span><br><br>
                  <p><b>Data da realização: </b><p class="dataInicialCursoExemplo"></p> - <p class="dataFinalCursoExemplo"></p></p><br>
                  <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                  <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorNaoQuiteExemplo">R$ </span>
                    </label>
                </p>
              </div>
              <div class="card-action">
                <p class="red-text">Sócio Não Quite</p>
            </div>
          </div>
      </div>
      <div class="col s12 m6">
          <div class="card grey lighten-3">
              <div class="card-content">
                  <span class="card-text tituloCursoExemplo"></span><br><br>
                  <p><b>Data da realização: </b><p class="dataInicialCursoExemplo"></p> - <p class="dataFinalCursoExemplo"></p></p><br>
                  <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                  <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorParceirosExemplo">R$ </span>
                    </label>
                </p>
              </div>
              <div class="card-action">
                <p class="red-text">Sócio Entidade Parceira</p>
            </div>
          </div>
      </div>
  </div>
</div>

  <!-- Modal Structure -->
  <div id="modalSalvos" class="modal bottom-sheet">
    <div class="modal-content container">
        <table>
            <tr>
                <th>Cursos enviados</th>
                <th>Criado no iCase</th>
            </tr>
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'dbprocedimentos');
            $query = "SELECT id, nome, criado_no_icase FROM tb_criar_cursos";
            $result = mysqli_query($db, $query);
            while ($curso = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>";
                echo "<a href='index.php?curso=".$curso['id']."' class='waves-effect waves-light btn-small' value='".$curso['id']."'>";
                echo $curso['nome'];
                echo "</a>";
                echo "</td>";
                echo "<td>";
                if ($curso['criado_no_icase'] == 0) echo '<a class="btn-floating waves-effect waves-light red"><i class="material-icons">clear</i></a>';
                else echo '<a class="btn-floating waves-effect waves-light green"><i class="material-icons">done</i></a>';
                echo "</td>";
            }
        ?>
        </table>
    </div>
  </div>

   <!-- Modal Structure -->
  <div id="modalLoad" name="modalLoad" class="modal" style="width:300px; height: 250px;">
    <div class="modal-content">
    	<h4 class="center">Enviando...</h4>
    	<div class="cssload-loader-inner">
			<div class="cssload-cssload-loader-line-wrap-wrap">
				<div class="cssload-loader-line-wrap"></div>
			</div>
			<div class="cssload-cssload-loader-line-wrap-wrap">
				<div class="cssload-loader-line-wrap"></div>
			</div>
			<div class="cssload-cssload-loader-line-wrap-wrap">
				<div class="cssload-loader-line-wrap"></div>
			</div>
			<div class="cssload-cssload-loader-line-wrap-wrap">
				<div class="cssload-loader-line-wrap"></div>
			</div>
			<div class="cssload-cssload-loader-line-wrap-wrap">
				<div class="cssload-loader-line-wrap"></div>
			</div>
		</div>
    </div>
  </div>

<!-- JQuery -->
<script src="js\jquery-3.3.1.slim.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="js\materialize.min.js"></script>

<!-- Ativar contador de texto, tooltips, selects
Datepickers, Timepickers e funções para mostrar janelas de pagamento
e Tipo do vencimento -->
<script src="js\funcoes.js"></script>


<script>

	function abrirModalLoad()
	{
		$('#modalLoad').modal('open');
	}

    function trocarTitulo(){
        var i;

        var x = document.getElementsByClassName("tituloCursoExemplo");
        for (i = 0; i < x.length; i++) {
            x[i].innerHTML = document.getElementById("nomeCurso").value.toUpperCase();
        }

        var x = document.getElementsByClassName("dataInicialCursoExemplo");
        for (i = 0; i < x.length; i++) {
            x[i].innerHTML = document.getElementById("datainicial").value;
        }

        var x = document.getElementsByClassName("dataFinalCursoExemplo");
        for (i = 0; i < x.length; i++) {
            x[i].innerHTML = document.getElementById("datafinal").value;
        }

        var x = document.getElementsByClassName("horaInicialCursoExemplo");
        for (i = 0; i < x.length; i++) {
            x[i].innerHTML = document.getElementById("horainicial").value;
        }

        var x = document.getElementsByClassName("horaFinalCursoExemplo");
        for (i = 0; i < x.length; i++) {
            x[i].innerHTML = document.getElementById("horafinal").value;
        }

        document.getElementById("valorNaoSocioExemplo").innerHTML = "R$ " + document.getElementById("valor1").value;
        document.getElementById("valorABCDIExemplo").innerHTML = "R$ " + document.getElementById("valorSocioABCDI1").value;
        document.getElementById("valorCBRExemplo").innerHTML = "R$ " + document.getElementById("valorSocioCBR1").value;
        document.getElementById("valorNaoQuiteExemplo").innerHTML = "R$ " + document.getElementById("valorSocioNaoQuite1").value;
        document.getElementById("valorParceirosExemplo").innerHTML = "R$ " + document.getElementById("valorSocioParceiro1").value;

    }


</script>

</body>
</html>