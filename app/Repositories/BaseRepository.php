<?php

namespace App\Repositories;

abstract class BaseRepository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function get()
    {
        return $this->model->get();
    }

    public function getById($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function update($id, $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function paginate($limit)
    {
        return $this->model->paginate($limit);
    }
}
