<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

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
            ->parameters([
                'searchDelay' => 500,
                'responsive' => true,
                'autoWidth' => false,
            ])
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

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array                                  $params
     *  $params = [
     *      'field'         string  Name of the database column
     *      'relation'      string  Name of relation
     *      'translatable'  bool    Whether column contains translatable JSON data
     *      'nested'        array   Array of relation columns and/or relations
     *  ];
     */
    protected function filter(EloquentBuilder $query, array $params) {
        $request = request();
        $search = $request->has('search') && isset($request->input('search')['value']) && !empty($request->input('search')['value'])
            ? '%' . $request->input('search')['value'] . '%'
            : null;

        if ($search)
            $this->recursiveFilter($query, $search, $params);
    }

    private function recursiveFilter(EloquentBuilder $query, string $search, array $params, bool $isFirstWhere = true) {
        foreach ($params as $options) {
            if (isset($options['relation'])) {
                if ($isFirstWhere) {
                    $query->whereHas($options['relation'], function ($q) use ($search, $options, $isFirstWhere) {
                        $this->recursiveFilter($q, $search, $options['nested'], $isFirstWhere);
                    });
                }
                else {
                    $query->orWhereHas($options['relation'], function ($q) use ($search, $options, $isFirstWhere) {
                        $this->recursiveFilter($q, $search, $options['nested'], $isFirstWhere);
                    });
                }
            }
            else {
                if ($isFirstWhere) {
                    if ($options['translatable'] ?? false) {
                        $query->where(function ($q) use ($options, $search) {
                            $q->where($options['field'] . '->' . app()->getLocale(), 'like', $search)
                                ->orWhere($options['field'] . '->' . config('app.fallback_locale'), 'like', $search);
                        });
                    }
                    else
                        $query->where($options['field'], 'like', $search);
                }
                else {
                    if ($options['translatable'] ?? false) {
                        $query->orWhere(function ($q) use ($options, $search) {
                            $q->where($options['field'] . '->' . app()->getLocale(), 'like', $search)
                                ->orWhere($options['field'] . '->' . config('app.fallback_locale'), 'like', $search);
                        });
                    }
                    else
                        $query->orWhere($options['field'], 'like', $search);
                }
            }

            $isFirstWhere = false;
        }
    }
}
