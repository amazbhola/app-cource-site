<?php

namespace App\Repositories;

use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Interfaces\CRUDInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class CategoryRepository implements CRUDInterface
{
    /**
     * Summary of get
     * @param array $args
     * @return Collection|\Illuminate\Contracts\Database\Eloquent\Builder
     */
    public function get(array $args = []): Collection|\Illuminate\Contracts\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order = empty($args['order']) ? 'desc' : $args['order']; //asc, desc
        $query = Category::orderBy($orderBy, $order)->with('parent');
        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }
        return $query->get();
    }
    /**
     * Summary of store
     * @param array $data
     * @return Category|null
     */
    public function store(array $data): Category|null
    {

        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Category::class, $data['name'], 'slug');
        }

        if (!empty($data['logo'])) {
            $logoName = $data['slug'] . '-' . time() . '.' . $data['logo']->extension();
            $data['logo'] = $data['logo']->storePubliclyAs('public', $logoName);
        }
        $data['enable_homepage'] = isset($data['enable_homepage']) ? 1 : 0;

        return Category::create($data);
    }
    /**
     * Summary of show
     * @param int $id
     * @return Category|Collection
     */
    public function show(int $id): Category|Collection
    {
        return Category::find($id);
    }
    /**
     * Summary of update
     * @param array $data
     * @param int $id
     * @return Category|null
     */
    public function update(array $data, int $id): Category|null
    {
        return Category::find($id);
    }
    /**
     * Summary of delete
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return Category::find($id);
    }
    /**
     * Summary of edit
     * @param array $data
     * @param int $id
     * @return void
     */
    public function edit(array $data, int $id)
    {
        # code...
    }
    /**
     * Summary of printCategory
     * @return string
     */
    public  function printCategory(?int $categoryId = null)
    {
        $html = '';
        $printCategory = $this->getParentCategories(null);
        foreach ($printCategory as $parent) {
            $selected = $parent->id == $categoryId ? 'selected' : '';
            $html .= '<option ' . $selected . '  value="' . $parent->id . '">' . $parent->name . '</option>';
            $childCategory = $this->getParentCategories($parent->id);
            foreach ($childCategory as $child1) {
                $selected = $child1->id == $categoryId ? 'selected' : '';
                $html .= '<option ' . $selected . '  value="' . $child1->id . '">&nbsp;&nbsp;&nbsp;&nbsp;--' . $child1->name . '</option>';
            }
        }
        return $html;
    }

    private function getParentCategories(?int $parentId = null)
    {
        return Category::select('id', 'name')->where('parent_id', $parentId)->get();
    }
}
