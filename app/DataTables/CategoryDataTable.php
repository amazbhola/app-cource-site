<?php

namespace App\DataTables;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Category $category) {
                $html = '<a class="btn btn-link text-primary" href="' . route('admin.category.show', $category->slug) . '">View</a>';
                $html .= '<a class="btn btn-link text-primary" href="' . route('admin.category.edit', $category->id) . '"><i class="fa fa-pencil"></i></a>';
                $html .= '<a class="btn btn-link text-danger" href="' . route('admin.category.destroy', $category->id) . '"><i class="fa fa-trash"></i></a>';
                return $html;
            })
            ->editColumn('created_at', function (Category $category) {
                return $category->created_at->format('Y-m-d h:s:i');
            })
            ->editColumn('updated_at', function (Category $category) {
                return $category->updated_at->diffForHumans();
            })
            ->editColumn('logo', function (Category $category) {
                return '<img src="' . Storage::url($category->logo) . '" alt="" width="100">';
                // return $category->updated_at->diffForHumans();
            })
            ->editColumn('parent_id', function (Category $category) {
                if (isset($category->parent->name)) {
                    return  '<a href="' . route('admin.category.destroy', $category->parent->id) . '">' . $category->parent->name . '</a>';
                }
                return '--';
            })->rawColumns(['parent_id', 'action', 'logo']);
    }

    public function query(Category $model): QueryBuilder
    {
        return $this->categoryRepository->get(['is_query' => true]);
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('category-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('add'),
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('Sl No')->searchable(false)->orderable(false),
            Column::make('name')->title('Category'),
            Column::make('parent_id')->title('Parent Name'),
            Column::make('logo')->title('Logo'),
            Column::make('created_at')->title('Created'),
            Column::make('updated_at')->title('Last Update'),
            Column::make('action')
                ->title('Action')
                ->searchable(false)
                ->orderable(false)
                ->printable(false),
        ];
    }

    protected function filename(): string
    {
        return 'Category_' . date('YmdHis');
    }
}
