@extends('layout.app')

@section('content')

    <h1>Data</h1>
    @if(count($students))
        <ul>
            @foreach($students as $student)
                <li>{{$student}}</li>
            @endforeach
        </ul>
    @endif
@stop

@section('footer')
    <script>alert('Hello Visitor!')</script>
@stop