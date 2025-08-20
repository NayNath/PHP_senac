<?php

/* 
    Para rodar o PHP:
    - inicializar o servidor apache(xampp) {o php não roda m qualquer navegador};
    - colocar a pasta do projeno no htdocs;
    - acessar o localhost(127.0.0.0) com o browser acrecido da pasta do projeto;
    - 
*/ 

//echo $_POST; post = dado sensivel
//echo $_GET; get = mostra os dados
//Envia uma ou mais expressões para a saída, sem novas linhas ou espaços adicionais.

//var_dump = ajuda a fazer validação
//var_dump($_POST);
//var_dump($_GET);

// $ = variavel
// o '.' é equivalente a o '+'
// + - *(multiplicação), /(divisão), %(modulo), **(elevado)

$perimetro = $_GET["lado1"]+ $_GET["lado2"]+ $_GET["lado3"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perimetro</title>
    <link rel="stylesheet" href="./../css/style.css">
</head>
<body>
    <h1> Resultado do perimetro do triângulo</h1>

    <form action="">
        <div id="resultado">
        <?php echo"O valor do perimetro desse triângulo é: ".$perimetro."!";?>
    </form>
    
</body>
</html>
