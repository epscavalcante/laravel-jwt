<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JwtResoure extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'access_token' => $this->resource,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'payload' => auth()->payload()
        ];
    }
}
