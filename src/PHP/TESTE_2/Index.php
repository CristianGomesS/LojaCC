<?php
    
	//testa a variável url que veio lá do htaccess
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
	  {
            $url =  strtoupper($_GET['url']);
           // echo $url;
    		switch ($url){
	    		case "NOVOPRODUTO":
					require "Controller/C-ProdutoInserir.php";    
				    $controlador = new ControleNovoProduto();
					$controlador->processaRequisicao();
					break;
				case "ATUALIZARPRODUTO":
					require "Controller/C-ProdutoAtualizar.php";    
					$controlador = new ControleAtualizarProduto();
					$controlador->processaRequisicao();
					break;
				case "EXCLUIRPRODUTO":
					require "Controler/C-ProdutoExcluir.php";    
					$controlador = new ControladorProdutoExcluir();
					$controlador->processaRequisicao();
					break;
			    case "LISTARPRODUTO":
					require "Controller/C-ProdutoListar.php";
                    $controlador = new ControladorProdutoListar();
                    $controlador->processaRequisicao();
					break;
				case "CADASTRARFUNCIONARIO":
					require "Controller/C-FuncionarioCadastrar.php";
					$controlador = new ControleCadastrarFuncionario();
					$controlador->processaRequisicao();
					break;
				case "EXCLUIRFUNCIONARIO":
					require "Controller/C-FuncionarioDemitir.php";
					$controlador = new ControleExcluirFuncionario();
					$controlador->processaRequisicao();
					break;
				case "ATUALIZARFUNCIONARIO":
					require "Controller/C-FuncionarioAtualizar.php";
					$controlador = new ControleAtualizarFuncionario();
					$controlador->processaRequisicao();
					break;
				case "ATUALIZARCLIENTE":
					require "Controller/C-ClienteAtualizar.php";
					$controlador = new ControleAtualizarCliente();
					$controlador->processaRequisicao();
					break;
				case "CADASTRARCLIENTE":
					require "Controller/C-ClienteCadastrar.php";
					$controlador = new ControleCadastrarCliente();
					$controlador->processaRequisicao();
					break;
				case "LISTARCLIENTE":
					require "Controller/C-ClienteListar.php";
					$controlador = new ControleListarCliente();
					$controlador->processaRequisicao();
					break;
				case "RECUPERACAODENOMEESENHA":
					require "Controller/C-RecuperarSenha.php";
					$controlador = new ControleRecuperarNomeSenha();
					$controlador->processaRequisicao($nome,$senha);
					break;
				default:
				    require "Controller/C-ProdutoListar.php";
				    $controlador = new ControladorProdutoListar();
				    $controlador->processaRequisicao();
				    break;
			
			}
			  
		}
		else                     //senão, vai para uma página padrão, neste caso a home do site
            $url = '404.php';

?>
	