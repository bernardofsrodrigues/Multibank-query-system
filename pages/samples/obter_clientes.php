<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
<?php
  $title = "Obter Clientes";
  include 'header.php';
?>
<style>
    table {
      border-collapse: collapse;
      width: 100%;
      min-width: 100%;
      margin-bottom: 150px;
      padding: 10px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
    #sidebar {
      position: fixed;
    }
    @media only screen and (max-width: 991px) {
      #sidebar {
        position: absolute;
      }
    }
    /*
    #tabelaConsignacoes,
    #tabelaServidores {
      display: none;
    }
    */
    .pesquisa-div {
            display: flex;
            align-items: center;
        }

        .pesquisa-input {
            flex: 1;
            margin-right: 10px;
        }

        .pesquisa-button {
            width: 100px;
        }
  </style>
        <main class="container" style="margin-bottom: 4%;">
          <div class="bg-trasparent p-5 rounded" style="margin-top: 5%; border-radius: 10px; box-shadow: 0 5px 8px 8px rgba(0,0,0,0.1);">
              <form>
                  <input type="hidden" name="csrfmiddlewaretoken" value="PYKAeZJbQhWukmnGcO3yRRMKugXyJ6aQ919gubRW9PNy38kzgmS3i2uG4Sz8sVVY">
                  <div class="row" class="formulariocel">
                      <div class="col-sm-7" style="display: flex; align-items: baseline;" id="teste">
                        <label style="width: 50%; margin-right: 2%;">Informe o CPF para consulta:</label>
                          <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf">
                      </div>
                      <div class="col">
                          <button style="padding: 2%;" type="button" id="consulta" onclick="getExtrato()" class="btn btn-primary">Consultar</button>
                      </div>
                      <div id="naoencontrado" class="col-sm-12 d-none text-center" style="padding-top:35px;">
                         <h2 class="text-center"> Cliente não encontrado</h2>
                      </div>
                    </div>
                  
              </form>
          </div>
          <br><br>
          <div class="alert alert-danger d-none" role="alert" id="errorr">
            <span>CPF não encontrado.</span>
          </div>

<div id="resposta" class="col-lg-16" style="display: none">

  
              
              <div id="tabelaServidores" class="tabelass col-lg-16">  
                <div class="row mb-2">
                          <div class="col-lg-12">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-4">Dados dos Servidores</h5>
                                <div class="table-responsive">
                                  <table class="table center-aligned-table">
                              <thead>
                                <tr style="color: blue;">
                                  <th>Servidor</th>
                                  <th>Matrícula</th>
                                  <th>CPF</th>
                                  <th>Serviço</th>
                                  <th>Margem Disponível</th>
                                  <th>Margem Total</th>
                                </tr>
                              </thead>
                    <tbody>
                      </tbody>
                    </table>
              
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>

                
              <br><br>   

        <div id="filtros" class="bg-trasparent p-4 rounded" style="border-radius: 10px; box-shadow: 0 5px 8px 8px rgba(0,0,0,0.1); display: flex; align-items: baseline;">
        </div>

        <br><br>

            
<div id="tabelaConsignacoes" class="tabelass col-lg-16">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Consignações</h5>
                    <div class="table-responsive">

                    <div class="col-sm-4 pesquisa-div mb-3 float-right">
                        <input type="text" id="termoPesquisa" class="form-control pesquisa-input" placeholder="Digite sua pesquisa..." onkeyup="pesquisar()">
                    </div>                        

                        <table class="table center-aligned-table tabelaConsignacoes mt-2">
                            <thead>
                                <tr style="color: blue;">
                                    <th colspan="1">Consignataria</th>
                                    <th colspan="1">Situação</th>
                                    <th colspan="1">Serviço</th>
                                    <th colspan="1">ADE</th>
                                    <th colspan="1">Quant.<br>Prestações</th>
                                    <th colspan="1">Prest.<br>Pagas</th>
                                    <th colspan="1">Valor<br>Prest.</th>
                                    <th colspan="1">Deferimento</th>
                                    <th colspan="1">Quitação</th>
                                    <th colspan="1">Último<br>Desconto</th>
                                    <th colspan="1">Última<br>Parcela</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
          
<!--

                  <br><br>

                  <table border="1">
        <thead>
            <tr>
                <th>Processamento ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Erro</th>
                <th>Status</th>
                <th>Consignatárias</th>
            </tr>
        </thead>
        <tbody id="dadosTabela">
        
      </tbody>
    </table>  


  -->
