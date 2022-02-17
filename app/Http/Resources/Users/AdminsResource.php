<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminsResource extends JsonResource
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

            'name' => $this->name,

            'email' => $this->email,

            'contact_number' => $this->contact_number,

            'password' => '',

            'role' => $this->role,

            'tokens' => $this->tokens,

            'status' => $this->status,

            'created_at' => $this->created_at,

            'updated_at' => $this->updated_at,

        ];

    }
}
