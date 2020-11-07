@extends('layouts.master')
@section('title',$title)
@section('header')
@stop
@section('navbar')
    @parent
@stop
<section class="acerca-de">
    <div class="info-container">
        @section('content')
        <h1>Login Exitoso</h1>
    </div>
    @stop
</section>
@section('footer')
    Copyright:{{date('Y')}} - Liliana López
@stop
