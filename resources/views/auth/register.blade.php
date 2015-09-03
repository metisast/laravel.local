{{-- Подключаем шаблон --}}
@extends('start')

{{-- Заголовок страницы --}}
@section('title', trans('interface.register'))

{{-- В секцию авториз/регист добавляем шаблон регстрации --}}
@section('auth')
    @include('templates.register')
@stop