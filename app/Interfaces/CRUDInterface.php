<?php

namespace App\Interfaces;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CRUDInterface
{
    /**
     * Summary of get
     * @param array $args
     * @return Collection |\Illuminate\Contracts\Database\Eloquent\Builder
     */
    function get(array $args = []): Collection|\Illuminate\Contracts\Database\Eloquent\Builder;
    /**
     * Summary of store
     * @param array $data
     * @return Category|null
     */
    function store(array $data): Category|null;
    /**
     * Summary of update
     * @param array $data
     * @param int $id
     * @return Category|null
     */
    function update(array $data, int $id): Category|null;
    /**
     * Summary of delete
     * @param int $id
     * @return void
     */
    function delete(int $id);
    /**
     * Summary of show
     * @param int $id
     * @return Category|Collection
     */
    function show(int $id): Category|Collection;
    /**
     * Summary of edit
     * @param array $data
     * @param int $id
     * @return void
     */
    function edit(array $data, int $id);
}
