<?php

namespace App\Forms;

class PostForm extends AbstractForm
{
    public function buildForm()
    {
        $this->addTranslated('title', 'text', [
            'label' => __('entities.post.title'),
            'rules' => ['required', 'max:255'],
        ])->addTranslated('excerpt', 'textarea', [
            'label' => __('entities.post.excerpt'),
            'rules' => ['nullable'],
        ])->addTranslated('content', 'textarea', [
            'label' => __('entities.post.content'),
            'rules' => ['required'],
        ])->add('image', 'file', [
            'label' => __('entities.post.image'),
            'rules' => ['nullable', 'string', 'max:255'],
            'template' => 'components.admin.forms.upload_single',
            'side' => 'right',
        ]);

        $this->addSubmitButton();
    }
}
