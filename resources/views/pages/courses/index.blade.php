@extends('app')

@section('content')
    <a href="{{ route('cursos.index') }}">Listar</a> <br>
    <a href="{{ route('cursos.create') }}">Cadastrar</a> <br>
    <a href="{{ route('cursos.update') }}">Editar</a> <br>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <div>
        <h1>Lista de cursos</h1>
    </div>

    <br>

    <table border="1px">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Não existem cursos cadastrados!</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $cursos->links() }}
@endsection
