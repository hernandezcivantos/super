@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('nav')

@endsection

@section('content')
    <landing-subheader></landing-subheader>
    <main>
        <landing-main></landing-main>
        <landing-popular-categories></landing-popular-categories>
    </main>
@endsection
