<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\DataTables\CoursesDataTable;
use App\Forms\CourseForm;
use App\Helpers\TitleGenerator;
use App\Http\Controllers\Controller;
use App\View\AdminEditPage;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Course::class);
        pushTitlePart(__('Courses'));
    }

    public function index(CoursesDataTable $dataTable) {
        return $this->renderDatatable($dataTable, __('Courses'), [
            'create' => [
                'route' => route('admin.courses.create'),
                'permission' => 'create courses',
            ],
        ]);
    }

    public function create() {
        return $this->renderForm();
    }

    public function store() {
        Course::create($this->getValidatedFormData(CourseForm::class))->save();
        return redirect(route('admin.courses.index'));
    }

    public function show(Course $course) {
        //
    }

    public function edit(Course $course) {
        return $this->renderForm($course);
    }

    public function update(Course $course) {
        $course->fill($this->getValidatedFormData(CourseForm::class))->save();
        return redirect(route('admin.courses.index'));
    }

    public function destroy(Course $course) {
        $course->delete();
        return redirect(route('admin.courses.index'));
    }

    private function renderForm(Course $course = null) {
        return (new AdminEditPage())
            ->setForm(CourseForm::class)
            ->setModel($course)
            ->setFormAction($course ? route('admin.courses.update', $course) : route('admin.courses.store'))
            ->setTitle($course ? __('Edit course') : __('Create course'))
            ->setSubtitle($course ? $course->title : null)
            ->setHeaderArgs([
                'back_to_list' => [
                    'route' => route('admin.courses.index'),
                    'permission' => 'list courses',
                ],
            ])
            ->setTranslatable(true)
            ->render();
    }
}
