<?php

namespace App\Forms;

class HomepageForm extends AbstractForm
{
    public function buildForm()
    {
        $this->addTranslated('slides', 'collection', [
            'type' => 'form',
            'label' => 'Slides',
            'options' => [
                'class' => 'App\Forms\SlideForm',
                'label' => false,
            ],
            'wrapper' => [
                'collapsable' => true,
            ],
        ])->addTranslated('testname', 'text');

        $this->addSubmitButton();
    }
}
