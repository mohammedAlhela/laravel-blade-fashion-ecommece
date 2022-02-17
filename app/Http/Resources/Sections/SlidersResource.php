<?php

namespace App\Http\Resources\Sections;

use Illuminate\Http\Resources\Json\JsonResource;

class SlidersResource extends JsonResource
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

        $images = $this->images;
        $bigImage = '/images/sliders/big/big.jpg';
        $smallImage = '/images/sliders/small/small.jpg';

        foreach ($images as $image) {
            if ($image->screen == "big") {
                $bigImage = $image->image;
            } else if ($image->screen == "small") {
                $smallImage = $image->image;
            }
        }

        $bigImageName = strchr($bigImage, '_');
        $bigImageName = substr($bigImageName, 1);

        $smallImageName = strchr($smallImage, '_');
        $smallImageName = substr($smallImageName, 1);

        return [
            'id' => (int) $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'images' => $this->images,
            'bigImage' => $bigImage,
            'smallImage' => $smallImage,
            'bigImageName' => $bigImageName,
            'smallImageName' => $smallImageName,

        ];
    }
}
