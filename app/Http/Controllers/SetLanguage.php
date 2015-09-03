<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;

class SetLanguage extends Controller
{
    /**
     * Выбор локализации приложенния и запись в сессию
     *
     * @return Response
     */
    public function index(Session $session, $lang)
    {
        $languages = ['ru','en'];

        for($i = 0; $i < count($languages); $i++)
        {
            if($lang == $languages[$i])
            {
                App::setLocale($languages[$i]);
                $session->set('lang', $languages[$i]);
            }
        }
        //echo $session->get('lang');
        if(isset($_SERVER['HTTP_REFERER']))
        {
            return redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            return redirect(route('home'));
        }

    }
}
