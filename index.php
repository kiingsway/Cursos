<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cursos</title>
    <!-- Deixe o browser saber que esse site serve em mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
    *{font-size: 14px !important;}
    p { display: inline }
    </style>
</head>
<body>


<!--Main Navigation-->
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="font-size: 20px;">Criar Curso</a>
    </div>
  </nav>
<!--Main Navigation-->
            
<div class="container">
  <div class="row">
    <form class="col s12" method="POST" action="#">
      <div class="row">
        <div class="input-field col s6 m6">
            <input id="nomeCurso" type="text" class="contar" data-length="80" onkeyup="trocarTitulo()" required>
            <label for="nomeCurso" class="tooltipped" data-position="top" data-tooltip="Nome que aparecerá no momento da compra">Nome do curso <i class="material-icons">help</i></label>
        </div>
        <div class="input-field col s6 m2">
            <select>
                <option value="1">Curso Presencial</option>
                <option value="2">Curso On-line</option>
                <option value="3">Livro</option>
            </select>
            <label for="form1">Tipo de atividade</label>
        </div>
        <div class="input-field col s12 m3">
            <select class="custom-select" id="inputGroupSelect01">
                <option value="98">[98] Vendas Online</option>
                <option value="99">[99] Congresso 2018</option>
                <option value="102">[102] ESOR 2018</option>
                <option value="105">[105] Congresso 2019</option>
                <option value="0">Outro... (mande e-mail informando)</option>
            </select>  
            <label for="form1">Centro de custo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
            <select class="custom-select" id="inputGroupSelect01">
                <option value="10">(10) 1.1.06 - Inscrições Curso - AVR</option>
                <option value="29">(29) 1.4.01.02 - Congresso Brasileiro Radiologia</option>
                <option value="586">(586) 1.4.01.10 - Curso de Gestão FDC ABCDI</option>                
                <option value="588">(588) 1.4.01.11 - ESOR - Curso de Radiologia</option>
                <option value="288">(288) 1.8.01 - Inscrições para Curso [PADI]</option>
                <option value="591">(591) 1.8.03 - Inscrições para Curso Gestão de Clínicas</option>
                <option value="0">Outro... (mande e-mail informando)</option>
            </select>
            <label for="input_text" class="tooltipped" data-position="top" data-tooltip="Cada curso possui sua Conta Caixa. Qualquer dúvida sobre pergunte ao Financeiro">Conta Caixa <i class="material-icons">help</i></label>
        </div>
        <div class="input-field col s4 m2">
            <p>
                <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Imprimir Certificado</span>
                </label>
            </p>
        </div>
        <div class="input-field col s4 m2">
            <p>
                <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Considerar presença</span>
                </label>
            </p>
        </div>
        <div class="input-field col s4 m2">
            <p>
                <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Imprimir etiqueta</span>
                </label>
            </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m3">
            <input id="datainicial" type="text" class="datepicker" onchange="trocarTitulo()" required>
            <label for="datainicial">Data do Curso</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="datafinal" type="text" class="datepicker" onchange="trocarTitulo()" required>
            <label for="datafinal">Data Final do Curso</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="horainicial" type="text" class="timepicker" onchange="trocarTitulo()">
            <label for="horainicial" class="tooltipped" data-position="top" data-tooltip="Caso o curso ocorrerá em mais de um dia com horários diferentes deixe em branco">Hora do Curso <i class="material-icons">help</i></label>
        </div>
        <div class="input-field col s6 m3">
            <input id="horafinal" type="text" class="timepicker" onchange="trocarTitulo()">
            <label for="horafinal">Hora Final do Curso</label>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s6 m3">
            <input id="InscricoesInicio" type="text" class="datepicker" required>
            <label for="InscricoesInicio">Início das Inscrições</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="InscricoesFim" type="text" class="datepicker" required>
            <label for="InscricoesFim">Fim das Inscrições</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="vagas" type="number" required>
            <label for="vagas">Vagas</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="cargaHoraria" type="number">
            <label for="cargaHoraria">Carga Horária</label>
            <span class="helper-text" data-error="wrong" data-success="right">horas</span>
        </div>
    </div>

    <div class="checkbox-group required">
        <div class="row">
            <h1><b>Sócio</b></h1>  
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="1"/><span>Aperfeiçoando</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="2"/><span>Aspirante</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="3"/><span>Residente</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]"  value="4"/><span>Coligado</span></label></td>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="5"/><span>Titular</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="6"/><span>Titular/Residente</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="7"/><span>Titular/Aperfeiçoando</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="8"/><span>ABCDI</span></label></td>
            </div>
        </div>
        <div class="row">
            <h1><b>Não Sócio</b></h1>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="9"/><span>Padrão</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="10"/><span>Médicos</span></label></td>
            </div>
            <div class="input-field col s6 m3">
                <td class="hoverable"><label><input type="checkbox" class="filled-in" name="cbxCategorias[]" value="11"/><span>Não sócio ABCDI</span></label></td>
            </div>
        </div>
    </div><br><br>

        <div class="row">
            <div class="input-field col s12">
                <select id="selectJanelas" onchange="janelasPgto()">
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
                <input id="dataInicialLote1" type="text" class="datepicker">
                <label for="dataInicialLote1">Data inicial do Lote 1</label>
            </div>
            <div class="input-field row">
                <input id="dataFinalLote1" type="text" class="datepicker">
                <label for="dataFinalLote1">Data Final do Lote 1</label>
            </div>
            <div class="input-field row">
                <input id="valor1" type="number" onkeyup="trocarTitulo()">
                <label for="valor1">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioCBR1" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR1">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioABCDI1" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI1">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioNaoQuite1" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite1">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioParceiro1" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro1">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select id="selectVencimento1" onchange="tipoVencimento1()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias1" class="input-field row">
                <input id="nDias1" type="number">
                <label for="nDias1">n Dias</label>
            </div>
            <div id="divVenc1" class="input-field row">
                <input id="vencimentoLote1" type="text" class="datepicker">
                <label id="labelVenc1" for="vencimentoLote1">Limite de vencimento</label>
            </div>
        </div>
        <div style="display: none" id="divJanela2" class="col s6 m3">
            <div class="input-field row">
                <input id="dataInicialLote2" type="text" class="datepicker">
                <label for="dataInicialLote2">Data inicial do Lote 2</label>
            </div>
            <div class="input-field row">
                <input id="dataFinalLote2" type="text" class="datepicker">
                <label for="dataFinalLote2">Data Final do Lote 2</label>
            </div>
            <div class="input-field row">
                <input id="valor2" type="number" onkeyup="trocarTitulo()">
                <label for="valor2">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioCBR2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR2">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioABCDI2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI2">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioNaoQuite2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite2">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioParceiro2" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro2">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select id="selectVencimento2" onchange="tipoVencimento2()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias2" class="input-field row">
                <input id="nDias2" type="number">
                <label for="nDias2">n Dias</label>
            </div>
            <div id="divVenc2" class="input-field row">
                <input id="vencimentoLote2" type="text" class="datepicker">
                <label id="labelVenc2" for="vencimentoLote2">Limite de vencimento</label>
            </div>
        </div>
        <div style="display: none" id="divJanela3" class="col s6 m3">
            <div class="input-field row">
                <input id="dataInicialLote3" type="text" class="datepicker">
                <label for="dataInicialLote3">Data inicial do Lote 3</label>
            </div>
            <div class="input-field row">
                <input id="dataFinalLote3" type="text" class="datepicker">
                <label for="dataFinalLote3">Data Final do Lote 3</label>
            </div>
            <div class="input-field row">
                <input id="valor3" type="number" onkeyup="trocarTitulo()">
                <label for="valor3">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioCBR3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR3">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioABCDI3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI3">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioNaoQuite3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite3">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioParceiro3" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro3">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select id="selectVencimento3" onchange="tipoVencimento3()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias3" class="input-field row">
                <input id="nDias3" type="number">
                <label for="nDias3">n Dias</label>
            </div>
            <div id="divVenc3" class="input-field row">
                <input id="vencimentoLote3" type="text" class="datepicker">
                <label id="labelVenc3" for="vencimentoLote3">Limite de vencimento</label>
            </div>
        </div>
        <div style="display: none" id="divJanela4" class="col s6 m3">
            <div class="input-field row">
                <input id="dataInicialLote4" type="text" class="datepicker">
                <label for="dataInicialLote4">Data inicial do Lote 4</label>
            </div>
            <div class="input-field row">
                <input id="dataFinalLote4" type="text" class="datepicker">
                <label for="dataFinalLote4">Data Final do Lote 4</label>
            </div>
            <div class="input-field row">
                <input id="valor4" type="number" onkeyup="trocarTitulo()">
                <label for="valor4">Valor normal, sem desconto</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioCBR4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioCBR4">Valor Sócio CBR</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioABCDI4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioABCDI4">Valor Sócio ABCDI</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioNaoQuite4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioNaoQuite4">Valor Sócio não quite</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <input id="valorSocioParceiro4" type="number" onkeyup="trocarTitulo()">
                <label for="valorSocioParceiro4">Valor Entidades Parceiras</label>
                <span class="helper-text" data-error="wrong" data-success="right">R$</span>
            </div>
            <div class="input-field row">
                <select id="selectVencimento4" onchange="tipoVencimento4()">
                    <option value="1">Inscrição +n dias</option>
                    <option value="2">Fixo</option>
                    <option value="3">Data da Inscrição</option>
                </select>
            </div>
            <div id="divNDias4" class="input-field row">
                <input id="nDias4" type="number">
                <label for="nDias4">n Dias</label>
            </div>
            <div id="divVenc4" class="input-field row">
                <input id="vencimentoLote4" type="text" class="datepicker">
                <label id="labelVenc4" for="vencimentoLote4">Limite de vencimento</label>
            </div>
        </div>
        <div class="input-field col s12 center">
            <button class="btn waves-effect waves-light" type="submit" style='padding: 20px 80px; border-radius: 12px; line-height: 8px;' name="action">Enviar
                <i class="material-icons right">send</i>
              </button>
        </div>
    </form>
  </div>

  <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s2"><a class="active" href="#tab1">não Sócio</a></li>
                <li class="tab col s2"><a href="#tab2">Sócio ABCDI</a></li>
                <li class="tab col s2"><a href="#tab3">Sócio CBR</a></li>
                <li class="tab col s3"><a href="#tab4">Sócio Não quite</a></li>
                <li class="tab col s3"><a href="#tab5">Sócio Parceiros</a></li>
            </ul>
        </div>
        <div id="tab1" class="col s12 m12">
            <div class="row">
                <div class="col s12 m6">
                  <div class="card grey lighten-3">
                    <div class="card-content">
                      <span class="card-text tituloCursoExemplo">CURSO DE GESTÃO DE CLÍNICAS - EFETIVIDADE DA RELAÇÃO COMERCIAL COM AS OPERADORAS</span><br><br>
                      <p><b>Data da realização: </b><p class="dataInicialCursoExemplo">28/06/2018</p> - <p class="dataFinalCursoExemplo">29/06/2018</p></p><br>
                      <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                      <p>
                      <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorNaoSocioExemplo">R$ 2854,00</span>
                      </label>
                    </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 boleto">
                    <img src="img/boleto.jpg" style="width:100%;">
                    <div class="boletoNumero"><p style="font-family: Times New Roman">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p></div>
                    <div class="boletoVencimento"><p style="font-family: Times New Roman"><b>xx/xx/20xx</b></p></div>
                    <div class="boletoValor"><p style="font-family: Times New Roman"><b>2850,00</b></p></div>
                </div>
            </div>
        </div>
        <div id="tab2" class="col s12 m12">
            <div class="row">
                <div class="col s12 m6">
                  <div class="card grey lighten-3">
                    <div class="card-content">
                      <span class="card-text tituloCursoExemplo">CURSO DE GESTÃO DE CLÍNICAS - EFETIVIDADE DA RELAÇÃO COMERCIAL COM AS OPERADORAS</span><br><br>
                      <p><b>Data da realização: </b><p class="dataInicialCursoExemplo">28/06/2018</p> - <p class="dataFinalCursoExemplo">29/06/2018</p></p><br>
                      <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                      <p>
                      <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorABCDIExemplo">R$ 2854,00</span>
                      </label>
                    </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 boleto">
                    <img src="img/boleto.jpg" style="width:100%;">
                    <div class="boletoNumero"><p style="font-family: Times New Roman">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p></div>
                    <div class="boletoVencimento"><p style="font-family: Times New Roman"><b>xx/xx/20xx</b></p></div>
                    <div class="boletoValor"><p style="font-family: Times New Roman"><b>2850,00</b></p></div>
                </div>
            </div>
        </div>
        <div id="tab3" class="col s12 m12">
            <div class="row">
                <div class="col s12 m6">
                  <div class="card grey lighten-3">
                    <div class="card-content">
                      <span class="card-text tituloCursoExemplo">CURSO DE GESTÃO DE CLÍNICAS - EFETIVIDADE DA RELAÇÃO COMERCIAL COM AS OPERADORAS</span><br><br>
                      <p><b>Data da realização: </b><p class="dataInicialCursoExemplo">28/06/2018</p> - <p class="dataFinalCursoExemplo">29/06/2018</p></p><br>
                      <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                      <p>
                      <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorCBRExemplo">R$ 2854,00</span>
                      </label>
                    </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 boleto">
                    <img src="img/boleto.jpg" style="width:100%;">
                    <div class="boletoNumero"><p style="font-family: Times New Roman">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p></div>
                    <div class="boletoVencimento"><p style="font-family: Times New Roman"><b>xx/xx/20xx</b></p></div>
                    <div class="boletoValor"><p style="font-family: Times New Roman"><b>2850,00</b></p></div>
                </div>
            </div>
        </div>
        <div id="tab4" class="col s12 m12">
            <div class="row">
                <div class="col s12 m6">
                  <div class="card grey lighten-3">
                    <div class="card-content">
                      <span class="card-text tituloCursoExemplo">CURSO DE GESTÃO DE CLÍNICAS - EFETIVIDADE DA RELAÇÃO COMERCIAL COM AS OPERADORAS</span><br><br>
                      <p><b>Data da realização: </b><p class="dataInicialCursoExemplo">28/06/2018</p> - <p class="dataFinalCursoExemplo">29/06/2018</p></p><br>
                      <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                      <p>
                      <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorNaoQuiteExemplo">R$ 2854,00</span>
                      </label>
                    </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 boleto">
                    <img src="img/boleto.jpg" style="width:100%;">
                    <div class="boletoNumero"><p style="font-family: Times New Roman">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p></div>
                    <div class="boletoVencimento"><p style="font-family: Times New Roman"><b>xx/xx/20xx</b></p></div>
                    <div class="boletoValor"><p style="font-family: Times New Roman"><b>2850,00</b></p></div>
                </div>
            </div>
        </div>
        <div id="tab5" class="col s12 m12">
            <div class="row">
                <div class="col s12 m6">
                  <div class="card grey lighten-3">
                    <div class="card-content">
                      <span class="card-text tituloCursoExemplo">CURSO DE GESTÃO DE CLÍNICAS - EFETIVIDADE DA RELAÇÃO COMERCIAL COM AS OPERADORAS</span><br><br>
                      <p><b>Data da realização: </b><p class="dataInicialCursoExemplo">28/06/2018</p> - <p class="dataFinalCursoExemplo">29/06/2018</p></p><br>
                      <p><b>Horario: </b><p class="horaInicialCursoExemplo"></p> às <p class="horaFinalCursoExemplo"></p></p><br><br>
                      <p>
                      <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span class="black-text" id="valorParceirosExemplo">R$ 2854,00</span>
                      </label>
                    </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 boleto">
                    <img src="img/boleto.jpg" style="width:100%;">
                    <div class="boletoNumero"><p style="font-family: Times New Roman">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p></div>
                    <div class="boletoVencimento"><p style="font-family: Times New Roman"><b>xx/xx/20xx</b></p></div>
                    <div class="boletoValor"><p style="font-family: Times New Roman"><b>2850,00</b></p></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="js/materialize.min.js"></script>

<!-- Ativar contador de texto, tooltips, selects
Datepickers, Timepickers e funções para mostrar janelas de pagamento
e Tipo do vencimento -->
<script src="js/funcoes.js"></script>
<script>
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
