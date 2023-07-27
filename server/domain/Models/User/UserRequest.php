<?php

namespace Domain\Models\User;

use Domain\Base\TRequest;

class UserRequest extends TRequest 
{
    public function rules()
    {
        return [];
    }

    public function messages()
    {
        return [];
    }
}