<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Evento</title>
</head>
<body>
        <label for="">Nome</label><br>
        <input type="text" name="nome" value="{{ $evento->nome }}"><br>
        <label for="">Data</label><br>
        <input type="date" name="data" value="{{ $evento->data }}"><br>
        <label for="">localizacao</label><br>
        <input type="text" name="nome" value="{{ $evento->localizacao }}"><br>
        <label for="">foto</label><br>
        <input type="text" name="nome" value="{{ $evento->foto }}"><br>
        <label for="">Descrição</label><br>
        <input type="text" name="descricao" value="{{ $evento->descricao }}"><br>
</body>
</html>