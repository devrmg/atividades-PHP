<!DOCTYPE html>
<html lang="pt-br">   
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Incluido as classes no objeto
        require './Minha_Classe.php';
        require './Minha_SegundaClasse.php';

        //Criando um Objeto
        $Erik = new Minha_SegundaClasse;

        //Atribuindo dados as classes

        $Erik->setNome('Erik Passos');
        $Erik->setEmpresa('Startup tech');
        $Erik->setIdade(25);
        $Erik->setRamo('Tecnologia');
        var_dump($Erik);
        echo "<hr>";
//Verificando os métodos e funções da Classe, duas formas de verificar
        var_dump(get_class_methods($Erik)); // primeira forma consultando o objeto
        echo "<hr>";
        var_dump(get_class_vars('Minha_SegundaClasse')); //Segunda forma de verificar é consultando a classe
        //Testar qual classe pertence meu objeto
        echo "<hr>";
        var_dump(get_class($Erik));
        echo "<hr>";
        //Verificar se o objeto pertence alguma herança de classe
        var_dump(get_parent_class($Erik));
        echo "<hr>";
        //Descobrindo a classe mãe
        var_dump(is_subclass_of($Erik, 'Minha_Classe'));
        echo "<hr>";

        //Descobrindo se o método existe
        var_dump(method_exists($Erik, 'getNome'));

        //Executando funções dentro do atributos ou executar métodos diretamente no php
        echo "<hr>";
        var_dump(call_user_func('strtoupper', $Erik->getNome()));
        echo "<hr>";
        //Utilizar o método da classe dentro da função, em vez de passar o callback('strtoupper'), iremos passar o array e ele irá o índice como valor e o valor como a função quer ver quer utlizar
        var_dump(call_user_func(array($Erik, 'getIdade')));
        ?>
    </body>
</html>
