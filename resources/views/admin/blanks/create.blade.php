@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Добавить бланк</div>
            <div class="body-card">
                @include('partitions.errors')
                <form method="post" action="{{ route('admin.blanks.store') }}" enctype="multipart/form-data" class="col-md-6 mb-2">
                    @csrf
                    <div class="form-group">
                        <label for="name">Название бланка</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Название бланка" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="blank">Бланк</label>
                        <input name="link" type="file" class="form-control-file" id="blank" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Создать бланк</button>
                </form>
            </div>
        </div>
    </div>
@stop