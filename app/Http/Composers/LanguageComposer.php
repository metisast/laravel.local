<?php namespace App\Http\Composers;

use App\Models\Language;
use Illuminate\Contracts\View\View;

class LanguageComposer {

    /**
     * Загрузка всех языков в шаблон
     */
    protected $languages;

    /**
     * Получаем таблицу с языками приложения
    */
    public function __construct(Language $language)
    {
        $this->languages = $language;
    }

    /**
     * Создаеем глобальную переменную $languages и передаем во все шаблоны
     */
    public function compose(View $view)
    {
        $view->with('languages', $this->languages->all());
    }

}