<!DOCTYPE html>
<html lang="pt-br">   
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //Manipulando Array relacional, no array relacional o PHP define o índice 
        $Arr= array('PHP', 'HTML', 'CSS');// a palavra reservada 'array' não precisa mais ser decladara para instanciar um array
        $Arr[]='JS';
        var_dump($Arr);
        echo "<hr>";
        //Outra forma de tratar array relacional
        $ArrB=['PHP', 'HTML', 'CSS'];
        $ArrB[]='JS';
        var_dump($ArrB);
        echo "<hr>";
        foreach ($ArrB as $Lang)://$Lang que é para pegar a linguagem, O construtor foreach fornece uma maneira fácil de iterar sobre arrays
            echo "{$Lang}";
        endforeach;
       echo "<hr>";
       
       //Array Associativo, no array associativo você decide o índice
       $ArrC = ["cargo" => "Programador",
           "Salario" =>2200 ];
       $ArrC['empresa']="Google"; //Adicionando novos índices
       //Alterando os valores do array
       $ArrC['cargo']= "Desenvolvedor Full-Stack";// Alterando o cargo do $ArrC
       $ArrC['Salario']+=5000;//Alterando e somando o salário novo com o antigo
       $ArrC['cargo'].="/Analista Pleno";// Somando strings, adicionando uma nova função
      
        //Trabalhando so dados da Array em uma String
        
       //echo "Eu sou{$ArrC['cargo']} na empresa {$ArrC['empresa']}!<br>" ;//Primeira forma
       echo "<hr>";
       //Extraindo índices e tranformando em variáveis
       extract($ArrC);
       echo "Eu sou {$cargo} na {$empresa} e ganho {$Salario} por mês!";
       
       //Tratando erros no array, utilizar o array_map
       //$ArrC= array_map('trim', $ArrC);// eliminar espaços desnecessários
       //$ArrC= array_map('strip_tags', $ArrC);// eliminar tags desnecessários
       
       //Array Multidimensional
       echo "<br>";
       echo "<hr>";
       $Colaboradores = [];
      
       $Colaboradores[] = ["nome"=>"Erik Passos", "Cargo"=> "Analista Júnior", "Salario"=>2800];
      
       $Colaboradores[] = ["nome"=>"Fernando Souza", "Cargo"=> "Aprendiz", "Salario"=>1500];
       
       $Colaboradores[] = ["nome"=>"João filho", "Cargo"=> "Analista Pleno", "Salario"=>5600];
       
       echo "<hr>";
       
       foreach ($Colaboradores as $Cargo): // pecorrendo e informando a lista
           extract($Cargo);// extraindo e tranformando em varáveis
           echo "{$nome} é {$Cargo} e recebe {$Salario} por mês <hr>";
       endforeach;
      
       var_dump($Colaboradores);
       
     
        
       
       
     
       
       
      
       
       
        
            
        
        
        
        
        
        
        
        ?>
    </body>
</html>
