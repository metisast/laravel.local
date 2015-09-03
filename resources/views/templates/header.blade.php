<!-- Header -->
<div id="header">
    <!-- Logo -->
    <div class="logo">
        <a href="#">{{ trans('interface.logo') }}</a>
    </div>
    {{-- Если пользователь авторизован, отображать блок с выходом из учетной записи приложния --}}
    @if(Auth::check())
        <div class="logout">
            <a href="/auth/logout" title="{{ trans('interface.logout') }}">
                <img src="/images/ico/ic_close_24px.svg" alt="{{ trans('interface.logout') }}"/>
            </a>
        </div>
    @endif
    {{-- Переменные $languages и $s_languages глобальные Шаблонные переменные
        $languages - массив всех языковых пакетов приложения
        $s_languages - текуший язык приложения из сессии
    --}}
    <div class="change-lang">
        @foreach($languages as $language)
            {{-- Если языки не совпадают то создать ссылку с картинкой на языковой пакет, отличный от выбранного --}}
            @if($language->title != $s_language)
                <a href="/lang/{{ $language->title }}">
                    <img src="/images/lang/{{ $language->title }}.png" alt="{{ $language->description }}"/>
                </a>
            {{-- Иначе создавать только картинку текущего языка --}}
            @else
                <a>
                    <img src="/images/lang/{{ $language->title }}.png" alt="{{ $language->description }}" class="selected-lang"/>
                </a>
            @endif
        @endforeach
    </div>
</div>