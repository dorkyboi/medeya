<?php

namespace App\Forms;

class MakerForm extends AbstractForm
{
    public function buildForm()
    {
        $this->add('name', 'text', [
            'label' => __('entities.maker.name'),
            'required' => true,
            'rules' => ['required', 'max:255']
        ]);

        $this->addSubmitButton();
    }
}
