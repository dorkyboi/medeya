<?php

namespace App\Forms;

use App\Category;
use App\Page;
use Illuminate\Validation\Rule;

class PageEditForm extends AbstractForm
{
    public function buildForm()
    {
        $this->add('title', 'text', [
            'label' => __('pages.title'),
            'required' => true,
            'rules' => ['required', 'max:255']
        ])->add('slug', 'text', [
            'label' => __('pages.slug'),
            'rules' => ['required', 'max:255'],
        ])->add('content', 'textarea', [
            'label' => __('pages.content'),
        ])->add('image', 'file', [
            'label' => __('pages.image'),
            'default_value' => null,
            'template' => 'components.admin.forms.upload'
        ])->add('is_draft', 'checkbox', [
            'label' => __('pages.is_draft'),
            'rules' => ['boolean'],
        ]);

        $this->addSubmitButton();
    }
}