</div>
  </main>
        <footer class="footer" style="position: fixed; bottom: 0; z-index: 1;">
          <div class="container-fluid clearfix">
            <span class="float-right">
              <a href="#"></a>
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <script src="API's/login.js"></script>
  <script src="API's/clientes/obter_clientes.js"></script>
    <script src="API's/clientes/processamento_id.js"></script>

  <script>

    function pesquisar() {
      var termoPesquisa = $("#termoPesquisa").val().toUpperCase(); 
      var linhasTabela = document.querySelectorAll("#tabelaConsignacoes tbody tr");

      linhasTabela.forEach(function(linha) {
          var textoLinha = linha.textContent.toUpperCase();
          if (textoLinha.includes(termoPesquisa)) {
              linha.style.display = ""; 
          } else {
              linha.style.display = "none"; 
          }
      });
    }



    var tipo = true;
    function ChangeFiltro(){
        console.log("ok")
        
        var selectVal = $("#filtro option:selected").val();
        setFilter(selectVal);
    }
    function setFilter(filter){
        var table = $('#table_situacao_dt').DataTable();
        table.search( "" );
        if(filter != 'Todas'){
            table.search( filter );
        }

        table.draw();
    }

    function getSituacao(newData){
        var table_situacao  = "<div class='searchPanes'></div><table id='table_situacao_dt' class='display nowrap compact'><thead><tr>";
                    $.each(newData.situacao.titulos, function (i, titulos) {
                        table_situacao =  table_situacao +"<th>"+ titulos +"</th>";
                    })
                    var situacao = [];
                    table_situacao = table_situacao + "</tr></thead><tbody><tr>";
                    $.each(newData.situacao.conteudo, function (i, conteudo) {
                        $.each(conteudo, function (i, ctd) {
                            if (i == 1){
                                situacao.push(ctd);
                            }
                            table_situacao =  table_situacao +"<td>"+ ctd +"</td>";
                        });
                        table_situacao = table_situacao + "</tr>";
                    });

                    let _situacao = Array.from(new Set(situacao));
                    var options = "";
                    $.each(_situacao, function (i, ctd) {
                            options += "<option value='"+ctd+"'>"+ctd+"</option>";
                        });

                    table_situacao = table_situacao + "</tbody></table>";
                    // table_situacao 
                    // = " <div class='row' style='margin-bottom: -10px;'><div class='col-sm-2 text-right'>Filtrar pela situação:</div><div class='col-sm-4'><select id='filtro' onchange='ChangeFiltro()' class='form-select form-select-sm filtro' aria-label='.form-select-sm example'>"+
                    // "<option selected>Todas</option>"+
                    // options+
                    // "</select></div></div>" + table_situacao;

        return table_situacao;
    }
    function ChangeFiltro(){
        console.log("ok")
        
        var selectVal = $("#filtro option:selected").val();
        setFilter(selectVal);
    }
    
    function limparTabelas() {
    const tabelas = document.querySelectorAll('.tabelass table tbody');
    tabelas.forEach(tabela => {
        tabela.innerHTML = '';
    });
}

    function setFilter(filter){
        var table = $('#table_situacao_dt').DataTable();
        table.search( "" );
        if(filter != 'Todas'){
            table.search( filter );
        }

        table.draw();
    }

    function getRetorno(newData){
        var table_retorno  = "<table id='table_retorno_dt' class='display nowrap'><thead><tr>";
            
        $.each(newData.retorno.titulos, function (i, titulos) {
            table_retorno =  table_retorno +"<th>"+ titulos +"</th>";
        })
        
        table_retorno = table_retorno + "</tr></thead><tbody><tr>";
            
        $.each(newData.retorno.conteudo, function (i, conteudo) {
            $.each(conteudo, function (i, ctd) {
                table_retorno =  table_retorno +"<td>"+ ctd +"</td>";
            });
            table_retorno = table_retorno + "</tr>";
        });

        table_retorno = table_retorno + "</tbody></table>";
        return table_retorno;
    }
    
    function filtrarPorSituacao(situacao) {
      const dadosString = JSON.parse(localStorage.getItem("dados"))
      if(situacao == null){
        function criarLinhasTabela(dadosFiltrados, tabelaId) {
                    const tabela = document.getElementById(tabelaId);
                    const tbody = tabela.querySelector('tbody');

                    tbody.innerHTML = '';

                    dadosFiltrados.forEach(item => {
                      const linha = document.createElement('tr');

                      Object.values(item).forEach(valor => {
                        const coluna = document.createElement('td');
                        coluna.textContent = valor;
                        linha.appendChild(coluna);
                      });

                      tbody.appendChild(linha);
                    });
                  }
      criarLinhasTabela(dadosString, 'tabelaConsignacoes');
      }else{
        const dadosFiltrados = dadosString.filter(item => item.situacao === situacao);
      // Aqui você pode fazer algo mais com os dados filtrados, se necessário
      function criarLinhasTabela(dadosFiltrados, tabelaId) {
                    const tabela = document.getElementById(tabelaId);
                    const tbody = tabela.querySelector('tbody');

                    tbody.innerHTML = '';

                    dadosFiltrados.forEach(item => {
                      const linha = document.createElement('tr');

                      Object.values(item).forEach(valor => {
                        const coluna = document.createElement('td');
                        coluna.textContent = valor;
                        linha.appendChild(coluna);
                      });

                      tbody.appendChild(linha);
                    });
                  }
      criarLinhasTabela(dadosFiltrados, 'tabelaConsignacoes');
      }
    }
    
    
    function getExtrato() {
        let tabelas = document.getElementsByClassName('tabelass');
        let tabela_filtro = document.getElementById('resposta');
        
        limparTabelas()
        
        document.getElementById('filtros').innerHTML = '<p style="margin-left: 1%; margin-right: 1%">Filtros: </p>';
        controlExibicao("Consultando");
        $.ajax({
                url: "http://consigconsult.us-east-1.elasticbeanstalk.com/api/extrato?cpf="+$( "#cpf" ).val().replace(/([^\d])+/gim, ''),
                type: "GET",
                success: function(dados){
                  let errorr = document.getElementById('errorr');
                  errorr.classList.add('d-none');

                  console.log(dados);


                  //filtro botoes
                  const dados_local_1 = JSON.stringify(dados.consignacoes)
                  console.log(dados_local_1)
                  localStorage.setItem("dados", dados_local_1);

                  const situacoesUnicas = [...new Set(dados.consignacoes.map(item => item.situacao))];
                  
                    

                  situacoesUnicas.forEach(situacao => {
                      var dados_local = JSON.parse(localStorage.getItem("dados"));

                    // Verificar se os dados foram recuperados com sucesso
                    if (dados_local) {
                        // Extrair as situações únicas dos dados
                        const situacoesUnicas = [...new Set(dados_local.map(item => item.situacao))];
                    
                        // Criar um objeto para armazenar a contagem de cada situação única
                        const contagemSituacoes = situacoesUnicas.reduce((acc, situacao) => {
                            // Contar as ocorrências da situação atual nos dados
                            const contagem = dados_local.filter(item => item.situacao === situacao).length;
                            // Armazenar a contagem no objeto
                            acc[situacao] = contagem;
                            return acc;
                        }, {});
                    
                        // Exibir a contagem de cada situação única
                        console.log(JSON.stringify(contagemSituacoes));
                        const button = document.createElement("button");
                    const span = document.createElement("span");
                    span.className += "badge bg-secondary  ml-1";
                    span.textContent = contagemSituacoes[situacao];
                    button.textContent = situacao;
                    button.className += "btn btn-primary";
                    if (situacao === 'Cancelada') {
                      button.className += 'btn btn-danger';
                    }
                    button.appendChild(span);
                    button.style.marginRight = "1.6%";
                    button.addEventListener("click", () => filtrarPorSituacao(situacao));
                    document.getElementById('filtros').appendChild(button);
                    }
                    
                  });

                  const button = document.createElement("button");
                    button.textContent = "Todos";
                    button.className += "btn btn-success";
                    button.addEventListener("click", () => filtrarPorSituacao(null));
                    document.getElementById('filtros').appendChild(button);


                  function criarLinhasTabela(dados, tabelaId) {
                    tabela_filtro.style.display = 'block';
                    const tabela = document.getElementById(tabelaId);
                    const tbody = tabela.querySelector('tbody');

                    tbody.innerHTML = '';

                    dados.forEach(item => {
                      const linha = document.createElement('tr');

                      Object.values(item).forEach(valor => {
                        const coluna = document.createElement('td');
                        coluna.textContent = valor;
                        linha.appendChild(coluna);
                      });

                      tbody.appendChild(linha);
                    });
                    
                  }
                  
                   criarLinhasTabela(dados.dadosServidores, 'tabelaServidores');
                   criarLinhasTabela(dados.consignacoes, 'tabelaConsignacoes');
                   
                   for (let i = 0; i < tabelas.length; i++) {
                     tabelas[i].classList.remove('d-none');
                    }
                    
                    controlExibicao(false);
                    
                  },
                  error: function(error){
                    let errorr = document.getElementById('errorr');
                    setTimeout(() => {
                      errorr.classList.remove('d-none');  
                      console.log(error.status);
                      console.log("error.status");
                    }, 6000);
                  
                    
                    if(error.status == 403){
                      alert("Ops, Login multiplo identificado ou sessão expirada, favor logar novamente.");
                      window.location.href = "login.html";
                    } 
                    controlExibicao(false);
                  }
            });
    }
    function controlExibicao(contains){
        $('#consulta').removeClass("btn-secondary").attr("disabled", false).html("Consultar");
        
        if(contains == "Consultando"){
            $('#consulta').addClass("btn-secondary").attr("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Realizando consulta');
            $('#naoencontrado').addClass("d-none");
            $('#table_situacao').empty();
            $('#table_retorno').empty();
        }

        else if(contains == false){
        $('#consulta').removeClass("btn-secondary").attr("disabled", false).html("Consultar");
          
        }
        
    }

</script>
</body>

</html>
