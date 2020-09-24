<?php

namespace App\Forms;

class SlideForm extends AbstractForm
{
    public function buildForm() {
        $this->add('title', 'text', [
            'label' => 'Title',
            'rules' => ['nullable', 'string', 'max:255'],
        ])->add('subtitle', 'text', [
            'label' => 'Subtitle',
            'rules' => ['nullable', 'string', 'max:255'],
        ])->add('content', 'text', [
            'label' => 'Content',
            'rules' => ['nullable', 'string', 'max:255'],
        ]);

        $this->setFormOption('oneColLayout', true);
    }
}
