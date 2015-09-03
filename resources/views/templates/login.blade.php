<!-- Login -->
<div id="auth">
    <h2>{{ trans('interface.auth') }}</h2>
    <form method="POST" action="/auth/login" class="auth">
        {!! csrf_field() !!}
        {{-- Проверка ошибок авторизации --}}
        @if(count($errors) != 0)
            @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        @endif
        <div>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off">
        </div>

        <div>
            <input type="password" name="password" placeholder="{{ trans('interface.password') }}" id="password">
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember"> {{ trans('interface.rememberMe') }}
            </label>
        </div>

        <div>
            <button type="submit">{{ trans('interface.login') }}</button>
        </div>
        <div>
            <a href="/auth/register">{{ trans('interface.register') }}</a>
        </div>
    </form>
</div>