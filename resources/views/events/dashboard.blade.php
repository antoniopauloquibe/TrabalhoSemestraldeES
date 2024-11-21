@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Seja Bem-Vindo Admin</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Localização</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <form action="{{ route('events.update', $event->id) }}" method="POST">
                @csrf
                @method('PUT')
                <tr>
                    <td scope="row">{{$loop->index + 1}}</td>
                    <td>
                        <input type="text" name="title" value="{{ $event->title }}" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="description" value="{{ $event->description }}" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="location" value="{{ $event->location }}" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="price" value="{{ $event->price }}" class="form-control">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="{{ route('events.destroy', $event->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $event->id }}').submit();">Deletar</a>
                        <!-- Formulário oculto para deletar evento -->
                        <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>

    @if(count($events) == 0)
        <p>Você ainda não tem pontos turísticos registrados. <a href="/events/create">Adicionar novo ponto turístico</a></p>
    @endif
</div>
@endsection
