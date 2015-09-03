{{--
 *** Основной шаблон приложения, отвечающий за регистрацию и авторизацию ***
 --}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', trans('interface.welcome'))</title>
    <!-- Main styles -->
    <link rel="stylesheet" href="/styles/reset.css"/>
    <link rel="stylesheet" href="/styles/main.css"/>
    <!-- Evil icons -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/evil-icons/1.7.2/evil-icons.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/evil-icons/1.7.2/evil-icons.min.js"></script>
</head>
<body>
    {{-- Подключаем заголовок приложения --}}
    @include('templates.header')

    {{-- Создаем блок авториз/регистр --}}
    @yield('auth')
</body>
</html>