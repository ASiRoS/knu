@extends('app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Файл</th>
            <th>Действия</th>
            <th><a class="btn btn-primary" href="{{ route('admin.blanks.create') }}">Добавить бланк</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($blanks as $blank)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $blank->name }}</td>
                <td><a href="{{ asset($blank->link) }}">Скачать</a></td>
                <td><a href="{{ route('admin.blanks.edit', ['book' => $blank]) }}">Редактировать</a></td>
                <td>@include('partitions.delete', ['link' => route('admin.blanks.destroy', ['book' => $blank])])</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $blanks->links() }}
@stop