<?php

namespace App\Http\Controllers\Admin;

use App\Forms\HomepageForm;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class HomepageController extends Controller
{
    public function index(FormBuilder $formBuilder) {
        return view('pages.admin.homepage.edit')->with([
            'edit' => false,
            'form' => $formBuilder->create(HomepageForm::class, [
                'method' => 'POST',
                'url' => route('admin.homepage.store'),
            ])->setFormOption('novalidate', true),
        ]);
    }

    public function update() {

    }
}
