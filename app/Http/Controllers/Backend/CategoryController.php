<?php

namespace App\Http\Controllers\backend;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(CategoryDataTable $dataTable)
    {
        // return $this->categoryRepository->get();
        return $dataTable->render('backend.pages.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {

        return view('backend.pages.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $category =  $this->categoryRepository->store($request->all());
        if (!empty($category)) {
            session()->flash('success', 'Category Create Successfully');
            return redirect()->route('admin.category.index');
        } else {
            session()->flash('error', 'Something wrong');
            return redirect()->route('admin.category.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Category|null
     */
    public function show($id): Category|null
    {
        $category = $this->categoryRepository->show($id);
        dd($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    }
}
