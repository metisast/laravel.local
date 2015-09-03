{{-- Подключаем шаблон --}}
@extends('start')

{{-- Заголовок страницы --}}
@section('title', trans('interface.auth'))

{{-- В секцию авториз/регист добавляем шаблон логирования --}}
@section('auth')
    @include('templates.login')
@stop