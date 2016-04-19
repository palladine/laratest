<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4"><a href="{{ route('main') }}">Главная</a></div>
		<div class="col-lg-4">
			<form action="{{ route('login') }}" method='post'>
     				<input type="text" name='username'>
     				<input type="password" name='password'>
     				<button type='submit'>Войти</button>
     				<input type="hidden" name='_token' value='{{ Session::token() }}'>
     			</form>
		</div>
		<div class="col-lg-4">
		@if (!Auth::user())
			<a href="{{ route('get_register') }}">Регистрация</a>
		@else	
			{{ Auth::user()->username }}  <a href="{{ route('logout') }}">Выход</a>
		@endif
		</div>
	</div>
</div>