@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    @if(!empty($id))
        <p>Exibindo produto id: {{$id}}</p>
    @endif
@endsection

