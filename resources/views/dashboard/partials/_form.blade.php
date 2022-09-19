@include('dashboard.partials.sesion-flash-status')
            <section class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Titulo</label>
                    <input type="text" name="Titulo" class="input" placeholder="Ingrese un Titulo" value="{{old('Titulo',$post->Titulo)}}">
                    @error('Titulo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Url Corta</label>
                    <input type="text" name="slug" class="input" placeholder="Ingrese una URL corta"  value="{{old('slug',$post->slug)}}">
                    @error('slug')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Contenido</label>
                    <textarea name="content" class="textarea" placeholder="Ingrese un Contenido" >{{old('content',$post->content)}}</textarea>
                    @error('content')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 centrar">
                    <button type="submit" class="button ">Enviar</button>
                </div>
            </section>