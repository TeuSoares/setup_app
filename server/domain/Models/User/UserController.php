<?php

namespace Domain\Models\User;

use Domain\Base\TController;

class UserController extends TController 
{
    protected $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function show()
    {
        $uuid = 1;
        return $this->service->model->showByUuid($uuid);
    }
}