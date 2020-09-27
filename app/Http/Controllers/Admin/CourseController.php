<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\DataTables\CoursesDataTable;
use App\Forms\CourseForm;
use App\Http\Controllers\Controller;
use App\View\AdminEditPage;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Course::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\DataTables\CoursesDataTable  $dataTable
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CoursesDataTable $dataTable) {
        return $this->renderDatatable($dataTable, __('Courses'), [
            'create' => [
                'route' => route('admin.courses.create'),
                'permission' => 'create courses',
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return (new AdminEditPage())
            ->setForm(CourseForm::class)
            ->setFormAction(route('admin.courses.store'))
            ->setTitle(__('Create course'))
            ->setHeaderArgs([
                'back_to_list' => [
                    'route' => route('admin.courses.index'),
                    'permission' => 'list courses',
                ],
            ])
            ->setTranslatable(true)
            ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course) {
        //
    }
}
