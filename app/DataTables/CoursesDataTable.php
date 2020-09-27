<?php

namespace App\DataTables;

use App\Course;
use Yajra\DataTables\Html\Column;

class CoursesDataTable extends AbstractDataTable
{
    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->addColumn('title', function (Course $course) {
                return $course->title;
            })->addColumn('excerpt', function (Course $course) {
                return $course->excerpt;
            })->addColumn('actions', function (Course $course) {
                return view('components.admin.actions', [
                    'route' => 'users',
                    'entity' => $course,
                    'none' => true,
                ]);
            })->filter(function ($query) {
                $this->filter($query, [
                    [
                        'field' => 'title',
                        'translatable' => true,
                    ],
                    [
                        'field' => 'excerpt',
                        'translatable' => true,
                    ],
                ]);
            });
    }

    public function query(Course $model) {
        return $model->newQuery();
    }

    protected function getColumns() {
        return [
            Column::make('title')->title(__('Title')),
            Column::make('excerpt')->title(__('Excerpt')),
            $this->getActionsColumn(),
        ];
    }
}
