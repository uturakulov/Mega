@extends('layout.app')

@section('content')

    <ul class="list-group">
        @foreach ($deps as $dep)
            <li class="list-group-item"><span class="bold-span">ID:</span>
                {{ $dep->id }}</li>
            <li class="list-group-item"><span class="bold-span">Departament:</span>
                {{ $dep->department }}
            </li>
        @endforeach
    </ul>

@endsection
