<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0 justify-content-center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('new.password.email') }}">
                @csrf
                <div class="card justify-content-center">
                    <h3>Recuperar Senha</h3><br>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="email" class="text-md-right">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-m-6">
                            <label for="tipo_conta">Tipo de Conta</label><br>
                            <select name="tipo_conta" id="tipo_conta">
                                <option value="admin">Administrador</option>
                                <option value="professor">Professor</option>
                                <option value="aluno">Aluno</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col">
                            <button type="submit" class="btn2 btn-primary">
                                {{ __('Enviar Link de Recuperação') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
