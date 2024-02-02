<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TopTenResultsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        list($emailFirstPart, $emailLastPart) = explode("@", $this->email);

        return [
            'email' => substr($emailFirstPart, 0, 2) . str_repeat('*', strlen($emailFirstPart)-2) . "@" . $emailLastPart,
            'place' => 0,
            'milliseconds' => $this->milliseconds
        ];
    }
}
