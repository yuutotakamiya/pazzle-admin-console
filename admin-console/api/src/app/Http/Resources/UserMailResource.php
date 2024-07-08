<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserMailResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'mail_id'=>$this->mail_id,
            'condition'=>$this->condition,
        ];
    }
}
