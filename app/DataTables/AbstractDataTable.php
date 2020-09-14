<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

abstract class AbstractDataTable extends DataTable
{
    const LOCALES = [
        'ru' => '//cdn.datatables.net/plug-ins/1.10.21/i18n/Russian.json',
        'uk' => '//cdn.datatables.net/plug-ins/1.10.21/i18n/Ukrainian.json',
    ];

    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     *
     * @return \Yajra\DataTables\DataTableAbstract
     */
    abstract public function dataTable($query);

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html() {
        $builder = $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addTableClass('table-hover table-sm')
            ->language(self::LOCALES[app()->getLocale()]);

        return $this->orderBy($builder);
    }

    /**
     * Apply order to queries.
     *
     * @param  \Yajra\DataTables\Html\Builder  $builder
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    protected function orderBy(Builder $builder) {
        return $builder->orderBy(0, 'asc');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    abstract protected function getColumns();

    /**
     * Get 'Akcje' column.
     *
     * @return \Yajra\DataTables\Html\Column
     */
    protected function getActionsColumn() {
        return Column::computed('actions', __('Actions'))->addClass('text-right no-stretch');
    }
}
