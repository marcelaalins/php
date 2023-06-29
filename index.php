<?php 
/*
anotações de aula: 

- testando o comando de output echo e print: 

    echo "<h4>texto menor e dentro de aspas duplas </h4>";

    echo "esse texto é de um comando echo";

    echo "esse texto é do segundo comando echo, e ele os exibe como se fossem de um comando só. sabe como evitar isso? usando tags html, definindo parágrafos, como veremos abaixo";

    echo '<p> parágrafo 1 </p>';

    echo "<p> parágrafo 2 </p>";        

- como fazer comentários: 


    fazemos comentários em php usando barras laterais duplas (//) ou hashtags (#) para comentar apenas uma linha
para comentar todas as linhas abaixo, use barra asterisco (/*)
    que ele automaticamente
        comenta
todas as linhas abaixo desse comando, a menos que você decida "encerrá-lo" com */    



// neste código, para fins de aprendizado e organização, pretendo usar apenas um único comando de saída (output), que é o echo.

#continuando a programação da aula e iniciando meu código PHP



echo '<h1> Arquivo index </h1>';

# USANDO NCLUDE (inclua/incluir): 

    # include 'configuracao.php'

    #com o include, eu consigo utilizar qualquer tipo de arquivo, seja ele de texto, de imagem, etc

# USANDO REQUIRE (requisição):

    # require 'configuracao.php';
    
    #o require é utilizado em arquivos de configuração, que tem conexão com o banco de dados
    #é para arquivos de conexão

# SOLICITANDO REQUISIÇÃO APENAS UMA VEZ (só será executado u ma vez ao abrir a página)

require_once 'sistema/configuracao.php';

include_once 'Helpers.php';





?>