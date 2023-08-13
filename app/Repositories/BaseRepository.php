<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryContract
{
    public function __construct(public Model $model)
    {
    }


    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, array $data)
    {
       return 'base updated';
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function all()
    {
        return $this->model->all();
    }

    public function findBy(string $field, $value)
    {
        // TODO: Implement findBy() method.
    }

    public function findManyBy(string $field, $value)
    {
        // TODO: Implement findManyBy() method.
    }

    public function orderBy(string $column, string $direction = 'asc')
    {
        // TODO: Implement orderBy() method.
    }

    public function filter(array $filters)
    {
        // TODO: Implement filter() method.
    }

    public function getModelClass()
    {
        return $this->model;
    }
}
