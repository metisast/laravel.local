<?php namespace App\Http\Composers;

use App\Models\Language;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\Session\Session;

class SLanguageComposer {

    /**
     * Загрузка языковой сессии во все шаблоны
     */
    protected $s_language;

    /**
     * Получаем все сессии
     */
    public function __construct(Session $session)
    {
        $this->s_language = $session;
    }

    /**
     * Создаеем глобальную переменную $s_language и передаем во все шаблоны
     */
    public function compose(View $view)
    {
        $view->with('s_language', $this->s_language->get('lang'));
    }
}