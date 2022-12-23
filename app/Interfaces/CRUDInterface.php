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

    function update(array $data, int $id);
    /**
     * Summary of delete
     * @param int $id
     * @return void
     */
    function delete(int $id);

    function show(int $id);
    /**
     * Summary of edit
     * @param array $data
     * @param int $id
     * @return void
     */
}
