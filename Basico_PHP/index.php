<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aprendendo PHP</title>
        <link rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <main class="container">
            <section class="content ">

                <form method="get" action="formulario.php">
                    <label class="medium">
                        <span>Nome:</span>
                        <input type="text" name="nome" title="Informe seu nome:" placeholder="Informe seu nome" required/>
                    </label>

                    <label class="medium">
                        <span>E-mail:</span>
                        <input type="email" name="email" title="Informe seu email:" placeholder="Informe seu email" required/>
                    </label>

                    <label>
                        <span>Mensagem</span>
                        <textarea rows="3" name="mensagem" title="Deixe sua mensagem" placeholder="Deixe sua mensagem" required></textarea>
                    </label>




                    <button>Enviar Contato!</button>
                </form>

                <br>
                <br>
                <br>
                <hr>
                <form method="get" action="exercicio1.php">
                    <label class="medium">
                        <span>Nome:</span>
                        <input type="text" name="nome" title="Informe seu nome:" placeholder="Informe seu nome" required/>
                    </label>

                    <label class="medium">
                        <span>Idade</span>
                        <input type="date" name="date" title="Informe sua idade:" placeholder="Informe sua idade" required/>
                    </label>






                    <button>Enviar Contato!</button>
                </form>

                <br>
                <br>
                <br>
                <hr>
                <form method="get" action="exercicio2.php">
                    <label class="medium">
                        <span>Nome:</span>
                        <input type="text" name="nome" title="Informe seu nome:" placeholder="Informe seu nome" required/>
                    </label>

                    <label class="medium">
                        <span>Numero:</span>
                        <input type="number" name="num"/>

                    </label>
                    <fieldset><legend>Operação</legend>
                        <input type="radio" name="oper" id="dobro" value="1" />
                        <label for="dobro">Dobro</label>
                        <input type="radio" name="oper" id="cubo" value="2" />
                        <label for="cubo">Cubo</label>
                        <input type="radio" name="oper" id="raiz" value="3" />
                        <label for="raiz">Raiz</label>


                    </fieldset>





                    <button>Enviar Contato!</button>
                </form>
                <br>
                <hr>

                <form method="get" action="exercicio3.php">
                    <?php
                    // multiplicando caixas de formulário com php 
                    $form = 1;

                    while ($form <= 5):

                        echo "<label>
                        <span>Nome:</span>
                        <input type='text' name='nome' title='Informe seu nome:' placeholder='Informe seu nome' required/>
                    </label>

                    <label>
                        <span>Numero:</span>
                        <input type='number' name='num'/>";
                        $form++;
                    endwhile;
                    ?>
                    </label>
                    <fieldset><legend>Operação</legend>
                        <input type="radio" name="oper" id="dobro" value="1" />
                        <label for="dobro">Dobro</label>
                        <input type="radio" name="oper" id="cubo" value="2" />
                        <label for="cubo">Cubo</label>
                        <input type="radio" name="oper" id="raiz" value="3" />
                        <label for="raiz">Raiz</label>


                    </fieldset>





                    <button>Enviar Contato!</button>
                    <a href="exercicio3.php">Exercício 3</a>
                </form>

                <br>
                <hr>

                <form method="get" action="exercicio3.php">

                    <label>
                        <span>Inicio:</span>
                        <input type="number" name="num1"/>

                    </label>



                    <label>
                        <span>Fim:</span>
                        <input type="number" name="num2"/>

                    </label>
                    <label for="incremento">Incremento:</label>
                    <select name="inc">
                        <option value="1">x1</option> 
                        <option value="2">x2</option>
                        <option value="3">x3</option>
                    </select>




                    <button>Enviar Contato!</button>
                </form>










                <div class="clear"></div>
            </section>
        </main>
    </body>
</html>
