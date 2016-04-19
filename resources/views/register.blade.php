@extends('layouts.master')

@section('title')
	Регистрация
@stop

@section('content')
     <form action="{{ route('post_register') }}" method='post'>
     	<label for="">Имя пользователя</label>
     	<input type="text" name='username' value="{{ Request::old('username') }}">
     	<label for="">Email</label>
     	<input type="text" name='email' value="{{ Request::old('email') }}">
     	<label for="">Пароль</label>
     	<input type="password" name='password' value="{{ Request::old('password') }}">
     	<button type='submit'>Зарегистрироваться</button>
     	<input type="hidden" name="_token" value="{{ Session::token() }}">
     </form>
@stop