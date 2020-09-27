<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->authorizeResource(User::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\DataTables\UserDataTable  $dataTable
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable) {
        return $this->renderDatatable($dataTable, __('Users'), [
            'create' => [
                'route' => route('admin.users.create'),
                'permission' => 'create users',
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
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
}
