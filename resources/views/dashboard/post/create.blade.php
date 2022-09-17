<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Mi primer Crud</title>
</head>
<body>
    <header class="centrar">
    @include('dashboard.partials.nav-header-main')
        <h1>Ingreso de Post</h1>
        <br>
        <br>
    </header>
    <main>

        
    <div class="container">
        <form action="{{route('post.store')}}" method="post">
           @include('dashboard.partials.sesion-flash-status')
            <section class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Titulo</label>
                    <input type="file" name="Titulo" class="input" placeholder="Ingrese un Titulo" value="{{old('Titulo')}}">
                    @error('Titulo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Url Corta</label>
                    <input type="text" name="slug" class="input" placeholder="Ingrese una URL corta"  value="{{old('slug')}}">
                    @error('slug')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Contenido</label>
                    <textarea name="content" class="textarea" placeholder="Ingrese un Contenido" >{{old('content')}}</textarea>
                    @error('content')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Descripcion</label>
                    <textarea name="Description" class="textarea" placeholder="Ingrese una Descripcion"></textarea>
                </div> -->
                
                <div class="col-xs-12 col-sm-12 col-md-12 centrar">
                    <button type="submit" class="button ">Enviar</button>
                </div>
            </section>
             
        </form>
        </div> 
    </main>
</body>
</html>