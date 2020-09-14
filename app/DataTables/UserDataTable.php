<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Html\Column;

class UserDataTable extends AbstractDataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     *
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->addColumn('actions', function (User $user) {
                return view('components.admin.actions', [
                    'route' => 'users',
                    'entity' => $user,
                    'delete' => false,
                ]);
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\User  $model
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function query(User $model) {
        return $model->newQuery();
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            Column::make('name')->title('Imię'),
            Column::make('surname')->title('Nazwisko'),
            Column::make('email')->title('Email'),
            $this->getActionsColumn(),
        ];
    }
}
