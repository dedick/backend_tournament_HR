@extends('index')

@section('content')
<div class="position-ref full-height">
    <div class="content">
        @isset($player)
        <div class="score">
         <h1 class="title m-b-md">{{ $title }} </h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">level</th>
                    <th scope="col">computer</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($player as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->firstname }}</td>
                    <td>{{ $value->lastname }}</td>
                    <td>{{ $value->level }}</td>
                    <td>{{ $value->laptop }}</td>
                    <td><a href="{{action('PlayerController@edit', $value->id)}}"><button class="btn btn-success">Editar</button></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endisset
        @if($nbPage > 1)
            <nav style="text-align: center">
                <ul class="pagination pagination-lg justify-content-center">
                    @for ($i = 0; $i < $nbPage; $i++)
                    @switch($action)
                        @case('score')
                            <li class="page-item"><a class="page-link" href="{{action('BackOfficeController@score', $i + 1)}}">{{$i + 1}}</a></li>
                            @break
                        @case('waiting')
                            <li class="page-item"><a class="page-link" href="{{action('BackOfficeController@waiting', $i + 1)}}">{{$i + 1}}</a></li>
                            @break
                        @case('ingame')
                            <li class="page-item"><a class="page-link" href="{{action('BackOfficeController@ingame', $i + 1)}}">{{$i + 1}}</a></li>
                            @break
                        @case('inactive')
                            <li class="page-item"><a class="page-link" href="{{action('BackOfficeController@inactive', $i + 1)}}">{{$i + 1}}</a></li>
                            @break
                        @endswitch
<!--                    <li class="page-item"><a class="page-link" href="{{action('BackOfficeController@score', $i + 1)}}">{{$i + 1}}</a></li>-->
                    @endfor

                </ul>
            </nav>
        @endif

    </div>
</div>
@endsection
