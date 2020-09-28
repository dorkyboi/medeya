<?php

namespace App\View;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class AdminEditPage
{
    /**
     * Form class
     *
     * @var string
     */
    public $form;

    /**
     * Page header title
     *
     * @var string
     */
    public $title = '';

    /**
     * Page header subtitle
     *
     * @var string
     */
    public $subtitle = '';

    /**
     * Model instance when editing to get values from
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model = null;

    /**
     * Form's action route
     *
     * @var string
     */
    public $formAction;

    /**
     * Header buttons configuration
     *
     * @var array
     */
    public $headerArgs = [];

    /**
     * Whether form is translatable or not
     *
     * @var boolean
     */
    public $translatable;

    /**
     * Set form class
     *
     * @param  string  $form
     *
     * @return \App\View\AdminEditPage
     */
    public function setForm(string $form): AdminEditPage {
        $this->form = $form;
        return $this;
    }

    /**
     * Set page header title
     *
     * @param  string|null  $title
     *
     * @return \App\View\AdminEditPage
     */
    public function setTitle(?string $title): AdminEditPage {
        $this->title = $title;
        return $this;
    }

    /**
     * Set page header subtitle
     *
     * @param  string|null  $subtitle
     *
     * @return \App\View\AdminEditPage
     */
    public function setSubtitle(?string $subtitle): AdminEditPage {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Set model instance
     *
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     *
     * @return \App\View\AdminEditPage
     */
    public function setModel(?Model $model): AdminEditPage {
        $this->model = $model;
        return $this;
    }

    /**
     * Set form's action route
     *
     * @param  string  $formAction
     *
     * @return \App\View\AdminEditPage
     */
    public function setFormAction(string $formAction): AdminEditPage {
        $this->formAction = $formAction;
        return $this;
    }

    /**
     * Set header buttons config
     *
     * @param  array  $headerArgs
     *
     * @return \App\View\AdminEditPage
     */
    public function setHeaderArgs(array $headerArgs): AdminEditPage {
        $this->headerArgs = $headerArgs;
        return $this;
    }

    /**
     * Set whether form is translatable or not
     *
     * @param  bool  $translatable
     *
     * @return \App\View\AdminEditPage
     */
    public function setTranslatable(bool $translatable): AdminEditPage {
        $this->translatable = $translatable;
        return $this;
    }

    /**
     * Render create/edit page
     *
     * @return \Illuminate\View\View
     */
    public function render(): View {
        $formBuilder = app(FormBuilder::class);

        return view('pages.admin.edit')->with(array_merge(get_object_vars($this), [
            'form' => $formBuilder->create($this->form, [
                'method' => $this->model ? 'PUT' : 'POST',
                'url' => $this->formAction,
                'model' => $this->model,
                'attr' => ['data-validate' => true],
            ]),
        ]));
    }
}
