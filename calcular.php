<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora Simplex - Resultado</title>
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="css/folhaEstilo.css">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" sizes="512x512" href="img/favicon.ico">
		<!-- javascript -->
		<script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div id="corpo">
                <header id="cabecalho-topo">
                    <h1>Calculadora Simples</h1>
                </header>
			    <main id="resultado">
                    <?php
                        #Funções
                        function falha() {
                            print_r('<p>Você não selecionou um operador da matemática para realizar o cálculo</p>');
                        }
						
						# Função para somar
						function soma($num1,$num2) {
							$result = $num1 + $num2;
							echo "<p>A soma entre $num1 e $num2 é $result.</p>";
						}
						
						# Função para a subtração
						function subtracao($num1,$num2) {
							$result = $num1 - $num2;
							echo "<p>A subtração entre $num1 e $num2 é $result.</p>";
						}
						
						# Função para a multiplicação
						function multiplicacao($num1,$num2) {
							$result = $num1 * $num2;
							echo "<p>A multiplicação entre $num1 e $num2 é $result.</p>"; 
						}
						
						# Função para a divisao
						function divisao($num1,$num2) {
							$result = $num1 / $num2;
							echo "<p>A divisâo entre $num1 e $num2 é $result.</p>"; 
						}	
						
						# Função de potência
						function potenciacao($num1,$num2) {
							$result = $num1 ** $num2;
							echo "<p>A potência entre $num1 e $num2 é $result.</p>";
						}
						
						# Função para exibi a informação sobre a linguagem php
						function informacao() {
							phpinfo();
						}
						
                        # Variáveis para capturar os valores digitados pelo usuário
                        $n1 = $_GET['num1'];
                        $n2 = $_GET['num2'];
                        $selecao = $_GET['campoSelecao'];

                        switch($selecao) {
                            case 'soma':
                                soma($n1,$n2);
                                print_r('<br/>');
                                break;
                            case 'subtracao':
                                subtracao($n1,$n2);
                                break;

                            case 'multiplicacao':
                                multiplicacao($n1,$n2);
                                break;
                            
                            case 'divisao':
                               divisao($n1,$n2);
                               break;
							   
							case 'potencia':
								potenciacao($n1,$n2);
								break;
							   
							case 'info':
								informacao();
								break;

                            default:
                                falha();
                                print_r('<br/>');
                                break;
                        }
                    ?>

                    <a href="index.html" rel="prev" target="_self" hreflang="pt-BR" id="btn-voltar">Voltar</a>

                </main>
    
                <footer id="rodape">
				    <p>Desenvolvido por <a href="https://github.com/Fernandosantos0" rel="external" target="_blank" hreflang="en">Fernando Santos</a></a> <br>
				    copyright &copy; <time id="ano"></time></p>
                </footer>

    </body>
</html>