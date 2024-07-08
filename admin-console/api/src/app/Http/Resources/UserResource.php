<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'level'=>$this->level,
            'exp'=>$this->exp,
            'life'=>$this->life,
            'created_at'=>$this->created_at->format('y/m/d h:i:s')
        ];
    }
}
