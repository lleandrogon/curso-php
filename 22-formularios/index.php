<html>

<body>

    <?php
        if (isset($_POST["enviar-formulario"])) {
            // Array de erros
            $erros = array();
            
            // Sanitize
            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
            
            $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
            if (!filter_var($idade, FILTER_VALIDATE_INT)) {
                $erros[] = "Idade precisa ser um inteiro";
            }

            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = "Email inválido";
            }

            $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $erros[] = "URL inválida";
            }

            // Exibindo mensagem
            if (!empty($erros)) {
                foreach($erros as $erro) {
                    echo "<li> $erro </li>";
                }
            } else {
                echo "Parabéns, seus dados estão corretos!";
            }
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br>
    </form>

</body>

</html>