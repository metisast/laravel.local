<!-- Left-side -->
<div class="left-side">
    <!-- Module-title -->
    <div class="module-title">
        <h3>{{ $m_title }}</h3>
    </div>
    <!-- User -->
    <div class="user">
        <a href="/profile">
            <img src="/images/ico/ic_account_circle_24px.svg" alt="profile" width="100px"/>
        </a>
        <p>{{Auth::user()->name}}</p>
    </div>
    {{-- Глобальная переменная $nav содержит массив ссылок
        $nav
            as $n - якорь ссылки
            => $link - путь(именованный роут)
    --}}
    <!-- Main-nav -->
    <div class="main-nav">
        <ul>
            @foreach($nav as $n => $link)
                {{-- Проверка активной ссылки, для визуального изменения --}}
                @if(URL::current() == $link)
                    <li class="page-selected"><a>{{ $n }}</a></li>
                @else
                    <li><a href="{{ $link }}">{{ $n }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</div>