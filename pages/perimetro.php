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

$lado1 = filter_input(INPUT_GET,"lado1", FILTER_VALIDATE_FLOAT);
$lado2 = filter_input(INPUT_GET,"lado2", FILTER_VALIDATE_FLOAT);
$lado3 = filter_input(INPUT_GET,"lado3", FILTER_VALIDATE_FLOAT);

if($lado1 == false || $lado2== false || $lado3== false){
    $mensagem = "ERRO: O valor é inválido!!!";
}
if($lado1==0|| $lado2==0 || $lado3==0){
    $mensagem = "ERRO: O valor é inválido!!!";
}
else{
    $perimetro = $lado1+ $lado2+ $lado3;
    $mensagem = "<p>Lado 1=> " . $_GET["lado1"]."</p>".
                "<p>Lado 2=> " . $_GET["lado2"]."</p>".
                "<p>Lado 3=> " . $_GET["lado3"]."</p>".
                "O valor do perimetro é ". $perimetro;}
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

    <div id="resultado">

        <p>
            <?= $mensagem ?>
        </p>

        <!--php echo ou = -->
    </div>
</body>
</html>
