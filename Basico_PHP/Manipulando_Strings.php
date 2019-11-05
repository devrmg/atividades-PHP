<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Manipulando Strings com PHP</title>
    </head>
    <body>
        <?php
        //Manipulando Strings com PHP
        $Nome= "Erik Passos <br>";
        echo strtolower($Nome);//strtolower() coloca as strings em minusculas;
        echo strtoupper($Nome);// strtoupper coloca as stringas em Maiusculas;
        echo ucwords($Nome);//ucwords primeira palavra em maiuscula;
        echo ucfirst($Nome);//ucfirst coloca a primeira palavra de cada paragrafo em maiusculo;
        
        //Trantando nomes de imagem
        
        $img= "NOME DA IMAGEM.jpg";
        
        $imagem= strtolower(str_replace(' ', ' -', $img));//strtolower() transformei minha string em minuscula, str_replace() substituir os valores da minha string;
                                                          // Troquei meus espaços em brancos por "-"   ;                          
        echo $imagem;
        
        for($i=0; $i<=10; $i++):
            echo str_pad($i, 2, 0, STR_PAD_LEFT). "<br>";//str_pad — Preenche uma string para um certo tamanho com outra string;
                                                         //$i variável, "2" quantidade de caracteres, "0" soma dos caracteres, "STR_PAD_LEFT" posição do "0";
        endfor;
        
        echo "<hr>";
        
        //Repetindo Strings
         $repita="Bahia Campeão do Campeonato Baiano <br> Copa do Nordeste<br> Copa do Brasil<br>  Sulamericana 2018<br>";
         echo str_repeat($repita, 10);//str_repeat — Repete uma string "20" valor de vezes que eu mandei repetir;
        
         echo "<hr>";
         
         //Pegando o Primeir Nome
         $NovoNome= "Erik Fernando Bonifácio Passos";
         echo substr($NovoNome, 0,3);//substr retorna parte de uma string, "0" posição inicial e "3" posição final da string a ser selecionada;
         echo "<br>";
         echo substr($NovoNome, 0, strpos($NovoNome, ' '));//substr retorna parte de uma string, "0" posição inicial, strpos — Encontra a posição da primeira ocorrência de uma string " " -> vazio
         echo substr($NovoNome,strrpos($NovoNome, ' '));// Pega primeira ocorrência da direita para a esquerda
         
         
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>
