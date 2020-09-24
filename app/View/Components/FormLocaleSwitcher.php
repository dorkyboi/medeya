<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormLocaleSwitcher extends Component
{
    public $withCard;
    public $form;

    /**
     * Create a new component instance.
     *
     * @param $withCard
     * @param $form
     */
    public function __construct($withCard = false, $form = null) {
        $this->withCard = $withCard;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return view('components.form-locale-switcher');
    }
}
