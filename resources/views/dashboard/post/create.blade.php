<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer Crud</title>
</head>
<body>
    <h1>Ingreso de Post</h1>
    <br>
    <br>
    <form action="{{route('post.store')}}" method="post">
        @csrf 
        <label for="">Titulo</label>
        <input type="text" name="Titulo">

        <label for="">Url Corta</label>
        <input type="text" name="slug">

        <label for="">Contenido</label>
        <textarea name="content"></textarea>

        <label for="">Descripcion</label>
        <textarea name="Description"></textarea>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>