@extends('main')
@section('title', 'Contato')
@section('content')

    <div class="contato">
        <div class="row">
            <div class="col-md-6 jumbotrom mx-auto">
                <div class="form-group">
                    <h2>Formulario de contato</h2>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="error">{{ $error }}</li>
                            @endforeach
                            </div>
                        </ul>
                @endif

                <form method="post" action="/contato">
                    @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Digite seu nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Digite seu email">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" class="form-control" cols="10" rows="5" placeholder="Digite sua Mensagem"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection