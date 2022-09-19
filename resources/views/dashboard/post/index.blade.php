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
        <a class="btn btn-primary" href="{{route('post.create')}}">Crear</a>
        <br>
        <br>
    </header>
    <main>
        <div class="container">
            <table class="table">
                <thead>
                    <tbody>
                        <!-- Inicio de creacion de tabla -->
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Titulo
                            </td>
                            <td>
                                Ruta
                            </td>
                            <td>
                                Creación
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                        <!-- fin de creacion de tabla -->
                    </tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{$post->id}}
                            </td>
                            <td>
                                {{$post->Titulo}}
                            </td>
                            <td>
                                {{$post->slug}}
                            </td>
                            <td>
                                {{$post->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$post->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">Ver</a>
                                <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </thead>
                {{$posts->links()}}
            </table>

            
        </div> 
    </main>
</body>
</html>