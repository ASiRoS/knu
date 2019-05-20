@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Редактировать бланк</div>
            <div class="body-card">
                @include('partitions.errors')
                <form method="post" action="{{ route('admin.blanks.update', ['blank' => $blank]) }}" enctype="multipart/form-data" class="col-md-6 mb-2">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Название бланка</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Название бланка" value="{{ $blank->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="blank">Бланк</label>
                        <input name="link" type="file" class="form-control-file" id="blank">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить бланк</button>
                </form>
            </div>
        </div>
    </div>
@stop