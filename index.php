<?php
$generos = ['Policial', 'Ficção Científica'];

$livros = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $livros = explode(';', $_POST['livros']);
    $livros[] = $_POST['titulo'];

    // $titulo = $_POST['titulo'];
    // $genero = $_POST['genero'];
}

?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Livros</h1>
        <form action="/index.php" method="post">
            <input type="hidden" name="livros" value="<?= implode(';', $livros) ?>" />
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" />
            <label for="genero">Gênero: </label>
            <select name="genero">
            <?php foreach($generos as $k => $g): ?>
                <option value="<?= $k ?>"><?= $g ?></option>
            <?php endforeach ?>
            </select>
            <button type="submit">Enviar</button>
        </form>

        <?php if(isset($titulo)): ?>
        <hr />
        <ul>
            <li>Título: <?= $titulo ?></li>
            <li>Gênero: <?= $generos[$genero] ?></li>
        </ul>
        <?php endif ?>
    </body>
</html>