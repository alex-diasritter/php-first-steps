<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Cadastro</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["name"] ?? "Null";
        $s = $_GET["name2"] ?? "Null";
        echo "Usuario: $n $s";
        ?>
    </main>
</body>
</html>