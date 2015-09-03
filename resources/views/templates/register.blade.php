<!-- Register -->
<div id="auth">
    <h2>{{ trans('interface.register') }}</h2>
    <form method="POST" action="/auth/register" class="auth">
        {!! csrf_field() !!}
        {{-- Проверка ошибок регистрации --}}
        @if(count($errors) != 0)
            @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        @endif
        <div>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ trans('interface.name') }}">
        </div>
        <div>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ trans('interface.email') }}">
        </div>
        <div>
            <input type="password" name="password" placeholder="{{ trans('interface.password') }}">
        </div>
        <div>
            <input type="password" name="password_confirmation" placeholder="{{ trans('interface.passwordConfirm') }}">
        </div>
        <div>
            <button type="submit">{{ trans('interface.register') }}</button>
        </div>
    </form>
</div>