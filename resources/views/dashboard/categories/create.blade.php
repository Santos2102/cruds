<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Categorias</title>
</head>
<body>
<header class="centrar">
        <h1>Ingreso de Categories</h1>
        <br>
        <br>
    </header>
    <main>

        
    <div class="container">
        <form action="{{route('categories.store')}}" method="post">
            @csrf 
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <!-- @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}} </div>
                @endforeach
            @endif -->
            <section class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Titulo</label>
                    <input type="text" name="Titulo" class="input" placeholder="Ingrese un Titulo">
                    @error('Titulo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Url Corta</label>
                    <input type="text" name="slug" class="input" placeholder="Ingrese una URL corta">
                    @error('slug')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 centrar">
                    <button type="submit" class="button ">Enviar</button>
                </div>
            </section>
             
        </form>
        </div> 
    </main>
</body>
</html>