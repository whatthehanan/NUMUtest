<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\Resource;
class employee extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'adress' => $this->address
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('numu.test')
        ];
    }
}