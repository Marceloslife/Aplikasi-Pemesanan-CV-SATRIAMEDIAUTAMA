@extends('layout.master')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">

        <h1>Selamat Datang</h1>
        <h2> {{ Auth::user()->name }}</h2>
    </div>
@endsection
