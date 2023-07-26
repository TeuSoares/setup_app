<?php

namespace Domain\Base;

use Illuminate\Database\Eloquent\Model;

class TModel extends Model
{
    public function showByUuid($uuid)
    {
        return $this->findByUuid($uuid)->firstOrFail();
    }

    public function updateRecordByUuid($uuid, array $data)
    {
        return $this->findByUuid($uuid)->update($data);
    }

    public function deleteRecordByUuid($uuid)
    {
        return $this->findByUuid($uuid)->delete();
    }

    public function findRecord(string $column, string $operator, string $value)
    {
        return $this->where($column, $operator, $value)->get();
    }

    public function where(string $column, string $operator, string $value)
    {
        return $this->where($column, $operator, $value);
    }

    public function get()
    {
        return $this->get();
    }
}