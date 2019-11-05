<!DOCTYPE html>
<html lang="pt-br">   
    <head>
        <meta charset="UTF-8">
        <title>Gerenciando Arrays</title>
    </head>
    <body>
        <?php
        // Gerenciando Arrays , alterando dados do html

        $Pessoa['nome'] = "Erik Passos <hr>  ";

        $Pessoa = array_pad($Pessoa, 5, null); // criando ínidices
        $Pessoa = array_filter($Pessoa); // array_filter -> eliminar qualquer campo em branco, null e false
        $Pessoa = array_map('strip_tags', $Pessoa); // tratando erros 
        $Pessoa = array_map('trim', $Pessoa); // eliminando espaços

        array_push($Pessoa, ['idade' => 29]); // array_push — Adiciona um ou mais elementos no final de um array
        array_pop($Pessoa); // Remove o último ínidice
        array_unshift($Pessoa, 29); //Adiciona um índice no início do array
        array_shift($Pessoa); // Remove o índice no início

        $Pessoa['idade'] = 28;
        $Pessoa['job'] = "Desenvolvedor full-stack Pleno";
        $Pessoa = array_reverse($Pessoa); // invertendo a ordem dos elementos no array

        $Empresa['empresa'] = "Startup Tecnologia";
        $Empresa['Setor'] = "Treinamento tecnologico";

        $Casa['cidade'] = "Salvador";

        $Pessoa = array_merge($Pessoa, $Empresa, $Casa); //array_merge — Combina um ou mais arrays
        var_dump($Pessoa);

        echo "<hr>";

        var_dump(array_keys($Pessoa)); // Pegar só os índices do arrays
        echo "<hr>";
        var_dump(array_values($Pessoa)); // Pegar só os valores
        echo "<hr>";
        var_dump(array_slice($Pessoa, 2, 4));
        echo "<hr>";
        var_dump("O array tem " . count($Pessoa) . " índices"); // count — Conta o número de elementos de uma variável, ou propriedades de um objeto
        echo "<hr>";

        if (in_array("Erik Passos", $Pessoa))://in_array — Checa se um valor existe em um array
            echo "Existe o nome pesquisado";
        else:
            echo "Não Existe o nome pesquisado";
        endif;

        echo "<hr>";

        asort($Pessoa); //Ordena um array mantendo a associação entre índices e valores
        arsort($Pessoa); // Ordena pela ordem reversa do valor
        ksort($Pessoa); //Ordena pelo índice
        krsort($Pessoa); // Ordena pela ordem rever do índice

        sort($Pessoa); // remevoe os índices de associação e transforma em relacional que ordena do menor para o maior
        rsort($Pessoa); // rsort — Ordena um array em ordem descrescente
        var_dump($Pessoa);

        echo "<hr>";
        $Nomes = "Erik Passos, Livia Damasceno, Cléo Pires";
        $Nomes = explode(', ', $Nomes); // explode -> transformar uma string em array
        $Nomes = implode($Nomes, ', '); // transformar um array em strings
        var_dump($Nomes);
        ?>
    </body>
</html>
