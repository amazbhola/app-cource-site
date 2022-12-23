<?php

namespace App\Http\Controllers\backend;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Support\Renderable;

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
     * @return Renderable;
     */
    public function create(): Renderable
    {

        return view('backend.pages.categories.form', [
            'printableCategory' => $this->categoryRepository->printCategory()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
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
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return Renderable
     */
    public function edit(Category $category): Renderable
    {

        return view('backend.pages.categories.edit', [
            'category' => $category,
            'printableCategory' => $this->categoryRepository->printCategory($category->id)
        ]);
    }


    public function update(CategoryCreateRequest $request, Category $category)
    {

        $categoryUpdate =  $this->categoryRepository->update($request->except('_token', '_method'), $category->id);
        if (!empty($categoryUpdate)) {
            session()->flash('success', 'Category update Successfully');
            return redirect()->route('admin.category.index');
        } else {
            session()->flash('error', 'Something wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        if ($this->categoryRepository->delete($category)) {
            session()->flash('success', 'Category Delete Successfully');
            return redirect()->route('admin.category.index');
        } else {
            session()->flash('error', 'Something wrong');
        }
    }
}
