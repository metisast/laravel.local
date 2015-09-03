<?php namespace App\Http\Composers;

use App\Models\Language;
use Illuminate\Contracts\View\View;

class MainTemplateComposer {

    /**
     * Определение глобальной переменной приложения для подключения основного шаблона
     */
    //protected $languages;

    /**
     *
    */
    /*public function __construct(Language $language)
    {
        $this->languages = $language;
    }*/

    /**
     * $template, передаем во все шаблоны
     */
    public function compose(View $view)
    {
        $template = 'app';
        $view->with('template', $template);
    }

}