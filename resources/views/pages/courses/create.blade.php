@extends('app')

@section('content')
    <a href="{{ route('cursos.index') }}">Listar</a> <br>
    <a href="{{ route('cursos.show') }}">Visualizar</a> <br>
    <a href="{{ route('cursos.update') }}">Editar</a> <br>

    <h2>Cadastrar cursos</h2>

    <form action="{{ route('cursos.store') }}" method="post">
        @csrf

        <br>
        <label for="name">Nome</label><br>
        <input type="text" id="name" name="name" placeholder="Digite o nome do curso"
        value="{{ old('name') }}" required />

        <button type="submit">Cadastrar</button>
    </form>
@endsection
