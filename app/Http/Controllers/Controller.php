<?php

namespace App\Http\Controllers;

use App\Forms\AbstractForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\Services\DataTable;
use Kris\LaravelFormBuilder\FormBuilder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
     * Render create/edit form
     *
     * @param  string  $form
     * @param  string  $route
     * @param  bool  $edit
     * @param  array  $headerArgs
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     *
     * @return mixed
     */
    protected function renderForm(string $form, string $route, bool $edit, array $headerArgs = [], Model $model = null) {
        $formBuilder = app(FormBuilder::class);

        return view('pages.admin.edit')->with([
            'edit' => $edit,
            'headerArgs' => $headerArgs,
            'form' => $formBuilder->create($form, [
                'method' => $edit ? 'POST' : 'PUT',
                'url' => $route,
                'model' => $model,
            ])->setFormOption('novalidate', true),
        ]);
    }
}
