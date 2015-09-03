<?php

namespace App\Http\Middleware;

use App\Http\Requests\Request;
use Closure;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Session\Session;

class Language
{
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    /**
     * Определение локализации приложения
     *
     */
    public function handle($request, Closure $next)
    {
        $lang = $this->session->get('lang');

        //Если языковая сессия отсутствует, содаем ее принудительно
        if(empty($lang))
        {
            $this->session->set('lang', 'ru');
        }
        //Установка языка приложения по текущий языковой сессии
        App::setLocale($lang);

        return $next($request);
    }
}
