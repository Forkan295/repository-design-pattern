<?php

namespace App\Repositories;

interface BaseRepositoryContract
{
    //    CRUD Operation contracts start
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update(int $id, array $data);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);
    //    CRUD Operation contracts end

    //    Query Methods contracts start
    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param string $field
     * @param $value
     * @return mixed
     */
    public function findBy(string $field, $value);

    /**
     * @param string $field
     * @param $value
     * @return mixed
     */
    public function findManyBy(string $field, $value);
    //    Query Methods contracts end

    //    Sorting and Filtering Methods contracts start
    /**
     * @param string $column
     * @param string $direction
     * @return mixed
     */
    public function orderBy(string $column, string $direction = 'asc');

    /**
     * @param array $filters
     * @return mixed
     */
    public function filter(array $filters);
    //    Sorting and Filtering Methods contracts end

    //Utility Methods contracts start
    /**
     * @return mixed
     */
    public function getModelClass();
    //Utility Methods contracts end

}
