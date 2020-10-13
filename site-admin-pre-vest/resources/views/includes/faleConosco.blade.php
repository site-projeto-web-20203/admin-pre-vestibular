<form method="POST" action="{{url('/mensagem/nova')}}">
    @csrf
    <div class="card2" align="center">
        <h3 align="center">Fale Conosco</h3>
        <div class="container pt-3" align="left">
            <div class="row">
                <div class="col">
                    <label for="remetente" class="col-form-label text-md-right">Seu Nome</label>
                    <input id="remetente" type="text" class="form-control @error('remetente') is-invalid @enderror" name="remetente" value="{{old('remetente')}}" required autofocus/>
                    @error('remetente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    <label for="email" class="col-form-label text-md-right">Seu E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    <br><input type="submit" class="btn3 btn-primary" value="Enviar" />
                </div>
                <div class="col">
                    <label for="conteudo" class="col-form-label text-md-right">Mensagem</label><br>
                    <textarea id="conteudo" name="conteudo" rows="8" cols="60"></textarea>
                    @error('conteudo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>
