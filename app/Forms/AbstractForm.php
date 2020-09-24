<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

abstract class AbstractForm extends Form
{
    public $isOneColumnLayout = false;

    protected function addSubmitButton() {
        $this->add('submit', 'submit', [
            'template' => 'components.admin.submit-button',
        ]);
    }

    protected function addTranslated($name, $type, $options = []) {
        foreach (config('app.locales') as $locale) {
            // copy initial args
            $args = $options;

            // remove 'required' rule for not fallback locales
            if (isset($args['rules']) && $locale !== config('app.fallback_locale')) {
                if (($key = array_search('required', $args['rules'])) !== false)
                    unset($args['rules'][$key]);
            }

            // hide all fields from not fallback locales
            if ($locale !== config('app.fallback_locale'))
                $args['wrapper']['hidden'] = 'hidden';

            $args['wrapper']['data-switcher-name'] = $name;
            $args['wrapper']['data-switcher-locale'] = $locale;
            $args['wrapper']['translatable'] = true;

            if (empty($args['value'])) {
                $args['value'] = function () use ($name, $locale) {
                    $model = $this->getModel();
                    return is_array($model)
                        ? $model[$name][$locale] ?? null
                        : $model->getTranslation($name, $locale, false);
                };
            }

            // todo support multiselect
            $this->add($name . '[' . $locale .']', $type, $args);
        }

        return $this;
    }
}
