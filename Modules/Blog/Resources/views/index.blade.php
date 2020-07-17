@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>
    @foreach( $a as $item )
    <p>{{$item->code}}</p>
    <p>{{$item->name}}</p>
    <p>{{$item->description}}</p>
    @endforeach
    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
@endsection
