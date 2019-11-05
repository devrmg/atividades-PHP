<!-- 

3. O usuário deverá digitar  Nome, Peso e a Altura.
Ao enviar para a página de resposta:
Calcular o IMC e mostrar o nome do usuário e como está: “Abaixo do Peso”, “Peso Normal”, etc 

-->

<form action="ex_4r.php" method="post">

    <br>

    <!-- Nome -->
    <label for="nome"> Digite o nome do paciente aqui: </label>
    <br>
    <input type="text" name="nome">
    <br><br>

    <!-- Altura -->
    <label for="altura"> Digite a altura em cm do paciente aqui: </label>
    <br>
    <input type="text" name="altura">
    <br><br>
    
    <!-- Peso -->
    <label for="peso"> Digite o peso em kilogramas do paciente aqui: </label>
    <br>
    <input type="text" name="peso">
    <br><br>
    
    <button type="submit">Send</button>

</form>
