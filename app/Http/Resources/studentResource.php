<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public $status;
    public $messege;
    public $resource;

    public function __construct($resource, $status, $messege)
    {
        $this->status = $status;
        $this->messege = $messege;
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status' => $this->status,
            'messege' => $this->messege,
            'data' => $this->resource,
        ];
    }
}