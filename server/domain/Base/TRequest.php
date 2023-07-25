<?php

namespace Domain\Base;

use Illuminate\Foundation\Http\FormRequest;

class TRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
}