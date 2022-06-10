<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gêneros</title>
    </head>
    <body>
        <h1>Novo Gênero</h1>
        <form action="index_json.php" method="post">
            <input type="hidden" name="generos" 
                value='<?= (isset($generos)) ?
                     json_encode($generos) : json_encode([]) ?>' />
            <label for="nome">Gênero</label>
            <input type="text" name="nome" />
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>