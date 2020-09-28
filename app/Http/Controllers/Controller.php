<?php

namespace App\Http\Controllers;

use App\Forms\AbstractForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Yajra\DataTables\Services\DataTable;
use Kris\LaravelFormBuilder\FormBuilder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, FormBuilderTrait;

    /**
     * @param  \Yajra\DataTables\Services\DataTable  $datatable
     * @param  string  $title
     * @param  array  $buttons
     *
     * @return mixed
     */
    protected function renderDatatable(DataTable $datatable, string $title, array $buttons = []) {
        return $datatable->render('pages.admin.datatable', compact('title', 'buttons'));
    }

    /**
     * Validate form request and get array of validated data.
     *
     * @param  string $formClass
     *
     * @return array
     */
    protected function getValidatedFormData(string $formClass) {
        $form = $this->form($formClass);
        $form->redirectIfNotValid();
        return $form->getFieldValues();
    }
}
