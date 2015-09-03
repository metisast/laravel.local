<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class NavigationComposer {

    /**
     * Навигация для модулей приложений
     */

    /**
     * @param View $view
     * Определем массив ссылок для навигации под модули
     */
    public function compose(View $view)
    {
        $user = Auth::user();
        //Модуль администратор
        if($user->role_id == 1)
        {
            $m_title = trans('interface.admin');

            $nav = 'admin';
        }

        //Модуль абитуриент
        if($user->role_id == 2)
        {
            $m_title = trans('interface.enrollee');

            $nav = [
                trans('interface.enrIndex') => route('enrollee.index'),
                trans('interface.enrAdd') => route('enrollee.create'),
                trans('interface.stats') => route('home'),
                trans('interface.reports') => route('home'),
            ];
        }

        $view->with('nav', $nav)->with('m_title', $m_title);
    }

}