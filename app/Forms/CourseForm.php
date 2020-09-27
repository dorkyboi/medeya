<?php

namespace App\Forms;

class CourseForm extends AbstractForm
{
    public $isOneColumnLayout = true;

    public function buildForm() {
        $this->addTranslated('title', 'text', [
            'label' => __('Title'),
            'rules' => ['required'],
        ])->addTranslated('excerpt', 'text', [
            'label' => __('Excerpt'),
            'rules' => ['nullable'],
        ])->addTranslated('description', 'textarea', [
            'label' => __('Description'),
            'rules' => ['nullable'],
        ]);

        $this->addSubmitButton();
    }
}
