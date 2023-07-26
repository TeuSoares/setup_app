<?php

namespace Domain\Base;

class TService
{
    public function showByUuid($uuid)
    {
        return $this->model->showByUuid($uuid);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function updateByUuid($uuid, array $data)
    {
        return $this->model->updateRecordByUuid($uuid, $data);
    }

    public function deleteByUuid($uuid)
    {
        return $this->model->deleteRecordByUuid($uuid);
    }

    public function findRecord(string $column, string $operator, string $value)
    {
        return $this->findRecord($column, $operator, $value);
    }

    public function where(string $column, string $operator, string $value)
    {
        return $this->model->where($column, $operator, $value);
    }

    public function get(){
        return $this->model->get();
    }
}