<?php
    
	//testa a variável url que veio lá do htaccess
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
	  {
            $url =  strtoupper($_GET['url']);
           // echo $url;
    		switch ($url){
	    		case "NOVOLIVRO":
					require "Controladores/ControladorFormLivro.php";    
				    $controlador = new ControladorFormProduto();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRLIVRO":
					require "Controladores/ControladorNovoLivro.php";    
					$controlador = new ControladorNovoProduto();
					$controlador->processaRequisicao();
					break;
				case "EXCLUIRLIVRO":
					require "Controladores/ControladorLivroExcluir.php";    
					$controlador = new ControladorProdutoExcluir();
					$controlador->processaRequisicao();
					break;
			    case "LISTARLIVRO":
					require "Controladores/ControladorLivroListar.php";
                    $controlador = new ControladorProdutoListar();
                    $controlador->processaRequisicao();
					break;
				default:
				    require "Controladores/ControladorLivroListar.php";
				    $controlador = new ControladorProdutoListar();
				    $controlador->processaRequisicao();
				    break;
			
			}
			  
		}
		else                     //senão, vai para uma página padrão, neste caso a home do site
            $url = '404.php';

?>
	