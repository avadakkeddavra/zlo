@extends('layouts.app')

@section('content')
    <header-component></header-component>
    <posts-component :posts="{{$posts}}"></posts-component>
@endsection
