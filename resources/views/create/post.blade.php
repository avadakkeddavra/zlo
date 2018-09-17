@extends('layouts.app')

@section('content')
    <create-post-component :categories="{{$categories}}"></create-post-component>
@endsection