<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => (string) $this->id,
            'name' => $this->name,
            'thumbnail' => $this->thumbnail,
            'preview_images' => ProductImagesResource::collection($this->productImages),
            'categories' => CategoryResource::collection($this->productCategory),
        ];
    }
}
