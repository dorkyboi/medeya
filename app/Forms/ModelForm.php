<?php

namespace App\Forms;

use App\Maker;

class ModelForm extends AbstractForm
{
    public function buildForm()
    {
        $model = $this->getModel();
        $choices = (!is_array($model) && $model->maker) ? [$model->maker->id => $model->maker->name] : [];

        $this->add('name', 'text', [
            'label' => __('entities.maker.name'),
            'rules' => ['required', 'max:255']
        ])->add('maker_id', 'select', [
            'label' => __('Maker'),
            'rules' => ['required', 'exists:makers,id'],
            'label_attr' => ['class' => 'control-label'],
            'choices' => $choices,
            'attr' => [
                'class' => 'form-control select2',
                'data-select2-model' => Maker::class,
            ],
        ]);

        $this->addSubmitButton();
    }
}
