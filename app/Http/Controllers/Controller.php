<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\Services\DataTable;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function renderDatatable(DataTable $datatable, string $title, array $buttons = []) {
        return $datatable->render('pages.admin.datatable', compact('title', 'buttons'));
    }
}
