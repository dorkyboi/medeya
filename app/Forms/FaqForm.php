<?php

namespace App\Forms;

class FaqForm extends AbstractForm
{
    public function buildForm()
    {
        $this->addTranslated('question', 'text', [
            'label' => __('entities.faqs.question'),
            'rules' => ['required', 'max:255']
        ])->addTranslated('answer', 'textarea', [
            'label' => __('entities.faqs.answer'),
        ]);

        $this->addSubmitButton();
    }
}
