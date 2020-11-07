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
    </div>
    @stop
    @section('form')
        <div class="skew-arriba"></div>
        <div class="deg-footer"></div>

        <div class="ejeZfooter">
            <div class="footer-content">
                <div class="footer-title">
                    <h2>Login</h2>
                    <hr>
                </div>
                <div class="formulario-content">
                    <form action="{{action('Controlador@validarLogin')}}" method="post" id="formulario">
                    {{csrf_field()}}
                        <label for="user">Usurio</label>
                        <input type="text" id="user" name="user" placeholder="Ingresar Usuario">

                        <label for="pasword">Pasword</label>
                        <input type="text" id="pasword" name="pasword" placeholder="Ingresar Pasword">

                        <label for="key">Key</label>
                        <input type="text" id="key" name="key" placeholder="Ingresar Key">
                        <br>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
        </footer>
    @stop
</section>
@section('footer')
    Copyright:{{date('Y')}} - Liliana López
@stop
