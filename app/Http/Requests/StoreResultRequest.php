<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'email',
            'milliseconds' => 'required|numeric'
        ];
    }
}
