<?php

namespace Domain\Base;

use Illuminate\Database\Eloquent\Model;

class TModel extends Model
{
    public function showByUuid($uuid)
    {
        $query = $this->query();
        $params = ['uuid' => $uuid];

        return $this->filter($query, $params)->firstOrFail();
    }

    public function updateRecordByUuid($uuid, array $data)
    {
        return $this->findByUuid($uuid)->update($data);
    }

    public function deleteRecordByUuid($uuid)
    {
        return $this->findByUuid($uuid)->delete();
    }
}