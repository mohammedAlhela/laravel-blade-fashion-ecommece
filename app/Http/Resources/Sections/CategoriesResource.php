<?php

namespace App\Http\Resources\Sections;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResource extends JsonResource
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

        $image;
        $imageName;

        $image = $this->image;
        $imageName = strchr($image, '_');
        $imageName = substr($imageName, 1);

        return [
            'id' => (int) $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'subCategories' => $this->subCategories,
            'image' => $image,
            'imageName' => $imageName,

        ];
    }
}
