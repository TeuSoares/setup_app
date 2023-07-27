<?php

namespace Domain\Models\User;

use Domain\Base\TService;

class UserService extends TService 
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }
}