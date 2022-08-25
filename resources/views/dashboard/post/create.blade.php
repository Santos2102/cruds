<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Mi primer Crud</title>
</head>
<body>
    <header class="centrar">
        <h1>Ingreso de Post</h1>
        <br>
        <br>
    </header>
    <main>
      
            <form action="{{route('post.store')}}" method="post">
                @csrf 
                <div class="container">
                <section class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="">Titulo</label>
                        <input type="text" name="Titulo" class="input" placeholder="Ingrese un Titulo">
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="">Url Corta</label>
                        <input type="text" name="slug" class="input" placeholder="Ingrese una URL corta">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="">Contenido</label>
                        <textarea name="content" class="textarea" placeholder="Ingrese un Contenido"></textarea>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="">Descripcion</label>
                        <textarea name="Description" class="textarea" placeholder="Ingrese una Descripcion"></textarea>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 centrar">
                        <button type="submit" class="button ">Enviar</button>
                    </div>
                </section>
                </div>  
            </form>
        
      
    </main>
    
</body>
</html>