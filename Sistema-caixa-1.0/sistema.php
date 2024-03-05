
<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];

    //$sql = "SELECT * FROM usuarios ORDER BY id DESC";

    //$result = $conexao->query($sql);

    //print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sistema</title>
            <style>
                body{
                background-image: linear-gradient(223,225,145,752);
                }
                nav{
                    background-color: dodgerblue;
                    text-align: center
                }
                table{
                    background-color: yellow;
                    text-align: center;
                }
                div{
                    background-color: blue;
                    font-size: 20px;
                    padding: 5px;

                }
                .navbar-toggler-icon{
                    
                }
                .btn{
                    background-color: red;
                    padding: 3px;
                    border: none;
                    color: black;
                }
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: rgb(192, 227, 227);
      
                }

                header, footer {
                    background-color: #333;
                    color: #fff;
                    text-align: center;
                    padding: 10px 0;
                }

                main {
                    display: flex;
                    justify-content: space-around;
                    margin-top: 20px;
                }

                section {
                    border: 1px solid #ccc;
                    padding: 20px;
                    width: 45%;
                }

                .produto, .item-carrinho, .total {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 10px;
                    padding: 10px;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 10px;
                }

                th, td {
                    border: 1px solid #ccc;
                    padding: 8px;
                    text-align: left;
                }

                button {
                    display: block;
                    width: 100%;
                    padding: 10px;
                    background-color: #333;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                }

                button:hover {
                    background-color: #555;
                }
                label{
                    padding: 10px;
                }

            </style>
        </head>
    <body>
        <nav>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            <div class="d-flex">
            
            </div>
        </nav>
        
        <div class="box">
          Bem vindo ao sistema
          

        </div>

        <header>
    <h1>Sistema de Caixa 1.0</h1>
  </header>

    <main>
      <!-- <section class="produtos">-->
        <!-- <h2>Produtos</h2>-->
        <!-- Lista de produtos -->
        <!--<div class="produto" data-name="Produto 1" data-price="12.00">
          <span>Produto 1</span>
          <span>R$ 12,00</span>
          <input type="number" value="1" min="1">
          <button class="adicionar-produto">Adicionar</button>
        </div>

        <div class="produto" data-name="Produto 2" data-price="17.00">
          <span>Produto 2</span>
          <span>R$ 17,00</span>
          <input type="number" value="1" min="1">
          <button class="adicionar-produto">Adicionar</button>
        </div>

        <div class="produto" data-name="Produto 3" data-price="10.00">
          <span>Produto 3</span>
          <span>R$ 10,00</span>
          <input type="number" value="1" min="1">
          <button class="adicionar-produto">Adicionar</button>
        </div> -->

            <section class="produtos">
              <h2>Produtos</h2>
                  <div>
                    <label for="filtro-produtos">Filtrar por nome:</label>
                    <input type="text" id="filtro-produtos">
                    <br>
                    <br>
                    <button id="botao-filtrar">Filtrar</button>
                  </div>
                  <br>
                  <br>
                <!-- Lista de produtos -->

                <!-- Produto Camisa -->

              <div class="produto" data-name="Camisa-m" data-price="25">
                <span>Camisa-m</span>
                <span>R$ 25,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>

              <div class="produto" data-name="Camisa-g" data-price="25">
                <span>Camisa-g</span>
                <span>R$ 25,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>

               <!-- Produto Camisa -->

               <!-- Produto Calça -->
              <div class="produto" data-name="Calça Jeans-40" data-price="45">
                <span>Calça Jeans-40</span>
                <span>R$ 45,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>

              <div class="produto" data-name="Calça Jeans-36" data-price="45">
                <span>Calça Jeans-36</span>
                <span>R$ 45,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>
               <!-- Produto Calça -->

                <!-- Produto Tênis -->
              <div class="produto" data-name="Tênis-40" data-price="60">
                <span>Tênis-40</span>
                <span>R$ 60,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>

              <div class="produto" data-name="Tênis-38" data-price="60">
                <span>Tênis-38</span>
                <span>R$ 60,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>
               <!-- Produto Tênis -->

                <!-- Produto Boné -->

              <div class="produto" data-name="Boné" data-price="30">
                <span>Boné</span>
                <span>R$ 30,00</span>
                <input type="number" value="1" min="1">
                <button class="adicionar-produto">Adicionar</button>
              </div>

               <!-- Produto Boné -->

              <!-- Lista de produtos -->
            </section>  
          <!-- Restante do código dos produtos... -->
        

        <!-- Adicione mais produtos conforme necessário -->
      

      <section class="carrinho">
        <h2>Carrinho</h2>
        <table>
          <thead>
            <tr>
              <th>Produto</th>
              <th>Preço Unitário</th>
              <th>Quantidade</th>
              <th>Subtotal</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody class="itens-carrinho"></tbody>
        </table>
        <div class="total">
          <span>Total:</span>
          <span>R$ 0,00</span>
        </div>

        <div>
          <label for="forma-pagamento">Forma de Pagamento:</label>
            <select id="forma-pagamento">
              <option value="cartao">Cartão</option>
              <option value="dinheiro">Dinheiro</option>
              <option value="pix">PIX</option>
            </select>
        </div>
        <div>
          <label for="cliente" class="labelInput">Cliente</label>
          <input type="text" name="cliente" id="cliente" class="inputUser" required>
        </div>

        <div>
          <label for="categoria">Categoria:</label>
            <select id="categoria">
              <option value="servico">Serviço</option>
              <option value="peca">Peça</option>
            </select>
        </div>

        <div>
          <label for="observacao" class="labelInput">Observacao</label>
          <input type="text" name="observacao" id="observacao" class="inputUser" required>
        </div>

        <button class="finalizar-compra">Finalizar Compra</button>
      </section>
    </main>

  <section class="pedidos-vendidos">
    <h2>Pedidos Vendidos</h2>
    <table>
      <thead>
        <tr>
          <th>Item</th>
          <th>Data</th>
          <th>Forma de Pagamento</th>
          <th>Cliente</th>
          <th>Categoria</th>
          <th>Observacao</th>
          <th>Quantidade</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody class="lista-pedidos-vendidos"></tbody>
    </table>
    <button class="exportar-pedidos">Exportar</button> 
  </section>

  <footer>
    <p>&copy; 2023 Sistema de Caixa</p>
  </footer>

  <script>


  // código filtrar itens...

  document.addEventListener
  ('DOMContentLoaded', function () 
    {
    

      const filtroProdutos = document.getElementById('filtro-produtos');
      const botaoFiltrar = document.getElementById('botao-filtrar');
      const produtos = document.querySelectorAll('.produtos .produto');

      botaoFiltrar.addEventListener
      ('click', function () 
        {
          const termoBusca = filtroProdutos.value.toLowerCase();

          produtos.forEach
          (produto => 
            {
              const nomeProduto = produto.getAttribute('data-name').toLowerCase();
              const produtoElemento = produto;

              if (nomeProduto.includes(termoBusca)) 
              {
                produtoElemento.style.display = 'flex'; // Exibe o produto
              }
              else 
              {
                produtoElemento.style.display = 'none'; // Oculta o produto
              }
            }
          );
        }
      );

  
    }
  );

// código filtrar itens...

// codigo salvar dados no navegador...
// Evento de clique para exportar pedidos
// Botão para imprimir pedidos
    
// codigo salvar dados no navegador...


    document.addEventListener
    ('DOMContentLoaded', function () 
            {
              const produtos = document.querySelectorAll('.produtos .produto');
              const itensCarrinho = document.querySelector('.itens-carrinho');
              const totalCarrinho = document.querySelector('.total span');
              const botaoFinalizarCompra = document.querySelector('.finalizar-compra');
              const listaPedidosVendidos = document.querySelector('.lista-pedidos-vendidos');
              const botaoExportarPedidos = document.querySelector('.exportar-pedidos');
              const selectFormaPagamento = document.getElementById('forma-pagamento');
              const selectCliente = document.getElementById('cliente');
              const selectCategoria = document.getElementById('categoria');
              const selectObservacao = document.getElementById('observacao');
              let totalCompra = 0;

              // Adiciona eventos de clique para adicionar produtos ao carrinho
              produtos.forEach
              (produto => 
                {
                  const adicionarProdutoBtn = produto.querySelector('.adicionar-produto');
                  adicionarProdutoBtn.addEventListener
                  ('click', () => 
                    {
                        const nomeProduto = produto.getAttribute('data-name');
                        const precoProduto = parseFloat(produto.getAttribute('data-price'));
                        const quantidade = parseInt(produto.querySelector('input[type="number"]').value);

                        const itemExistente = Array.from(itensCarrinho.querySelectorAll('tr')).find
                        (item => 
                          {
                            return item.dataset.name === nomeProduto;
                          }
                        );

                        if (itemExistente) 
                        {
                          const quantidadeAtual = parseInt(itemExistente.querySelector('.quantidade').textContent);
                          const novaQuantidade = quantidadeAtual + quantidade;
                          itemExistente.querySelector('.quantidade').textContent = novaQuantidade;
                          const subtotal = precoProduto * novaQuantidade;
                          itemExistente.querySelector('.subtotal').textContent = `R$ ${subtotal.toFixed(0)}`;
                        } 
                      
                      else 

                        {
                          const subtotal = precoProduto * quantidade;
                          const newRow = document.createElement('tr');
                          newRow.dataset.name = nomeProduto;
                          newRow.innerHTML = `
                            <td>${nomeProduto}</td>
                            <td>R$ ${precoProduto.toFixed(0)}</td>
                            <td class="quantidade">${quantidade}</td><td class="subtotal">R$ ${subtotal.toFixed(0)}</td>
                          <td><button class="remover-item">Remover</button></td>
                          `;
                          itensCarrinho.appendChild(newRow);
                        }

                      totalCompra += precoProduto * quantidade;
                      totalCarrinho.textContent = `R$ ${totalCompra.toFixed(0)}`;
                    }
                  );
                }
              );

                  // Evento para remover item do carrinho
                  itensCarrinho.addEventListener

              ('click', event => 

                  {
                    if (event.target.classList.contains('remover-item')) 
                    {
                      const itemToRemove = event.target.closest('tr');
                      const precoItem = parseFloat(itemToRemove.querySelector('td:nth-child(2)').textContent.replace('R$ ', ''));
                      const quantidadeItem = parseInt(itemToRemove.querySelector('.quantidade').textContent);
                      totalCompra -= precoItem * quantidadeItem;
                      totalCarrinho.textContent =`R$ ${totalCompra.toFixed(0)}`;
                      itemToRemove.remove();
                    }
                  }
              );

              // Evento para finalizar compra
              botaoFinalizarCompra.addEventListener

                  ('click', () => 

                    {
                      const formaPagamento = selectFormaPagamento.value;
                      const cliente = selectCliente.value;
                      const categoria = selectCategoria.value;
                      const observacao = selectObservacao.value;
                      const data = new Date().toLocaleDateString();

                      const itensCarrinhoRows = document.querySelectorAll('.itens-carrinho tr');
                      itensCarrinhoRows.forEach

                      (row => 

                        {
                          const nome = row.children[0].textContent;
                          const quantidade = row.children[2].textContent;
                          const valor = row.children[3].textContent.replace('R$ ', '');

                          const newRow = document.createElement('tr');
                          newRow.innerHTML = `
                            <td>${nome}</td>
                            <td>${data}</td>
                            <td>${formaPagamento}</td>
                            <td>${cliente}</td>
                            <td>${categoria}</td>
                            <td>${observacao}</td>
                            <td>${quantidade}</td>
                            <td>${valor}</td>
                            `;
                          listaPedidosVendidos.appendChild(newRow);
                        }
                      );

                      // Limpa o carrinho após finalizar a compra
                      itensCarrinho.innerHTML = '';
                      totalCarrinho.textContent = 'R$ 0,00';
                      totalCompra = 0;
                    }
                  );

              // Evento de clique para exportar pedidos
              botaoExportarPedidos.addEventListener
              ('click', () => 
                {
                  const linhasTabela = document.querySelectorAll('.pedidos-vendidos tbody tr');

                  let textoExportado = 'Item,Data,Cliente,Categoria,Observacao,Quantidade,Valor\n';

                  linhasTabela.forEach
                  (linha => 
                    {
                      const colunas = linha.querySelectorAll('td');
                      colunas.forEach
                      ((coluna, index) => 
                        {
                          textoExportado += coluna.textContent;
                          if (index !== colunas.length - 1) 
                          {
                            textoExportado += ',';
                          } else 
                          {
                            textoExportado += '\n';
                          }
                        }
                      );
                    }
                  );
                  // Limpar a tabela de pedidos
                  const listaPedidosVendidos = document.querySelector('.lista-pedidos-vendidos');
                  listaPedidosVendidos.innerHTML = '';
                  // Gera um nome de arquivo baseado na data e hora atual
                  const agora = new Date();
                  const nomeArquivo = `pedidos_${agora.getFullYear()}/${agora.getMonth() + 1}/${agora.getDate()}_${agora.getHours()}-${agora.getMinutes()}-${agora.getSeconds()}.txt`;

                  // Cria um elemento <a> para fazer o download do arquivo
                  const a = document.createElement('a');
                  const file = new Blob([textoExportado], { type: 'text/plain' });
                  a.href = URL.createObjectURL(file);
                  a.download = nomeArquivo;
                  a.click();
                }
              );

             // Botão para imprimir pedidos
                    

             // Botão para imprimir pedidos


            }
    
    );
  </script>



    </body>
</html>