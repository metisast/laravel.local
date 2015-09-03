{{--
 *** Основной шаблон приложения ***
 --}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', trans('interface.welcome'))</title>
    <!-- Main styles -->
    <link rel="stylesheet" href="styles/main.css"/>
    <link rel="stylesheet" href="styles/reset.css"/>
    <!-- Evil icons -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/evil-icons/1.7.2/evil-icons.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/evil-icons/1.7.2/evil-icons.min.js"></script>
</head>
<body>
    {{-- Подключаем заголовок приложения --}}
    @include('templates.header')
    <div class="content">
        {{-- Подключаем левую часть приложения --}}
        @include('templates.left_side')
        {{-- Подключаем правую часть прилоожения --}}
        @include('templates.right_side')
    </div>
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</body>
</html>