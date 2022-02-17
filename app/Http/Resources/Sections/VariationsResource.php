<?php

namespace App\Http\Resources\Sections;

use Illuminate\Http\Resources\Json\JsonResource;

class VariationsResource extends JsonResource
{

    public function __construct($resource)
    {
        // Ensure we call the parent constructor
        parent::__construct($resource);
        $this->resource = $resource; // $apple param passed
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [

            'id' => $this->id,

            'product_id' => $this->product_id,

            'product' => $this->product,

            'color_id' => $this->color_id,

            'color' => $this->color,

            'size_id' => $this->size_id,

            'size' => $this->size,

            'stock_qty' => $this->stock_qty,

            'stock_ordered' => $this->stock_ordered,

            'status' => $this->status,

            'sku' => $this->sku,

            'discount_price' => $this->discount_price,

            'selling_price' => $this->selling_price,

            'big_image' => $this->big_image,

            'small_image' => $this->small_image,

            'created_at' => $this->created_at,

            'updated_at' => $this->updated_at,

        ];

    }
}
