<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RezResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap = 'rez';

    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->resource->id,
            'dan'=> $this->resource->dan,
            'mesto'=> $this->resource->mesto,
            'brojStola'=> $this->resource->brojStola,
            'utisak'=> $this->resource->utisak,
            'restoran'=> $this->resource->restorans
        ];
    }
}
