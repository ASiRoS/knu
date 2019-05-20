@extends('app')

@section('content')
    <div class="blanks">
        <div class="row">
        @foreach($blanks as $blank)
                <div class="card blank col-sm-3">
                    <div class="card-header">{{ $blank->name }}</div>
                    <div class="card-body">
                        {{ $blank->description }}
                        <a href="{{ $blank->link }}">Скачать</a>
                    </div>
                </div>
        @endforeach
        </div>
        <div class="links">
            {{ $blanks->links() }}
        </div>
    </div>

    <style>
        .blank {
            margin-left: 20px;
            margin-top: 20px;
        }

        .links {
            margin-top: 20px;
        }
    </style>
@stop