<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetTopResultsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'exists:App\Models\Member,email'
        ];
    }
}
